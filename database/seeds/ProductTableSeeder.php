<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds. Esto crea la tabla
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/8134AkhQJgL.jpg',
            'title' => 'El Lord de los Anillos',
            'description' => 'El libro de fantasia mas reconocido de todos los tiempos, quien inspiro a otras obras como Warcraft, Warhammer y Calabozos y Dragones',
            'price' => 20,
            'type' => 'libro'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://cdn.shopify.com/s/files/1/1620/8083/products/ad3381fb730257a66cb9a601650a4efb7e35a8ad_1024x1024.jpg?v=1542260205',
            'title' => 'Amazing Fantasy numero 15',
            'description' => 'El comic que dio origen a uno de los superheroes mas reconocidos, Spider-Man',
            'price' => 15,
            'type' => 'comic'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://cdn.waterstones.com/bookjackets/large/9780/2413/9780241387160.jpg',
            'title' => 'La Guerra de los Mundos',
            'description' => 'El libro de ciencia ficcion mas conocido y el primer libro sobre invasiones extraterrestres',
            'price' => 10,
            'type' => 'libro'
        ]);
        $product->save();
    }
}
