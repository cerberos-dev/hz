<?php

namespace Tests\Feature;

use App\User;
use function factory;
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
        $user = factory(User::class)->create();

        $this->withExceptionHandling()
            ->actingAs($user)
            ->get(route('quarter'))
            ->assertStatus(200);
    }

    /** @test */
    public function a_guest_cannot_see_quarters()
    {
        $this->withExceptionHandling()
            ->get(route('quarter'))
            ->assertStatus(302);
    }
}
