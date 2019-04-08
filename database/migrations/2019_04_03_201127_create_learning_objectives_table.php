<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearningObjectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_objectives', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('topic_name');
            $table->enum('level', ['easy', 'medium', 'hard']);
            $table->string('english');
            $table->string('finnish');
            $table->string('viena_karelian');
            $table->string('picture')->nullable();

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
        Schema::dropIfExists('learning_objectives');
    }
}
