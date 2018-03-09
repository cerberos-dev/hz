<?php

namespace Tests\Feature;

use App\Models\Quarter;
use function json_decode;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;

class QuarterTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    /** @test */
    public function an_index_shows_all_quarters()
    {
        // Happy path
        // Make sure we have Quarters to show
        $quarters = factory(Quarter::class)->create();
        $user = factory(User::class)->create();

        // Make sure we get a status 200 and we don't get redirected
        $response = $this->withExceptionHandling()
            ->actingAs($user)
            ->get(route('quarter.index'))
            ->assertStatus(200);

        // We make sure the response shows all quarters
        $this->assertEquals($response->getContent(), $quarters->all());
    }

    /** @test */
    public function a_guest_cannot_see_quarters()
    {
        // Sad path
        $this->withExceptionHandling()
            ->get(route('quarter.index'))
            ->assertStatus(302);
    }

    /** @test */
    public function a_new_quarter_can_be_added()
    {
        // Happy path
        $user = factory(User::class)->create();
        // Create quarter data to be submitted.
        $newQuarter = factory(Quarter::class)->raw();

        // Make sure we get a status 200 and we don't get redirected
        $response = $this->withExceptionHandling()
            ->actingAs($user)
            ->post(route('quarter.store'), $newQuarter)
            ->assertStatus(201);

        $this->assertDatabaseHas('quarters', [
            'id' => json_decode($response->getContent())->id
        ]);
    }

    /** @test */
    public function a_guest_cannot_add_a_new_quarter()
    {
        // Sad path
        $newQuarter = factory(Quarter::class)->raw();

        $this->withExceptionHandling()
            ->post(route('quarter.store'), $newQuarter)
            ->assertStatus(302);
    }
}
