<?php

use Illuminate\Database\Seeder;
use App\Dosen;
class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dosen = [
            [
               'id_dosen'=>'DS1',
               'nama'=>'Pak Fiddin',
               'id_user'=>'US3'
            ],
            [
               'id_dosen'=>'DS2',
               'nama'=>'Pak Bayu',
               'id_user'=>'US4'
            ],
        ];
  
        foreach ($dosen as $key => $value) {
            Dosen::create($value);
        }
    }
}
