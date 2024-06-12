<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run()
    {
        $users = [
            [
                "username" => "admin",
                "name" => "Admin",
                "status_id" => 1,
                "email" => "admin@gmail.com",
                "password" => Hash::make("123456")
            ],
            [
                "username" => "linhnguyen",
                "name" => "Nguyễn Linh",
                "status_id" => 1,
                "email" => "nguyenlinh@gmail.com",
                "password" => Hash::make("123456"),
            ],
            [
                "username" => "nhinguyen",
                "name" => "Nguyễn T. Nhi",
                "status_id" => 1,
                "email" => "nguyennhi@gmail.com",
                "password" => Hash::make("123456")
            ],
            [
                "username" => "leletu",
                "name" => "Lê Cẩm Tú",
                "status_id" => 1,
                "email" => "letu@gmail.com",
                "password" => Hash::make("123456")
            ],
            [
                "username" => "mantruong",
                "name" => "Trương Hoàng Mẫn",
                "status_id" => 1,
                "email" => "mantruong@gmail.com",
                "password" => Hash::make("123456")
            ],
        ];

        User::insert($users);
    }
}
