<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Q extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adImages',function(Blueprint $table)
        {
            $table->increments('id');

            $table->string("name");
            $table->integer('adId')->unsigned();
            $table->foreign("adId")->references('id')->on('Ads')-> onDelete('cascade');
   //  $table->binary("img")->nullable();
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
        //
    }
}
