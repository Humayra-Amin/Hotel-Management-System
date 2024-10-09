<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{


    /**
     * Run the migrations.
     */


    public function up(): void
    {

        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            $table->string('ename'); 
            $table->string('email');
            $table->string('phone'); 
            $table->string('emergencyContact');
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('Locality');
            $table->date('dob');
            $table->string('nid'); 
            $table->string('position'); 
            $table->string('gender'); 
            $table->date('joiningdate'); 
            $table->string('salary'); 
            $table->boolean('verified')->default(false);
            $table->text('image')->nullable();

            $table->timestamps();
            
        });

    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('employees');

    }
    
};
