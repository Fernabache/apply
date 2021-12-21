<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationsummaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_summaries', function (Blueprint $table) {
            $table->id();
            $table->string('country')->nullable();
            $table->string('highest_level_of_education')->nullable();
            $table->string('grading_scheme')->nullable();
            $table->bigInteger('grade_average')->nullable();
            $table->string('graduated_from_most_recent_school')->nullable();
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
        Schema::dropIfExists('education_summaries');
    }
}
