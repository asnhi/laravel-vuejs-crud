<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserStatus;

class UserStatusSeeder extends Seeder
{

    public function run()
    {
        UserStatus::insert([
            ["name" => "Hoạt động"],
            ["name" => "Tạm khóa"]
        ]);
    }
}
