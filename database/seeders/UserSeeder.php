<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'Admin',
            'username' => 'Admin',
            'password' => bcrypt('Admin'),
            'level' => 'Admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'nama' => 'Pembimbing',
            'username' => 'Pembimbing',
            'password' => bcrypt('Pembimbing'),
            'level' => 'Pembimbing',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'nis' => '12321',
            'username' => 'Alfarrel',
            'password' => bcrypt('12345'),
            'level' => 'Siswa',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
