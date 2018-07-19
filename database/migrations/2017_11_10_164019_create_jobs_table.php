<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            //$table->integer('user_id');
            $table->integer('company_id');
            $table->string('jobTitle');
            $table->longText('jobDescription');
            $table->longText('jobRequirement');
            $table->integer('contractType_id');
            $table->integer('category_id');
            $table->integer('salaryRange_id');
            $table->integer('location_id');
            $table->string('hire');
            $table->string('deadLine');
            $table->integer('level_id');
            $table->integer('degree_id');
            $table->integer('preferred_experience_id');
            $table->string('language');

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
