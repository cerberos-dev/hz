<?php

namespace Tests\Feature;

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
        $this->withExceptionHandling()
            ->get(route('quarter'))
            ->assertStatus(200);
    }
}
