<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NiveauFormationsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('niveau_formations')->upsert([
            [
                'id' => 1,
                'code' => 'S',
                'nom' => 'S',
            ],
            [
                'id' => 2,
                'code' => 'Q',
                'nom' => 'Q',
            ],
            [
                'id' => 3,
                'code' => 'T',
                'nom' => 'T',
            ],
            [
                'id' => 4,
                'code' => 'TS',
                'nom' => 'TS',
            ],
            [
                'id' => 5,
                'code' => 'FQ',
                'nom' => 'FQ',
            ],
        ], ['id'], ['code', 'nom']);
    }
}