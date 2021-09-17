<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sottocategorie', function (Blueprint $table) {
            $table->id();
            $table->text('nome');
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->text('rotta');
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorie')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sottocategorie');
    }
}
