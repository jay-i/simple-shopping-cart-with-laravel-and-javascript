<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use DateTime;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'name' => "WHITE POLO",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'price' => 200.10,
                'image' => 'https://image.freepik.com/free-vector/white-shirt-template_1132-95.jpg?2',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "BLACK POLO",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'price' => 1600.21,
                'image' => 'https://image.freepik.com/free-psd/black-polo-mockup-front-back-used-as-design-template_34168-1092.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "BLACK POLO",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'price' => 378.00,
                'image' => 'https://image.freepik.com/free-photo/blank-black-t-shirt-hanger-isolated-white-space_74952-876.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'SWEATER',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'price' => 21.10,
                'image' => 'https://image.freepik.com/free-psd/sweater-mockup-front-back_125540-579.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ]
        ];

        DB::table('products')->insert($product);
    }
}
