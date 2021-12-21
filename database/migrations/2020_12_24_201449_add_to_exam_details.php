<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToExamDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exam_details', function (Blueprint $table) {
            $table->bigInteger('user_id')->nullable();
            $table->string('exam_type')->nullable();
            $table->string('overall_scores')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exam_details', function (Blueprint $table) {
            //
        });
    }
}
