<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;

class FirstUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = "12345";
        $user = new User([
            "first_name" => "Administrador",
            "last_name" => "Administrador",
            "email" => "admin@mail.com",
            "password" => Crypt::encryptString($password),
        ]);
        $user->saveOrFail();
    }
}
