<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailVentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_ventes', function (Blueprint $table) {
            $table->id();
            $table->integer('idVente')->unsigned();
            $table->integer('idProd')->unsigned();
            $table->foreign('idVente')->references('id')->on('ventes');
            $table->foreign('idProd')->references('id')->on('produits');
            $table->integer('qteVendue');
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
        Schema::dropIfExists('detail_ventes');
    }
}