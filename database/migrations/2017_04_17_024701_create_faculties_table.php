<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('university_id');
            $table->float('fees',7,2)->nullable();
            $table->timestamps();
            $table->string('name',100);
            $table->string('city',60);
            $table->string('website_url',255);
            $table->string('facebook_page',255);
            $table->string('description',255);
            $table->string('departments',255);
            $table->string('logo',255)->nullable();
            $table->string('pic1',255)->nullable();
            $table->string('pic2',255)->nullable();
            $table->string('location',100);
            $table->double('x',20,15);
            $table->double('y',20,15);
            $table->string('president_name',30);
            $table->string('past_presidents',255);
            $table->string('contacts',255);
            $table->string('others',255)->nullable();
        });

        Schema::table('faculties', function(Blueprint $table) {
            $table->foreign('university_id')->references('id')->on('universities')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculties');
    }
}
