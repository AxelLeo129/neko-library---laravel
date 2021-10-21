<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodotti', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->unsignedBigInteger('sottocategoria_id')->nullable();
            $table->text('tipo');
            $table->text('rotta');
            $table->text('titolo');
            $table->text('titolo_breve');
            $table->text('descripzione');
            $table->text('detagli');
            $table->float('prezzo');
            $table->text('copertina');
            $table->integer('visualizzazioni');
            $table->integer('visualizzazioni_gratuito');
            $table->integer('vendite');
            $table->integer('vendite_gratuito');
            $table->integer('offerto_categoria');
            $table->integer('offerto_sottocategoria');
            $table->integer('offerta');
            $table->float('prezzo_offerta');
            $table->integer('sconto_offerta');
            $table->text('immagine_offerta');
            $table->dateTime('fine_offerta');
            $table->integer('nuovo');
            $table->float('peso');
            $table->float('consegna');
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorie')->onDelete('set null');
            $table->foreign('sottocategoria_id')->references('id')->on('sottocategorie')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prodotti');
    }
}
