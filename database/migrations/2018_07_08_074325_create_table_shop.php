<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableShop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('shops', function (Blueprint $table) {
          $table->increments('id');
          $table->string('id_order'); //satu paket pemesanan
          $table->string('email');    //users
          $table->string('name');     //products
          $table->integer('total');   //jumlah products
          $table->string('status');   //status pembayaran
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
        Schema::dropIfExists('shops');
    }
}
