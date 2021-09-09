<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserServicesRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_services_rates', function (Blueprint $table) {
            $table->id();
            $table->string('preferred_currency')->nullable();
            $table->boolean('notify')->default('0')->comments= '1 for Notify about Jobs for non-profit or charitable organizations.';
            $table->boolean('rates_visible')->default('0')->comments= '1 Your rates are visible on your profile page.';
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('user_services_rates');
    }
}
