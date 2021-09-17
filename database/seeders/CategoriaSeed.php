<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie')->insert(array(
            'nome' => 'ROPA',
            'rotta' => 'ropa',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('categorie')->insert(array(
            'nome' => 'CALZADO',
            'rotta' => 'calzado',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('categorie')->insert(array(
            'nome' => 'ACCESORIOS',
            'rotta' => 'accesorios',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('categorie')->insert(array(
            'nome' => 'TECNOLOGÍA',
            'rotta' => 'tecnologia',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('categorie')->insert(array(
            'nome' => 'CURSOS',
            'rotta' => 'cursos',
            'created_at' => '2021-08-17 22:09:10'
        ));
    }
}
