<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modello', function (Blueprint $table) {
            $table->id();
            $table->text('barra_alto');
            $table->text('testo_alto');
            $table->text('colore_sfondo');
            $table->text('colore_testo');
            $table->text('logo');
            $table->text('icona');
            $table->text('social_networks');
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
        Schema::dropIfExists('modello');
    }
}
