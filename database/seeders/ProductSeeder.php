<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('products')->insert([
            'name' => 'Product 1',
            'description' => 'Product 1 description',
        ]);

        DB::table('products')->insert([
            'name' => 'Product 2',
            'description' => 'Product 2 description',
        ]);

        DB::table('product_prices')->insert([
            'product_id' => 1,
            'price' => 10.00,
            'promo_price' => 5.00,
            'account_id' => 1,
        ]);

        DB::table('product_prices')->insert([
            'product_id' => 1,
            'price' => 20.00,
            'promo_price' => 10.00,
            'account_id' => 2,
        ]);

        DB::table('product_prices')->insert([
            'product_id' => 2,
            'price' => 30.00,
            'promo_price' => 15.00,
            'account_id' => 1,
        ]);

        DB::table('product_prices')->insert([
            'product_id' => 2,
            'price' => 40.00,
            'promo_price' => 20.00,
            'account_id' => 2,
        ]);

        DB::table('product_stocks')->insert([
            'product_id' => 1,
            'quantity' => 10,
            'account_id' => 1,
        ]);

        DB::table('product_stocks')->insert([
            'product_id' => 1,
            'quantity' => 20,
            'account_id' => 2,
        ]);

        DB::table('product_stocks')->insert([
            'product_id' => 2,
            'quantity' => 30,
            'account_id' => 1,
        ]);

        DB::table('product_stocks')->insert([
            'product_id' => 2,
            'quantity' => 40,
            'account_id' => 2,
        ]);
    }
}
