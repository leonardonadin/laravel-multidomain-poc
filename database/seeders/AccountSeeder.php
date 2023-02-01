<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            [
                'name' => 'Account 1',
                'domain' => 'account1.localhost',
                'subdomain' => 'account1',
            ], [
                'name' => 'Account 2',
                'domain' => 'account2.localhost',
                'subdomain' => 'account2',
            ], [
                'name' => 'AlcStore',
                'domain' => 'alcstore.com.br',
                'subdomain' => 'alcstore',
            ], [
                'name' => 'AlcStore - Temporário',
                'domain' => 'alcstore.web15f71.uni5.net',
                'subdomain' => 'alcstore.web15f71',
            ], [
                'name' => 'Qual o App?',
                'domain' => 'qualoapp.com.br',
                'subdomain' => 'qualoapp',
            ], [
                'name' => 'Alcance',
                'domain' => 'alcance.dev',
                'subdomain' => 'alcance',
            ]
        ]);
    }
}
