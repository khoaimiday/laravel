<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            [
                'product_name' => 'Fugacar Mebendazole',
                'price' => 18000,
                'short_description' => 'Thuốc điều trị nhiễm một hoặc nhiều loại giun: giun chỉ, giun đũa, giun tóc, giun móc, giun kim.',
                'exp_date' => 12,
                'product_info' => 'Mebendazole 500mg.',
                'product_unit' => 'Hộp',
                'product_quantity' => 1,
                'product_use' => 'Nhiễm một hay nhiều loại giun đường ruột: Giun đũa (Ascaris lumbricoides), giun tóc (Trichuris trichiura), giun móc (Ancylostoma duodenale, Necator americanus), giun kim (Enterobius Vermicularis).',
                'brand_id' => 1,
                'product_types_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_name' => 'Dầu gió Trường Sơn (6ml)',
                'price' => 11000,
                'short_description' => 'Dầu gió Trường Sơn với các thầnh phần từ tinh dầu tự nhiên giúp chuyên trị cảm cúm, nhức đầu, sổ mũi, say tàu xe, sưng viêm, đau trật gân, muỗi chích, kiến cắn, buồn nôn, đau bụng, nhức mỏi… Tiện lợi cho sức khỏe gia đình bạn.',
                'exp_date' => 24,
                'product_info' => 'Chai 6ml',
                'product_unit' => 'Chai',
                'product_quantity' => 1,
                'product_use' => 'Trị cảm ho, sổ mũi, nhức đầu, đau bụng, chóng mặt, nhức mỏi tay chân, say sóng khi đi tàu xe, buồn nôn, sưng viêm, trật gân, kiến cắn, muỗi chích…',
                'brand_id' => 2,
                'product_types_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_name' => 'Dung dịch vệ sinh phụ nữ Phytogyno (100ml)',
                'price' => 23900,
                'short_description' => 'Dung dịch vệ sinh phụ nữ Phytogyno với hoạt chất Alpha-Terpineol được chiết xuất từ tinh dầu tràm thiên nhiên có tác dụng kháng khuẩn, kháng nấm Candida, khử mùi hôi giúp vùng kín luôn sạch sẽ.',
                'exp_date' => 12,
                'product_info' => 'Mebendazole 500mg.',
                'product_unit' => 'Hộp',
                'product_quantity' => 1,
                'product_use' => 'Phytogyno dùng để phòng và điều trị các bệnh viêm nhiễm đường sinh dục, thích hợp cho:
                                    Vệ sinh vùng kín hàng ngày, đặc biệt tốt cho phụ nữ trong những ngày hành kinh và thời kỳ thai sản.
                                    Điều trị ngứa do vi nấm, nhiễm nấm Candida, huyết trắng.
                                    Bệnh nhân bị viêm, ngứa vùng sinh dục: ngứa âm hộ, viêm âm đạo, viêm ngoài tử cung, khí hư, huyết trắng.
                                    Vệ sinh vùng sinh dục cho nam, nữ trước và sau khi quan hệ tình dục.
                                    Nam giới bị viêm ngứa vùng sinh dục.',
                'brand_id' => 6,
                'product_types_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_name' => 'Bao cao su Durex',
                'price' => 30000,
                'short_description' => 'Bao cao su tăng cảm giác, kế hoạch hoá gia đình.',
                'exp_date' => 12,
                'product_info' => 'Mebendazole 500mg.',
                'product_unit' => 'Hộp',
                'product_quantity' => 6,
                'product_use' => 'Phytogyno dùng để phòng và điều trị các bệnh viêm nhiễm đường sinh dục, thích hợp cho:
                                    Vệ sinh vùng kín hàng ngày, đặc biệt tốt cho phụ nữ trong những ngày hành kinh và thời kỳ thai sản.
                                    Điều trị ngứa do vi nấm, nhiễm nấm Candida, huyết trắng.
                                    Bệnh nhân bị viêm, ngứa vùng sinh dục: ngứa âm hộ, viêm âm đạo, viêm ngoài tử cung, khí hư, huyết trắng.
                                    Vệ sinh vùng sinh dục cho nam, nữ trước và sau khi quan hệ tình dục.
                                    Nam giới bị viêm ngứa vùng sinh dục.',
                'brand_id' => 6,
                'product_types_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_name' => 'Bao cao su Durex',
                'price' => 30000,
                'short_description' => 'Bao cao su tăng cảm giác, kế hoạch hoá gia đình.',
                'exp_date' => 12,
                'product_info' => 'Mebendazole 500mg.',
                'product_unit' => 'Hộp',
                'product_quantity' => 6,
                'product_use' => 'Phytogyno dùng để phòng và điều trị các bệnh viêm nhiễm đường sinh dục, thích hợp cho:
                                    Vệ sinh vùng kín hàng ngày, đặc biệt tốt cho phụ nữ trong những ngày hành kinh và thời kỳ thai sản.
                                    Điều trị ngứa do vi nấm, nhiễm nấm Candida, huyết trắng.
                                    Bệnh nhân bị viêm, ngứa vùng sinh dục: ngứa âm hộ, viêm âm đạo, viêm ngoài tử cung, khí hư, huyết trắng.
                                    Vệ sinh vùng sinh dục cho nam, nữ trước và sau khi quan hệ tình dục.
                                    Nam giới bị viêm ngứa vùng sinh dục.',
                'brand_id' => 6,
                'product_types_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
