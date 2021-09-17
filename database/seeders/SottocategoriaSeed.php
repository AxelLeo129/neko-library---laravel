<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SottocategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sottocategorie')->insert(array(
            'nome' => 'Ropa para dama',
            'categoria_id' => 1,
            'rotta' => 'ropa-para-dama',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('sottocategorie')->insert(array(
            'nome' => 'Ropa para hombre',
            'categoria_id' => 1,
            'rotta' => 'ropa-para-masculino',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('sottocategorie')->insert(array(
            'nome' => 'Ropa deportiva',
            'categoria_id' => 1,
            'rotta' => 'ropa-deportiva',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('sottocategorie')->insert(array(
            'nome' => 'Ropa infantil',
            'categoria_id' => 1,
            'rotta' => 'ropa-infantil',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('sottocategorie')->insert(array(
            'nome' => 'Calzado para dama',
            'categoria_id' => 2,
            'rotta' => 'calzado-para-dama',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('sottocategorie')->insert(array(
            'nome' => 'Calzado para hombre',
            'categoria_id' => 2,
            'rotta' => 'calzado-para-hombre',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('sottocategorie')->insert(array(
            'nome' => 'Calzado deportivo',
            'categoria_id' => 2,
            'rotta' => 'calzado-deportivo',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('sottocategorie')->insert(array(
            'nome' => 'Calzado infantil',
            'categoria_id' => 2,
            'rotta' => 'calzado-infantil',
            'created_at' => '2021-08-17 22:09:10'
        ));
        
        DB::table('sottocategorie')->insert(array(
            'nome' => 'Bolsos',
            'categoria_id' => 3,
            'rotta' => 'bolsos',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('sottocategorie')->insert(array(
            'nome' => 'Relojes',
            'categoria_id' => 3,
            'rotta' => 'relojes',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('sottocategorie')->insert(array(
            'nome' => 'Pulseras',
            'categoria_id' => 3,
            'rotta' => 'pulseras',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('sottocategorie')->insert(array(
            'nome' => 'Collares',
            'categoria_id' => 3,
            'rotta' => 'collares',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('sottocategorie')->insert(array(
            'nome' => 'Gafas de sol',
            'categoria_id' => 3,
            'rotta' => 'gafas-de-sol',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('sottocategorie')->insert(array(
            'nome' => 'Teléfonos Móvil',
            'categoria_id' => 4,
            'rotta' => 'telefonos-movil',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('sottocategorie')->insert(array(
            'nome' => 'Tabletas Electrónicas',
            'categoria_id' => 4,
            'rotta' => 'tabletas-electronicas',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('sottocategorie')->insert(array(
            'nome' => 'Computadoras',
            'categoria_id' => 4,
            'rotta' => 'computadoras',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('sottocategorie')->insert(array(
            'nome' => 'Auriculares',
            'categoria_id' => 4,
            'rotta' => 'auriculares',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('sottocategorie')->insert(array(
            'nome' => 'Desarrollo Web',
            'categoria_id' => 5,
            'rotta' => 'desarrollo-web',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('sottocategorie')->insert(array(
            'nome' => 'Aplicaciones Móviles',
            'categoria_id' => 5,
            'rotta' => 'aplicaciones-moviles',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('sottocategorie')->insert(array(
            'nome' => 'Diseño gráfico',
            'categoria_id' => 5,
            'rotta' => 'diseno-grafico',
            'created_at' => '2021-08-17 22:09:10'
        ));

        DB::table('sottocategorie')->insert(array(
            'nome' => 'Marketing Digital',
            'categoria_id' => 5,
            'rotta' => 'marketing-digital',
            'created_at' => '2021-08-17 22:09:10'
        ));

    }
}
