<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    public function run()
    {
        $positions = [
            [
                "name" => "Manager",
                "description" => "Phụ trách quản lý dự án"
            ],
            [
                "name" => "BA",
                "description" => "Phân tích nghiệp vụ khách hàng"
            ],
            [
                "name" => "Tester",
                "description" => "Kiểm thử"
            ],
            [
                "name" => "Front End",
                "description" => "Thiết kế UX/UI cho người dùng"
            ],
            [
                "name" => "Back End",
                "description" => "Phát triển hệ thống"
            ]
        ];

        Position::insert($positions);
    }
}
