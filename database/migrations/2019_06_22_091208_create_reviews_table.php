<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('fees', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->bigInteger('amount');
           $table->unsignedBigInteger('student_id');
           $table->foreign('student_id')->references('id')->on('students');
           $table->date('registered_on');
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
        Schema::dropIfExists('fees');
    }
}
