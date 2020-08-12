<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [   'title' => 'Thắc mắc!',
                'content' => 'lỡ uống nhầm có sao ko?',
                'status' => 1 ,
                'product_id' => 2 ,
                'user_id' => 1 ,
                'reply' => NULL ,
                'created_at' => '2020-08-10 07:59:34',
                'updated_at' => '2020-08-11 19:16:03'
            ],
            [   'title' => 'Cho em hỏi!',
                'content' => 'Dầu gió sử dụng nhìu có hại da không?',
                'status' => 0 ,
                'product_id' => 2 ,
                'user_id' => 1 ,
                'reply' => 'Dạ không ạ. Nhưng đừng sử dụng khi vết thương bị hở chị nhé.' ,
                'created_at' => '2020-08-10 12:39:18',
                'updated_at' => '2020-08-11 16:18:40'
            ],
            [   'title' => 'Giá sản phẩm',
                'content' => 'Mua nhiều thì có được chiết khấu không?',
                'status' => 0 ,
                'product_id' => 2 ,
                'user_id' => 1 ,
                'reply' => 'Dạ hiện tại Cucumber chưa có chương trình giảm giá ạ. Khi nào có Cucumber thông báo cho chị ạ.' ,
                'created_at' => '2020-08-11 06:57:20',
                'updated_at' => '2020-08-11 11:21:28'
            ],
            [   'title' => 'Giao hàng?',
                'content' => 'Mua sản phẩm này ship về hóc môn bao nhiu?',
                'status' => 0 ,
                'product_id' => 2 ,
                'user_id' => 1 ,
                'reply' => NULL ,
                'created_at' => '2020-08-11 06:59:01',
                'updated_at' => '2020-08-11 16:02:27'
            ],
            [   'title' => 'cho mình hỏi',
                'content' => 'thuốc này phải uống lúc ăn no hay đói bụng uống có sao không?',
                'status' => 0 ,
                'product_id' => 1 ,
                'user_id' => 1 ,
                'reply' => NULL ,
                'created_at' => '2020-08-11 09:17:13',
                'updated_at' => '2020-08-11 16:19:08'
            ],
            [   'title' => 'Sản phẩm??',
                'content' => 'Mua 10 hộp có được giảm giá không?\r\nCó giao Hoc Môn không?',
                'status' => 0 ,
                'product_id' => 3 ,
                'user_id' => 1 ,
                'reply' => 'Hiện tại bên Cucumber chưa có chương trình giảm giá ạ! Khi nào có sẽ thông báo cho chị ạ.\r\nCucumber có giao hàng ở Hóc Môn đó ạ.',
                'created_at' => '2020-08-11 09:42:20',
                'updated_at' => '2020-08-11 10:38:28'
            ],
        ]);
    }
}

