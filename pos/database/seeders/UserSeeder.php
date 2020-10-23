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
            "name"=>"admin",
            "email"=> "admin@email.test",
            "password"=> bcrypt("admin")
        ]);

        $admin->assignRole("admin");

        $pengunjung = User::create([
            "name"=>"pengunjung",
            "email"=> "pengunjung@email.test",
            "password"=> bcrypt("pengunjung")
        ]);

        $pengunjung->assignRole("pengunjung");

        $surveyor = User::create([
            "name"=>"surveyor",
            "email"=> "surveyor@email.test",
            "password"=> bcrypt("surveyor")
        ]);

        $surveyor->assignRole("surveyor");
    }
}
