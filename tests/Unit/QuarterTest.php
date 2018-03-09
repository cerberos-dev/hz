<?php

namespace Tests\Unit;

use App\Quarter;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

class QuarterTest extends TestCase
{
    use WithFaker;

    /** @test */
    public function a_quarter_has_a_year()
    {
        // Given we have a year and order
        $year = $this->faker->numberBetween(1, 4);
        $order = $this->faker->numberBetween(1, 4);

        // We create a new quarter
        $quarter = new Quarter($year, $order);

        // And assert that we can retrieve a year.
        $this->assertEquals($year, $quarter->year());
    }

    /** @test */
    public function a_quarter_has_an_order()
    {
        // Given we have a year and order
        $year = $this->faker->numberBetween(1, 4);
        $order = $this->faker->numberBetween(1, 4);

        // We create a new quarter
        $quarter = new Quarter($year, $order);

        // And assert that we can retrieve an order.
        $this->assertEquals($order, $quarter->order());
    }
}
