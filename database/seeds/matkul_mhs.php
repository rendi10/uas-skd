<?php

use Illuminate\Database\Seeder;
use App\MatkulMahasiswa;
class matkul_mhs extends Seeder
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
               'id_matkul_mahasiswa'=>'MM1',
               'id_matkul'=>'MK1',
               'id_mahasiswa'=>'M1'
            ],
        ];
  
        foreach ($matkul as $key => $value) {
            MatkulMahasiswa::create($value);
        }
    }
}
