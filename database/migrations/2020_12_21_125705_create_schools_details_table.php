<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->text('about')->nullable();
            $table->string('location')->nullable();
            $table->bigInteger('cost_per_year')->default(0);
            $table->bigInteger('cost_of_living')->default(0);
            $table->bigInteger('application_fee')->default(0);
            $table->string('school_name')->nullable();
            $table->timestamp('founded')->nullable();
            $table->bigInteger('total_students')->default(0);
            $table->string('flag')->nullable();
            $table->string('school_image')->nullable();
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
        Schema::dropIfExists('schools');
    }
}
