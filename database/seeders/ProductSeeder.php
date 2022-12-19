<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Red yellow cotton saree',
                'price'=>'1800',
                'category'=>'Saree',
                'description'=>"The fabric of the saree is pure cotton with hand printed design.",
                'gallery'=>'https://assets0.mirraw.com/images/9596410/Apsara_Red_01_large.jpg?1632732138'
            ],
            [
                'name'=>'White cotton panjabi',
                'price'=>'1790',
                'category'=>'Panjabi',
                'description'=>"The fabric of the panjabi is mixed cotton.",
                'gallery'=>'https://cdn.shopify.com/s/files/1/0564/4081/5810/products/WHITE1-1_92b2b75c-ba09-4049-baa4-09caf895f399_1024x1024@2x.jpg?v=1649313598'
            ],
            [
                'name'=>'Ocean green tunic top',
                'price'=>'1100',
                'category'=>'Tunic',
                'description'=>"Womens plus size tunic tops material: 95% Polyester, 5% Spandex. Soft, Lightweight, Stretchy fabric, comfortable to wear with loose fit style.",
                'gallery'=>'https://m.media-amazon.com/images/W/WEBP_402378-T1/images/I/51IAC4e-PgL._AC_UL1111_.jpg'
            ],
            [
                'name'=>'Full sleeve mens shirt 001',
                'price'=>'1350',
                'category'=>'Shirt',
                'description'=>"Fabrics: Imported chinease 97% cotton and 3% mixed.",
                'gallery'=>'https://allmarket.com.bd/wp-content/uploads/2016/10/S145.jpg'
            ]
        ]);
    }
}
