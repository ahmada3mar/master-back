<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('agility')->nullable();
            $table->string('team_work')->nullable();
            $table->string('leadership_skill')->nullable();
            $table->string('time_management')->nullable();
            $table->string('presentation_skills')->nullable();
            $table->string('oral_expression')->nullable();
            $table->string('quality_of_the_answers')->nullable();
            $table->string('business_ethics')->nullable();
            $table->text('evaluation')->nullable();
            $table->string('note')->nullable();
            $table->boolean('is_published')->default(false);
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
        Schema::dropIfExists('evaluations');
    }
}
