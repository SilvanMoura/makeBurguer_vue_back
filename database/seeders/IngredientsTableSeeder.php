<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ingredients')->insert([
            [
                'breads' => 'Italiano Branco',
                'meats' => 'Maminha',
                'optionals' => 'Bacon',
            ],
            [
                'breads' => '3 Queijos',
                'meats' => 'Alcatra',
                'optionals' => 'Cheddar',
            ],
            [
                'breads' => 'Parmesão e Orégano',
                'meats' => 'Picanha',
                'optionals' => 'Salame',
            ],
            [
                'breads' => 'Integral',
                'meats' => 'Veggie burger',
                'optionals' => 'Tomate',
            ],
            [
                'breads' => 'Brioche',
                'meats' => 'Vegetariano (base de legumes e grãos)',
                'optionals' => 'Cebola Roxa',
            ],
            [
                'breads' => 'Centeio',
                'meats' => 'Frango',
                'optionals' => 'Pepino',
            ]
        ]);
    }
}
