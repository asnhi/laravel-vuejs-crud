<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserProjectPosition;

class UserPosProjSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'project_id' => 1,
                'position_id' => 1,
            ],
            [
                'user_id' => 2,
                'project_id' => 1,
                'position_id' => 2,
            ],
            [
                'user_id' => 3,
                'project_id' => 1,
                'position_id' => 3,
            ],
            [
                'user_id' => 4,
                'project_id' => 1,
                'position_id' => 4,
            ],
            [
                'user_id' => 5,
                'project_id' => 1,
                'position_id' => 5,
            ]
        ];

        UserProjectPosition::insert($data);
    }
}
