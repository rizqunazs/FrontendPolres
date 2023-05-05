<?php

namespace Database\Seeders;

// use App\Models\Agama;
use App\Models\Fakultas;
use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faculties = [
            '009FISIP',
            '010FEB',
            '011FBS',
            '012FH',
            '013FT'
        ];

        foreach ($faculties as $faculty) :
            Fakultas::firstOrCreate([
                'kode_fakultas' => $faculty
            ]);
        endforeach;
    }
}
