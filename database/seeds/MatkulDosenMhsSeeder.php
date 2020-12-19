<?php

use Illuminate\Database\Seeder;
use App\MatkulC;
class MatkulDosenMhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matkul = [
            [
               'id_matkulDM'=>'IDM1',
               'id_matkul'=>'MK1',
               'id_dosen'=>'DS1',
               'id_mahasiswa'=>'M1'
            ],
        ];
  
        foreach ($matkul as $key => $value) {
            MatkulC::create($value);
        }
    }
}
