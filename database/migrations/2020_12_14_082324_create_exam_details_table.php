<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('reading_score')->nullable();
            $table->bigInteger('listening_score')->nullable();
            $table->bigInteger('speaking_score')->nullable();
            $table->bigInteger('writing_score')->nullable();
            $table->bigInteger('scores')->nullable();
            $table->bigInteger('overall')->nullable();
            $table->bigInteger('verbal_score')->nullable();
            $table->bigInteger('verbal_rank')->nullable();
            $table->bigInteger('quantitiative_score')->nullable();
            $table->bigInteger('quantitiative_rank')->nullable();
            $table->bigInteger('total')->nullable();
            $table->timestamp('date_of_exam')->nullable();
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
        Schema::dropIfExists('exam_details');
    }
}
