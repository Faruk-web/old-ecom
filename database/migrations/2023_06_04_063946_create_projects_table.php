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
            $table->integer('residential')->nullable();
            $table->integer('commercial')->nullable();
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
