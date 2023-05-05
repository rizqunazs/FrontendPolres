<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Seeder;

class JenjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenjang = [
            'D3',
            'D4',
            'Sarjana(S1)',
            'Magister(S2)',
            'Doctor(S3)'
        ];

        foreach ($jenjang as $data) :
            Prodi::firstOrCreate([
                'jenjang_id' => $data
            ]);
        endforeach;
    }
}
