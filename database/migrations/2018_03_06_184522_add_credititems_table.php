<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCredititemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_items', function (Blueprint $table){
            $table->uuid('id');
            $table->primary('id');
            $table->string('abbrev',10);
            $table->string('name');
            $table->unsignedDecimal('credits', 5, 2)->default(0);
            $table->tinyInteger('type')->unsigned()->default(0);
            $table->tinyInteger('status')->unsigned()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credit_items');
    }
}
