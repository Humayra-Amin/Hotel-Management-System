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


        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
   
          
        
            $table->string('roomtitle');
            $table->string('roomno');
            $table->string('floorno');
            $table->float('price')->default(0);
            $table->string('category_id');
            $table->string('roomsize');
            $table->string('roomview')->nullable();
            $table->text('maxoccupancy');
            $table->text('facilities');
            $table->text('guestservice')->nullable();
            $table->text('image')->nullable();
            $table->string('status')->nullable();


            $table->timestamps();

        });

    }


    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
