<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_histories', function (Blueprint $table) {
            $table->id();
            $table->string('job_title')->nullable();
            $table->longtext('comment')->nullable();
            $table->string('rating')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('jobs_id')->unsigned();
            $table->foreign('jobs_id')->references('id')->on('jobs');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('work_histories');
    }
}
