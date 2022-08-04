<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Joseph Huaman',
            'email' => 'josephuaman98@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            'cedula' => '040000712',
            'address' => 'Asoc El Paraiso',
            'phone' => '952886316',
            'role' => 'admin',
        ]);

        User::factory()
            ->count(50)  // Se creara 50 Usuarios
            ->create();
    }
}
