<?php

use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_types')->insert([
            ['type_name' => 'Thực Phẩm Chức Năng',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ['type_name' => 'Thuốc Không Kê Đơn',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ['type_name' => 'Chăm Sóc Cá Nhân',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ['type_name' => 'Chăm Sóc Sắc Đẹp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ['type_name' => 'Chăm Sóc Sức Khoẻ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ['type_name' => 'Sản Phẩm Khuyến Mãi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ['type_name' => 'Sản Phẩm Tiện Lợi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ['type_name' => 'Sản Phẩm Thử Nghiệm',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
