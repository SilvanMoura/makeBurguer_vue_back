<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status')->insert([
            [
                'status_burguer' => 'Solicitado'
            ],
            [
                'status_burguer' => 'Em produção'
            ],
            [
                'status_burguer' => 'Finalizado'
            ]
        ]);
    }
}
