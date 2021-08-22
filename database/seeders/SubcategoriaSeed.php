<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategorias')->insert(array(
            'nombre' => 'Ropa para dama',
            'categoria_id' => 1,
            'ruta' => 'ropa-para-dama',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('subcategorias')->insert(array(
            'nombre' => 'Ropa para hombre',
            'categoria_id' => 1,
            'ruta' => 'ropa-para-masculino',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('subcategorias')->insert(array(
            'nombre' => 'Ropa deportiva',
            'categoria_id' => 1,
            'ruta' => 'ropa-deportiva',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('subcategorias')->insert(array(
            'nombre' => 'Ropa infantil',
            'categoria_id' => 1,
            'ruta' => 'ropa-infantil',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('subcategorias')->insert(array(
            'nombre' => 'Calzado para dama',
            'categoria_id' => 2,
            'ruta' => 'calzado-para-dama',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('subcategorias')->insert(array(
            'nombre' => 'Calzado para hombre',
            'categoria_id' => 2,
            'ruta' => 'calzado-para-hombre',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('subcategorias')->insert(array(
            'nombre' => 'Calzado deportivo',
            'categoria_id' => 2,
            'ruta' => 'calzado-deportivo',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('subcategorias')->insert(array(
            'nombre' => 'Calzado infantil',
            'categoria_id' => 2,
            'ruta' => 'calzado-infantil',
            'created_at' => '2021-08-17 22:09:10'
        ));
        
        DB::table('subcategorias')->insert(array(
            'nombre' => 'Bolsos',
            'categoria_id' => 3,
            'ruta' => 'bolsos',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('subcategorias')->insert(array(
            'nombre' => 'Relojes',
            'categoria_id' => 3,
            'ruta' => 'relojes',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('subcategorias')->insert(array(
            'nombre' => 'Pulseras',
            'categoria_id' => 3,
            'ruta' => 'pulseras',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('subcategorias')->insert(array(
            'nombre' => 'Collares',
            'categoria_id' => 3,
            'ruta' => 'collares',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('subcategorias')->insert(array(
            'nombre' => 'Gafas de sol',
            'categoria_id' => 3,
            'ruta' => 'gafas-de-sol',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('subcategorias')->insert(array(
            'nombre' => 'Teléfonos Móvil',
            'categoria_id' => 4,
            'ruta' => 'telefonos-movil',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('subcategorias')->insert(array(
            'nombre' => 'Tabletas Electrónicas',
            'categoria_id' => 4,
            'ruta' => 'tabletas-electronicas',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('subcategorias')->insert(array(
            'nombre' => 'Computadoras',
            'categoria_id' => 4,
            'ruta' => 'computadoras',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('subcategorias')->insert(array(
            'nombre' => 'Auriculares',
            'categoria_id' => 4,
            'ruta' => 'auriculares',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('subcategorias')->insert(array(
            'nombre' => 'Desarrollo Web',
            'categoria_id' => 5,
            'ruta' => 'desarrollo-web',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('subcategorias')->insert(array(
            'nombre' => 'Aplicaciones Móviles',
            'categoria_id' => 5,
            'ruta' => 'aplicaciones-moviles',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('subcategorias')->insert(array(
            'nombre' => 'Diseño gráfico',
            'categoria_id' => 5,
            'ruta' => 'diseno-grafico',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('subcategorias')->insert(array(
            'nombre' => 'Marketing Digital',
            'categoria_id' => 5,
            'ruta' => 'marketing-digital',
            'created_at' => '2021-08-17 22:09:10'
        ));

    }
}
