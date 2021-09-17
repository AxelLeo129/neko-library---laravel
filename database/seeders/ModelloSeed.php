<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelloSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modello')->insert(array(
            'barra_alto' => '#000000',
            'testo_alto' => '#ffffff',
            'colore_sfondo' => '#47bac1',
            'colore_testo' => '#ffffff',
            'logo' => 'https://firebasestorage.googleapis.com/v0/b/neko-library.appspot.com/o/template%2Flogo.png?alt=media&token=16d092d4-95d8-45c9-ab11-32b2e45b4a12',
            'icona' => 'https://firebasestorage.googleapis.com/v0/b/neko-library.appspot.com/o/template%2Ficono.png?alt=media&token=ffcf32f3-cbf4-4084-a966-861121296dbb',
            'social_networks' => '[{"rete": "faFacebook", "stile": "white--facebook", "url": "https://facebook.com/"}, {"rete": "faYoutube", "stile": "white--youtube", "url": "https://youtube.com/"}, {"rete": "faTwitter", "stile": "white--twitter", "url": "https://twitter.com/"}, {"rete": "faInstagram", "stile": "white--instagram", "url": "https://instagram.com/"}]',
            'created_at' => '2021-08-16 22:09:10'
        ));

        $this->command->info("Salvataggio del modello riuscito");
    }
}
