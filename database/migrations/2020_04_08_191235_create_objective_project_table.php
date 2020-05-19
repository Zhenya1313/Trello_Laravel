<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectiveProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objective_project', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('objective_id')->unsigned();
//            $table->foreign('objective_id')->references('id')->on('objectives')->onDelete('cascade');
            $table->integer('project_id')->unsigned();
//            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');

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
        Schema::dropIfExists('objective_project');
    }
}
