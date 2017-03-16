<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Morceaux extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('morceaux', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('artiste');
         });  
            
          
    }
                        
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('morceaux');
    }
}
