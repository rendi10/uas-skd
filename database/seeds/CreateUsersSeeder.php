<?php

use Illuminate\Database\Seeder;
use App\User;
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'id_user'=>'US1',
               'name'=>'Admin',
               'email'=>'admin@admin.com',
                'roles'=>'admin',
               'password'=> bcrypt('1234'),
            ],
            [
                'id_user'=>'US2',
               'name'=>'rendi',
               'email'=>'rendi@gmail.com',
                'roles'=>'mahasiswa',
               'password'=> bcrypt('1234'),
            ],
            [
                'id_user'=>'US3',
               'name'=>'pak fidin',
               'email'=>'fidin@gmail.com',
                'roles'=>'dosen',
               'password'=> bcrypt('1234'),
            ],
            [
                'id_user'=>'US4',
               'name'=>'pak bayu',
               'email'=>'bayu@gmail.com',
                'roles'=>'dosen',
               'password'=> bcrypt('1234'),
            ],
            [
                'id_user'=>'US5',
               'name'=>'icin',
               'email'=>'icin@gmail.com',
                'roles'=>'mahasiswa',
               'password'=> bcrypt('1234'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
