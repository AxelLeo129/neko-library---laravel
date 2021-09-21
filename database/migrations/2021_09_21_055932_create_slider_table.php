<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursore', function (Blueprint $table) {
            $table->id();
            $table->text('immagine_sfondo');
            $table->text('immagine_prodotto');
            $table->text('tipo');
            $table->text('stile_immagine');
            $table->text('stile_testo');
            $table->text('titolo1');
            $table->text('titolo2');
            $table->text('titolo3');
            $table->text('pulsante');
            $table->text('url');
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
        Schema::dropIfExists('cursore');
    }
}
