<?php

namespace Tests\Unit;

use App\CreditItems;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

class CreditItemTest extends TestCase
{
    use WithFaker;

    private $abbrev;
    private $credits;
    private $type;
    private $item_name;
    private $item_status;
    private $credit;

    public function setUp()
    {
        parent::setUp();

        // Given we have all the values
        $this->abbrev = $this->faker->word;
        $this->item_name = $this->faker->word;
        $this->credits = $this->faker->numberBetween(1.25, 15);
        $this->type = $this->faker->numberBetween(0, 6);
        $this->item_status = $this->faker->numberBetween(0, 3);

        // We create new Credit items
        $this->credit = new CreditItems(
            $this->abbrev,
            $this->item_name,
            $this->credits,
            $this->type,
            $this->item_status
        );
    }

    /** @test */
    public function a_credit_item_has_an_abbreviation()
    {
        // And assert that we can retrieve a abbreviation.
        $this->assertEquals($this->abbrev, $this->credit->abbrev());
    }

    /** @test */
    public function a_credit_item_has_a_name()
    {
        // And assert that we can retrieve a name.
        $this->assertEquals($this->item_name, $this->credit->name());
    }

    /** @test */
    public function a_credit_item_has_credits()
    {
        // And assert that we can retrieve a credits.
        $this->assertEquals($this->credits, $this->credit->credits());
    }

    /** @test */
    public function a_credit_item_has_a_type()
    {
        // And assert that we can retrieve a type.
        $this->assertEquals($this->type, $this->credit->type());
    }

    /** @test */
    public function a_credit_item_has_a_status()
    {
        // And assert that we can retrieve a status.
        $this->assertEquals($this->item_status, $this->credit->status());
    }
}
