<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;
class MhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs = [
            [
               'id_mahasiswa'=>'M1',
               'id_user'=>'US2',
               'nama'=>'Rendi',
                'kehadiran'=>"hadir"
            ],
            [
               'id_mahasiswa'=>'M2',
               'id_user'=>'US5',
               'nama'=>'icin',
                'kehadiran'=>"ijin"
            ],
        ];
  
        foreach ($mhs as $key => $value) {
            Mahasiswa::create($value);
        }
    }
}
