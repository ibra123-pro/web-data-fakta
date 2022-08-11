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
        $admin = User::create([
            'name' => 'Achmad Ibrahim',
            'email' => 'achmadibrahim21@gmail.com',
            'password' => bcrypt('kaki211299'),
        ]);

        $admin -> assignRole('admin');
    }
}
