<?php

namespace Database\Seeders;

use App\Models\StatusKawin;
use App\Models\Tahun;
use Illuminate\Database\Seeder;

class TahunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuss = [
            'AKTIF',
            'NON-AKTIF'
        ];

        foreach ($statuss as $data) :
            Tahun::firstOrCreate([
                'status' => $data
            ]);
        endforeach;
    }
}