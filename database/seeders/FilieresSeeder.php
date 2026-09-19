<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilieresSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('filieres')->upsert([
            [
                'id' => 1,
                'code' => 'EB',
                'nom' => 'EB',
                'secteur_id' => 1,
            ],
            [
                'id' => 2,
                'code' => 'MA',
                'nom' => 'MA',
                'secteur_id' => 2,
            ],
            [
                'id' => 3,
                'code' => 'OSCC',
                'nom' => 'OSCC',
                'secteur_id' => 3,
            ],
            [
                'id' => 4,
                'code' => 'EIT',
                'nom' => 'EIT',
                'secteur_id' => 1,
            ],
            [
                'id' => 5,
                'code' => 'AEFGT',
                'nom' => 'AEFGT',
                'secteur_id' => 4,
            ],
            [
                'id' => 6,
                'code' => 'TDB',
                'nom' => 'TDB',
                'secteur_id' => 2,
            ],
            [
                'id' => 7,
                'code' => 'AA',
                'nom' => 'AA',
                'secteur_id' => 5,
            ],
            [
                'id' => 8,
                'code' => 'TFCC',
                'nom' => 'TFCC',
                'secteur_id' => 4,
            ],
            [
                'id' => 9,
                'code' => 'DEV',
                'nom' => 'DEV',
                'secteur_id' => 6,
            ],
            [
                'id' => 10,
                'code' => 'GE',
                'nom' => 'GE',
                'secteur_id' => 5,
            ],
            [
                'id' => 11,
                'code' => 'GC',
                'nom' => 'GC',
                'secteur_id' => 2,
            ],
            [
                'id' => 12,
                'code' => 'GEOCM',
                'nom' => 'GEOCM',
                'secteur_id' => 5,
            ],
            [
                'id' => 13,
                'code' => 'DEVOWFS',
                'nom' => 'DEVOWFS',
                'secteur_id' => 6,
            ],
            [
                'id' => 14,
                'code' => 'GEOCF',
                'nom' => 'GEOCF',
                'secteur_id' => 5,
            ],
            [
                'id' => 15,
                'code' => 'AAOCP',
                'nom' => 'AAOCP',
                'secteur_id' => 5,
            ],
            [
                'id' => 16,
                'code' => 'AEFGTOF',
                'nom' => 'AEFGTOF',
                'secteur_id' => 4,
            ],
            [
                'id' => 17,
                'code' => 'AAOC',
                'nom' => 'AAOC',
                'secteur_id' => 5,
            ],
            [
                'id' => 18,
                'code' => 'TSGE',
                'nom' => 'TSGE',
                'secteur_id' => 7,
            ],
            [
                'id' => 19,
                'code' => 'PIE',
                'nom' => 'PIE',
                'secteur_id' => 5,
            ],
            [
                'id' => 20,
                'code' => 'ACF',
                'nom' => 'ACF',
                'secteur_id' => 5,
            ],
            [
                'id' => 21,
                'code' => 'SME',
                'nom' => 'SME',
                'secteur_id' => 6,
            ],
            [
                'id' => 22,
                'code' => 'SMW',
                'nom' => 'SMW',
                'secteur_id' => 6,
            ],
        ], ['id'], ['code', 'nom', 'secteur_id']);
    }
}