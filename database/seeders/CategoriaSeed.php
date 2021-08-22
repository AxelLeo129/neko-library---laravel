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
        DB::table('categorias')->insert(array(
            'nombre' => 'ROPA',
            'ruta' => 'ropa',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('categorias')->insert(array(
            'nombre' => 'CALZADO',
            'ruta' => 'calzado',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('categorias')->insert(array(
            'nombre' => 'ACCESORIOS',
            'ruta' => 'accesorios',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('categorias')->insert(array(
            'nombre' => 'TECNOLOGÍA',
            'ruta' => 'tecnologia',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('categorias')->insert(array(
            'nombre' => 'CURSOS',
            'ruta' => 'cursos',
            'created_at' => '2021-08-17 22:09:10'
        ));
    }
}
