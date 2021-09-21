<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoreSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursore')->insert(array(
            'immagine_prodotto' => 'https://firebasestorage.googleapis.com/v0/b/neko-library.appspot.com/o/slide%2Fcalzado.png?alt=media&token=9b5fa55f-a4f7-4140-9a1e-4018600a51e4',
            'immagine_sfondo' => 'https://firebasestorage.googleapis.com/v0/b/neko-library.appspot.com/o/slide%2Fback_default.jpg?alt=media&token=d12ba168-bcad-40f6-b51d-71dbac93fd48',
            'tipo' => 'slide--option--1',
            'stile_immagine' => '{"top": "15%", "right": "10%", "width": "45%", "left": ""}',
            'stile_testo' => '{"top": "20%", "left": "10%", "width": "40%", "right": ""}',
            'titolo1' => '{"testo": "Lorem Ipsum", "color": "#333"}',
            'titolo2' => '{"testo": "Lorem Ipsum dolor sit", "color": "#777"}',
            'titolo3' => '{"testo": "Lorem Ipsum dolor sit", "color": "#888"}',
            'pulsante' => '<button class="animate__animated animate__fadeIn animate__delay-1s animate__delay-1s btn btn-info back--color text-uppercase">VER PRODUCTO <fa-icon [icon]="faChevronRight"></fa-icon></button>',
            'url' => '#',
            'created_at' => '2021-09-21 22:09:10'
        ));

        DB::table('cursore')->insert(array(
            'immagine_prodotto' => 'https://firebasestorage.googleapis.com/v0/b/neko-library.appspot.com/o/slide%2Fcurso.png?alt=media&token=106af9e6-fcee-4b1e-832d-856ac449fa3f',
            'immagine_sfondo' => 'https://firebasestorage.googleapis.com/v0/b/neko-library.appspot.com/o/slide%2Fback_default.jpg?alt=media&token=d12ba168-bcad-40f6-b51d-71dbac93fd48',
            'tipo' => 'slide--option--2',
            'stile_immagine' => '{"top": "5%", "left": "15%", "width": "25%", "right": ""}',
            'stile_testo' => '{"top": "20%", "right": "10%", "width": "40%", "left": ""}',
            'titolo1' => '{"testo": "Lorem Ipsum", "color": "#333"}',
            'titolo2' => '{"testo": "Lorem Ipsum dolor sit", "color": "#777"}',
            'titolo3' => '{"testo": "Lorem Ipsum dolor sit", "color": "#888"}',
            'pulsante' => '<button class="animate__animated animate__fadeIn animate__delay-1s btn btn-info back--color text-uppercase">VER PRODUCTO <fa-icon [icon]="faChevronRight"></fa-icon></button>',
            'url' => '#',
            'created_at' => '2021-09-21 22:09:10'
        ));

        DB::table('cursore')->insert(array(
            'immagine_prodotto' => 'https://firebasestorage.googleapis.com/v0/b/neko-library.appspot.com/o/slide%2Fiphone.png?alt=media&token=2c992069-ac3b-417e-91b9-e0261af13161',
            'immagine_sfondo' => 'https://firebasestorage.googleapis.com/v0/b/neko-library.appspot.com/o/slide%2Ffondo2.jpg?alt=media&token=a03912a3-d37c-4106-8eda-833e69ce9bc9',
            'tipo' => 'slide--option--2',
            'stile_immagine' => '{"top": "5%", "left": "15%", "width": "25%", "right": ""}',
            'stile_testo' => '{"top": "20%", "right": "10%", "width": "40%", "left": ""}',
            'titolo1' => '{"testo": "Lorem Ipsum", "color": "#333"}',
            'titolo2' => '{"testo": "Lorem Ipsum dolor sit", "color": "#777"}',
            'titolo3' => '{"testo": "Lorem Ipsum dolor sit", "color": "#888"}',
            'pulsante' => '<button class="animate__animated animate__fadeIn animate__delay-1s btn btn-info back--color text-uppercase">VER PRODUCTO <fa-icon [icon]="faChevronRight"></fa-icon></button>',
            'url' => '#',
            'created_at' => '2021-09-21 22:09:10'
        ));

        DB::table('cursore')->insert(array(
            'immagine_prodotto' => '',
            'immagine_sfondo' => 'https://firebasestorage.googleapis.com/v0/b/neko-library.appspot.com/o/slide%2Ffondo3.jpg?alt=media&token=15b1a7ab-466a-4f6a-ac57-4a0babeb63e1',
            'tipo' => 'slide--option--1',
            'stile_immagine' => '{"top": "5%", "left": "", "width": "25%", "right": "15%"}',
            'stile_testo' => '{"top": "20%", "right": "", "width": "40%", "left": "10%"}',
            'titolo1' => '{"testo": "Lorem Ipsum", "color": "#333"}',
            'titolo2' => '{"testo": "Lorem Ipsum dolor sit", "color": "#777"}',
            'titolo3' => '{"testo": "Lorem Ipsum dolor sit", "color": "#888"}',
            'pulsante' => '<button class="animate__animated animate__fadeIn animate__delay-1s btn btn-info back--color text-uppercase">VER PRODUCTO <fa-icon [icon]="faChevronRight"></fa-icon></button>',
            'url' => '#',
            'created_at' => '2021-09-21 22:09:10'
        ));
    }
}
