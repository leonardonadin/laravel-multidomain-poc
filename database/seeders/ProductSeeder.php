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
            [
                'name' => 'Product 1',
                'description' => 'Product 1 description',
            ], [
                'name' => 'Product 2',
                'description' => 'Product 2 description',
            ]
        ]);

        foreach (DB::table('accounts')->get() as $account) {
            DB::table('product_prices')->insert([
                [
                    'product_id' => 1,
                    'price' => rand(0, 100),
                    'promo_price' => rand(0, 100),
                    'account_id' => $account->id,
                ], [
                    'product_id' => 1,
                    'price' => rand(0, 100),
                    'promo_price' => rand(0, 100),
                    'account_id' => $account->id,
                ]
            ]);

            DB::table('product_stocks')->insert([
                [
                    'product_id' => 2,
                    'quantity' => rand(0, 100),
                    'account_id' => $account->id,
                ], [
                    'product_id' => 2,
                    'quantity' => rand(0, 100),
                    'account_id' => $account->id,
                ]
            ]);
        }
    }
}
