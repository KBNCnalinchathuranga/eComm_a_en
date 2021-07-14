<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;




class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('products')->insert([


            [

                'name' => 'lenovo  Mobile',
                'price' => '23000',
                'description' =>"A smart phone new one",
                'category' =>"mobile",
                "gallery"=>"www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-1100-V3.jpg"
            ],
            [

                'name' => 'Apple  Mobile',
                'price' => '120020',
                'description' =>"A smart phone new one",
                'category' =>"tv",
                "gallery"=>"https://i.ibb.co/6RZW23Z/photo-1607860460982-3148cd5408bf.jpg"
            ],
            [

                'name' => 'lenovo  TM',
                'price' => '15000',
                'description' =>"A smart phone new one",
                'category' =>"tv",
                "gallery"=>"https://i.ibb.co/ChCD6HN/photo-1511707171634-5f897ff02aa9.jpg"
            ],
            [

                'name' => 'samsung  Mobile',
                'price' => '37000',
                'description' =>"A smart phone new one",
                'category' =>"fridge",
                "gallery"=>"https://i.ibb.co/6WQLzt9/photo-1598327105666-5b89351aff97.jpg"
            ]

        ]);
    }
}
