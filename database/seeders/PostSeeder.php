<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts =   [
            [
                'category_id' => 1,
                'user_id' => 2,
                'title' => 'judul pertama',
                'slug' => 'judul-pertama',
                'excerpt' => 'rem architecto eligendi, porro vero perspiciatis sapiente debitis, in voluptatum voluptatem reiciendis exercitationem, eaque illo doloremque optio rerum quos ipsam libero maxime. Est rei',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem recusandae at error quae hic maiores, voluptate inventore dolor quaerat, ipsum veniam, explicabo perspiciatis? Consectetur suscipit laborum unde, quod tenetur placeat pariatur debitis vitae doloremque, odio ipsam iste ipsum? Recusandae dolorem architecto eligendi, porro vero perspiciatis sapiente debitis, in voluptatum voluptatem reiciendis exercitationem, eaque illo doloremque optio rerum quos ipsam libero maxime. Est reiciendis consequuntur delectus quidem, eius exercitationem, ullam deleniti omnis dolor nisi perferendis vero saepe. Iste adipisci reprehenderit, doloribus provident ullam ex quidem temporibus quia hic iusto voluptatem doloremque soluta dicta maxime ea quis ut cumque. Enim, tempora ipsa.'
            ],
            [
                'category_id' => 2,
                'user_id' => 1,
                'title' => 'judul kedua',
                'slug' => 'judul-kedua',
                'excerpt' => 'rem architecto eligendi, porro vero perspiciatis sapiente debitis, in voluptatum voluptatem reiciendis exercitationem, eaque illo doloremque optio rerum quos ipsam libero maxime. Est rei',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem recusandae at error quae hic maiores, voluptate inventore dolor quaerat, ipsum veniam, explicabo perspiciatis? Consectetur suscipit laborum unde, quod tenetur placeat pariatur debitis vitae doloremque, odio ipsam iste ipsum? Recusandae dolorem architecto eligendi, porro vero perspiciatis sapiente debitis, in voluptatum voluptatem reiciendis exercitationem, eaque illo doloremque optio rerum quos ipsam libero maxime. Est reiciendis consequuntur delectus quidem, eius exercitationem, ullam deleniti omnis dolor nisi perferendis vero saepe. Iste adipisci reprehenderit, doloribus provident ullam ex quidem temporibus quia hic iusto voluptatem doloremque soluta dicta maxime ea quis ut cumque. Enim, tempora ipsa.'
            ],
            [
                'category_id' => 2,
                'user_id' => 2,
                'title' => 'judul ketiga',
                'slug' => 'judul-ketiga',
                'excerpt' => 'rem architecto eligendi, porro vero perspiciatis sapiente debitis, in voluptatum voluptatem reiciendis exercitationem, eaque illo doloremque optio rerum quos ipsam libero maxime. Est rei',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem recusandae at error quae hic maiores, voluptate inventore dolor quaerat, ipsum veniam, explicabo perspiciatis? Consectetur suscipit laborum unde, quod tenetur placeat pariatur debitis vitae doloremque, odio ipsam iste ipsum? Recusandae dolorem architecto eligendi, porro vero perspiciatis sapiente debitis, in voluptatum voluptatem reiciendis exercitationem, eaque illo doloremque optio rerum quos ipsam libero maxime. Est reiciendis consequuntur delectus quidem, eius exercitationem, ullam deleniti omnis dolor nisi perferendis vero saepe. Iste adipisci reprehenderit, doloribus provident ullam ex quidem temporibus quia hic iusto voluptatem doloremque soluta dicta maxime ea quis ut cumque. Enim, tempora ipsa.'
            ],
            [

                'category_id' => 4,
                'user_id' => 1,
                'title' => 'judul keempat',
                'slug' => 'judul-keempat',
                'excerpt' => 'rem architecto eligendi, porro vero perspiciatis sapiente debitis, in voluptatum voluptatem reiciendis exercitationem, eaque illo doloremque optio rerum quos ipsam libero maxime. Est rei',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem recusandae at error quae hic maiores, voluptate inventore dolor quaerat, ipsum veniam, explicabo perspiciatis? Consectetur suscipit laborum unde, quod tenetur placeat pariatur debitis vitae doloremque, odio ipsam iste ipsum? Recusandae dolorem architecto eligendi, porro vero perspiciatis sapiente debitis, in voluptatum voluptatem reiciendis exercitationem, eaque illo doloremque optio rerum quos ipsam libero maxime. Est reiciendis consequuntur delectus quidem, eius exercitationem, ullam deleniti omnis dolor nisi perferendis vero saepe. Iste adipisci reprehenderit, doloribus provident ullam ex quidem temporibus quia hic iusto voluptatem doloremque soluta dicta maxime ea quis ut cumque. Enim, tempora ipsa.'
            ]
        ];
        DB::table('posts')->insert($posts);
    }
}
