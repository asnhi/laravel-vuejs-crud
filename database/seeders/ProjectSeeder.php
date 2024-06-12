<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            "name" => "B2B2C",
            "description" => "Dự án này là một nền tảng thương mại điện tử kết nối doanh nghiệp với nhà cung cấp và khách hàng cuối cùng, tạo ra trải nghiệm mua sắm trực tuyến đa phương tiện và hiệu quả.",
        ]);
    }
}
