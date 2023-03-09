<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\Post;
Use App\Models\Category;
Use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //use facetory
        User::factory(3)->create();
        

        // User::create([
        //     'name' => 'FullStuckDev',
        //     'email' => 'fsd@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();
        
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero aperiam adipisci excepturi iure consequatur hic nesciunt rem molestias neque minus sed laboriosam officia, fuga illum dolor? Non ratione ab sed.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi dolor id quasi iure. Nihil error laboriosam itaque. Ipsam maiores eligendi animi temporibus ut laudantium quidem voluptate porro eos praesentium aliquam distinctio, nemo quae perspiciatis, quos facere ex officiis sed, molestiae pariatur inventore rerum id debitis non! Cupiditate, cumque ab quod in eaque quasi, eveniet incidunt ratione dolorem veniam recusandae dolores accusantium dolorum reprehenderit velit excepturi nesciunt expedita labore doloremque error impedit quidem possimus veritatis? Doloremque sapiente consectetur atque maiores accusamus quae nostrum dolor libero in, voluptates aut dolore, aliquam quis sunt id beatae reprehenderit! Dolores dignissimos voluptate illo architecto voluptas, similique deleniti! Pariatur dolorem eaque hic, illo excepturi eveniet ipsam laboriosam vero aut quas eius aperiam aliquid tempore nihil maiores, ad odit numquam libero quos, magnam nulla. Provident, accusantium asperiores sint qui nostrum quia ratione quaerat, omnis accusamus eum maiores! Atque impedit est neque labore, laborum reprehenderit sapiente dicta eos, deserunt culpa magnam repudiandae. Ex voluptatem tempora, sequi, iure eos aliquam similique provident tempore, magnam rem numquam quas! Aliquam unde minima voluptatum facere aut, reprehenderit harum quod quo consequatur amet fugit assumenda nisi voluptate? Doloremque iste nostrum, beatae illum explicabo labore esse a praesentium eveniet necessitatibus, odio quaerat delectus repellendus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero aperiam adipisci excepturi iure consequatur hic nesciunt rem molestias neque minus sed laboriosam officia, fuga illum dolor? Non ratione ab sed.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi dolor id quasi iure. Nihil error laboriosam itaque. Ipsam maiores eligendi animi temporibus ut laudantium quidem voluptate porro eos praesentium aliquam distinctio, nemo quae perspiciatis, quos facere ex officiis sed, molestiae pariatur inventore rerum id debitis non! Cupiditate, cumque ab quod in eaque quasi, eveniet incidunt ratione dolorem veniam recusandae dolores accusantium dolorum reprehenderit velit excepturi nesciunt expedita labore doloremque error impedit quidem possimus veritatis? Doloremque sapiente consectetur atque maiores accusamus quae nostrum dolor libero in, voluptates aut dolore, aliquam quis sunt id beatae reprehenderit! Dolores dignissimos voluptate illo architecto voluptas, similique deleniti! Pariatur dolorem eaque hic, illo excepturi eveniet ipsam laboriosam vero aut quas eius aperiam aliquid tempore nihil maiores, ad odit numquam libero quos, magnam nulla. Provident, accusantium asperiores sint qui nostrum quia ratione quaerat, omnis accusamus eum maiores! Atque impedit est neque labore, laborum reprehenderit sapiente dicta eos, deserunt culpa magnam repudiandae. Ex voluptatem tempora, sequi, iure eos aliquam similique provident tempore, magnam rem numquam quas! Aliquam unde minima voluptatum facere aut, reprehenderit harum quod quo consequatur amet fugit assumenda nisi voluptate? Doloremque iste nostrum, beatae illum explicabo labore esse a praesentium eveniet necessitatibus, odio quaerat delectus repellendus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero aperiam adipisci excepturi iure consequatur hic nesciunt rem molestias neque minus sed laboriosam officia, fuga illum dolor? Non ratione ab sed.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi dolor id quasi iure. Nihil error laboriosam itaque. Ipsam maiores eligendi animi temporibus ut laudantium quidem voluptate porro eos praesentium aliquam distinctio, nemo quae perspiciatis, quos facere ex officiis sed, molestiae pariatur inventore rerum id debitis non! Cupiditate, cumque ab quod in eaque quasi, eveniet incidunt ratione dolorem veniam recusandae dolores accusantium dolorum reprehenderit velit excepturi nesciunt expedita labore doloremque error impedit quidem possimus veritatis? Doloremque sapiente consectetur atque maiores accusamus quae nostrum dolor libero in, voluptates aut dolore, aliquam quis sunt id beatae reprehenderit! Dolores dignissimos voluptate illo architecto voluptas, similique deleniti! Pariatur dolorem eaque hic, illo excepturi eveniet ipsam laboriosam vero aut quas eius aperiam aliquid tempore nihil maiores, ad odit numquam libero quos, magnam nulla. Provident, accusantium asperiores sint qui nostrum quia ratione quaerat, omnis accusamus eum maiores! Atque impedit est neque labore, laborum reprehenderit sapiente dicta eos, deserunt culpa magnam repudiandae. Ex voluptatem tempora, sequi, iure eos aliquam similique provident tempore, magnam rem numquam quas! Aliquam unde minima voluptatum facere aut, reprehenderit harum quod quo consequatur amet fugit assumenda nisi voluptate? Doloremque iste nostrum, beatae illum explicabo labore esse a praesentium eveniet necessitatibus, odio quaerat delectus repellendus?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
