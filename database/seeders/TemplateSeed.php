<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('template')->insert(array(
            'barra_superior' => '#000000',
            'texto_superior' => '#ffffff',
            'color_fondo' => '#47bac1',
            'color_texto' => '#ffffff',
            'logo' => 'https://firebasestorage.googleapis.com/v0/b/neko-library.appspot.com/o/template%2Flogo.png?alt=media&token=16d092d4-95d8-45c9-ab11-32b2e45b4a12',
            'icono' => 'https://firebasestorage.googleapis.com/v0/b/neko-library.appspot.com/o/template%2Ficono.png?alt=media&token=ffcf32f3-cbf4-4084-a966-861121296dbb',
            'redes_sociales' => '[{"red": "faFacebook", "estilo": "white--facebook", "url": "https://facebook.com/"}, {"red": "faYoutube", "estilo": "white--youtube", "url": "https://youtube.com/"}, {"red": "faTwitter", "estilo": "white--twitter", "url": "https://twitter.com/"}, {"red": "faInstagram", "estilo": "white--instagram", "url": "https://instagram.com/"}]',
            'created_at' => '2021-08-16 22:09:10'
        ));

        $this->command->info("Plantilla almacenada exitosamente");
    }
}
