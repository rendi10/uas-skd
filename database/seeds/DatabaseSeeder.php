<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CreateUsersSeeder::class);
        $this->call(MatkulSeeder::class);
        $this->call(MhsSeeder::class);
        $this->call(DosenSeeder::class);
        $this->call(MatkulDosenMhsSeeder::class);
        $this->call(matkul_mhs::class);
        
    }
}
