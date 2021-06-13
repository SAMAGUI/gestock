<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailLivraisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_livraisons', function (Blueprint $table) {
            $table->id();
            $table->integer('idLiv')->unsigned();
            $table->integer('idProd')->unsigned();
            $table->foreign('idLiv')->references('id')->on('livraisons');
            $table->foreign('idProd')->references('id')->on('produits');
            $table->integer('qteLiv');
            $table->integer('prixUnitAch');
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
        Schema::dropIfExists('detail_livraisons');
    }
}