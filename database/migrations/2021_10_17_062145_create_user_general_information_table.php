<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGeneralInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_general_information', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gemail')->unique();
            $table->string('postal_code')->nullable();
            $table->longText('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->unsignedBigInteger('country')->nullable();
            $table->string('telephone')->nullable();
            $table->string('fax')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('second_email')->unique();
            $table->string('website')->nullable();
            $table->string('company_name')->nullable();
            $table->string('position')->nullable();
            $table->longText('secret_question')->nullable();
            $table->longText('secret_answer')->nullable();
            $table->longText('special_keywords')->nullable();
            $table->longText('accreditations')->nullable();
            $table->longText('membership_professional_associations')->nullable();
            $table->longText('platform_hardware')->nullable();
            $table->longText('cover_letter')->nullable();
            $table->string('advertising_slogan')->nullable();
            $table->boolean('private_information')->default('0')->comment =' 0 for hide and 1 for show';
            $table->boolean('disallow_indexing')->default('1')->comment   =' 1 for search engine  and 0 for not';
            $table->boolean('display_contact_info')->default('1')->comment=' 1 for display contact info  and 0 for not';
            $table->boolean('news_notification')->default('0')->comment=' 0 for off  and 1 for on';
            $table->boolean('jobsnotification')->default('0')->comment=' 0 for off  and 1 for on';
            $table->boolean('show_rated_users')->default('0')->comment=' 1 for Show the list of all outsourcers and service providers rated by you on your profile page';
            $table->foreign('country')->references('id')->on('countries');
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
        Schema::dropIfExists('user_general_information');
    }
}
