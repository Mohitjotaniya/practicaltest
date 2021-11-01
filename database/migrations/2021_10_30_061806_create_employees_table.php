<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('e_id');
            $table->string('e_name');
            $table->string('lname');
            $table->string('gender');   
            $table->date('bod');
            $table->Integer('age');
            $table->Integer('contact');
            $table->string('city');
            $table->string('company');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image');

            
          
           
           
          
           
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
        Schema::dropIfExists('employees');
    }
}
