<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_commandes', function (Blueprint $table) {
            $table->id();
            $table->integer('idCmd')->unsigned();
            $table->integer('idProd')->unsigned();
            $table->foreign('idCmd')->references('id')->on('commandes');
            $table->foreign('idProd')->references('id')->on('produits');
            $table->integer('qteCmde');
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
        Schema::dropIfExists('detail_commandes');
    }
}