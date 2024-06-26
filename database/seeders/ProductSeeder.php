<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<12; $i++ ) {
            Product::create([
                'name' => 'Product'.$i,
                'detail' => 'Lorem'.$i,
                'description' => 'Lorem'.$i. 'lorem10 product detail shopping order',
                'price' => rand(10,1000),
            ]);
        }
    }
}
