<?php

namespace Tests\Feature;

use App\Quarter;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class QuarterTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    /** @test */
    public function an_index_shows_all_quarters()
    {
        // Happy path
        $user = factory(User::class)->create();

        $this->withExceptionHandling()
            ->actingAs($user)
            ->get(route('quarter.index'))
            ->assertStatus(200);
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
        $newQuarter = factory(Quarter::class)->raw();

        $this->withExceptionHandling()
            ->actingAs($user)
            ->post(route('quarter.store'), $newQuarter)
            ->assertStatus(201);
    }
}
