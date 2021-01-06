<?php

use Illuminate\Database\Seeder;
use App\MatkulDosen;
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
               'id_matkul_dosen'=>'ID1',
               'id_matkul'=>'MK1',
               'id_dosen'=>'DS1'
            ],
        ];
  
        foreach ($matkul as $key => $value) {
            MatkulDosen::create($value);
        }
    }
}
