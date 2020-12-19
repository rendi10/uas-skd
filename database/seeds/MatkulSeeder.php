<?php

use Illuminate\Database\Seeder;
use App\Matkul;
class MatkulSeeder extends Seeder
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
               'id_matkul'=>'MK1',
               'nama'=>'Jaringan',
                'is_aktif'=>FALSE
            ],
            [
               'id_matkul'=>'MK2',
               'nama'=>'Pemrograman',
                'is_aktif'=>FALSE
            ],
            [
               'id_matkul'=>'MK3',
               'nama'=>'OS',
                'is_aktif'=>FALSE
            ],
            [
               'id_matkul'=>'MK4',
               'nama'=>'Pemrograman',
                'is_aktif'=>FALSE
            ],
            [
               'id_matkul'=>'MK5',
               'nama'=>'Database',
                'is_aktif'=>FALSE
            ],
            [
               'id_matkul'=>'MK6',
               'nama'=>'Mulmed',
                'is_aktif'=>FALSE
            ],
            [
               'id_matkul'=>'MK7',
               'nama'=>'Design',
                'is_aktif'=>FALSE
            ],
            [
               'id_matkul'=>'MK8',
               'nama'=>'Anapersis',
                'is_aktif'=>FALSE
            ],
            [
               'id_matkul'=>'MK9',
               'nama'=>'Pemweb',
                'is_aktif'=>FALSE
            ],
            [
               'id_matkul'=>'MK10',
               'nama'=>'Android',
                'is_aktif'=>FALSE
            ],
        ];
  
        foreach ($matkul as $key => $value) {
            Matkul::create($value);
        }
    }
}
