<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('status_id');
            $table->integer('category_id');
            $table->integer('location_id');
            $table->string('project_name');
            $table->string('project_short_descp');
            $table->string('project_long_descp');
            $table->string('project_thambnail');
            $table->string('project_type');
            $table->string('suqare_feet');
            $table->string('hight');
            $table->string('width');
            $table->string('basement');
            $table->string('parking');
            $table->string('facing');
            $table->string('beedroom');
            $table->string('available_units');
            $table->string('location_address');
            $table->integer('feature_project')->nullable();
            $table->integer('delivered_project')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
