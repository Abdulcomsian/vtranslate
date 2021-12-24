<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_title')->nullalbe();
            $table->string('budget')->nullable();
            $table->string('job_type')->nullable();
            $table->string('job_level')->nullable();
            $table->date('expiry_date')->nullable();
            $table->tinyInteger('expiry_status')->nullable();
            $table->longtext('job_desc')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('certify')->nullalbe();
            $table->string('job_specialization')->nullable();
            $table->string('job_software')->nullable();
            $table->tinyInteger('notify_master_member')->default(0);
            $table->tinyInteger('show_job_master_member')->default(0);
            $table->tinyInteger('publish')->default(0);
            $table->tinyInteger('show_tc_user')->default(0);
            $table->bigInteger('country_id')->unsigned()->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('linguists_live')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('job_assign')->nullable();
            $table->longtext('cancel_reason')->nullable();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('job_form')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
