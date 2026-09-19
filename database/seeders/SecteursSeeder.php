<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SecteursSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('secteurs')->upsert([
            [
                'id' => 1,
                'code' => 'GE',
                'nom' => 'GE',
            ],
            [
                'id' => 2,
                'code' => 'BTP',
                'nom' => 'BTP',
            ],
            [
                'id' => 3,
                'code' => 'TH',
                'nom' => 'TH',
            ],
            [
                'id' => 4,
                'code' => 'FGT',
                'nom' => 'FGT',
            ],
            [
                'id' => 5,
                'code' => 'GC',
                'nom' => 'GC',
            ],
            [
                'id' => 6,
                'code' => 'DIA',
                'nom' => 'DIA',
            ],
            [
                'id' => 7,
                'code' => 'AGC',
                'nom' => 'AGC',
            ],
        ], ['id'], ['code', 'nom']);
    }
}