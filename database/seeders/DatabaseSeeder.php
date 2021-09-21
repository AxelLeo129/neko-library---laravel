<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('modello')->truncate();
        DB::table('categorie')->truncate();
        DB::table('sottocategorie')->truncate();
        DB::table('cursore')->truncate();
        Schema::enableForeignKeyConstraints();

        $this->call(ModelloSeed::class);
        $this->call(CategoriaSeed::class);
        $this->call(SottocategoriaSeed::class);
        $this->call(CursoreSeed::class);
    }
}
