<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCredititemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('credit_items', function (Blueprint $table){
            $table->uuid('quarter_id')->after('id')->nullable();
        });

        Schema::table('credit_items', function (Blueprint $table){
            $table->foreign('quarter_id')
                ->references('id')
                ->on('quarters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('credit_items', function (Blueprint $table){
            $table->dropForeign('credit_items_quarter_id_foreign');
        });

        Schema::table('credit_items', function (Blueprint $table) {
            $table->dropColumn(['quarter_id']);
        });
    }
}
