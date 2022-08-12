<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('sex')->nullable();
            $table->string('services')->nullable();
            $table->string('documents')->nullable();
            $table->string('do_you_have_dependent')->nullable();
            $table->string('number_of_dependence')->nullable();
            $table->string('any_city_of_choice')->nullable();
            $table->string('city_of_your_choice')->nullable();
            $table->string('any_course_of_reference')->nullable();
            $table->string('course_of_reference')->nullable();
            $table->date('date');
            $table->time('time');
            $table->string('payment_status')->default('Pending');;
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
        Schema::dropIfExists('consultations');
    }
}
