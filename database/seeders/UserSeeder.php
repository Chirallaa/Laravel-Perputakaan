<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'peminjam',
            'username' => 'peminjam',
            'password' => bcrypt('123123123'),
        ])->assignRole('peminjam');

        User::create([
            'name' => 'peminjam1',
            'username' => 'peminjam1',
            'password' => bcrypt('123123123'),
        ])->assignRole('peminjam');

        User::create([
            'name' => 'petugas',
            'username' => 'petugas',
            'password' => bcrypt('123123123'),
        ])->assignRole('petugas');
}
}
