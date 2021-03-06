<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        User::create([
            'name' => 'Riksa Kusumah Nagara',
            'username' => 'riksanagara',
            'email' => 'riksakn00@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();


        

        // User::create([
        //     'name' => 'Ardan Herdiansyah',
        //     'email' => 'ardan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus non eaque quisquam saepe itaque sequi rerum, harum ab quasi impedit temporibus assumenda corrupti tempora ea maiores quae molestiae aut iste. Excepturi dolorem facere necessitatibus quaerat voluptates. Amet doloribus nesciunt velit maxime sint molestiae, impedit odit nemo? Atque optio ratione rerum quas provident dolore asperiores a maxime, nulla exercitationem maiores dicta rem laborum assumenda laboriosam pariatur dolorum. Recusandae magnam eos corrupti debitis est quisquam nobis nemo enim repudiandae libero vero itaque necessitatibus accusamus obcaecati amet fugit sed laborum, commodi quae, reprehenderit id! Accusantium excepturi quos qui quia animi voluptatem tempora nesciunt.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus non eaque quisquam saepe itaque sequi rerum, harum ab quasi impedit temporibus assumenda corrupti tempora ea maiores quae molestiae aut iste. Excepturi dolorem facere necessitatibus quaerat voluptates. Amet doloribus nesciunt velit maxime sint molestiae, impedit odit nemo? Atque optio ratione rerum quas provident dolore asperiores a maxime, nulla exercitationem maiores dicta rem laborum assumenda laboriosam pariatur dolorum. Recusandae magnam eos corrupti debitis est quisquam nobis nemo enim repudiandae libero vero itaque necessitatibus accusamus obcaecati amet fugit sed laborum, commodi quae, reprehenderit id! Accusantium excepturi quos qui quia animi voluptatem tempora nesciunt.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus non eaque quisquam saepe itaque sequi rerum, harum ab quasi impedit temporibus assumenda corrupti tempora ea maiores quae molestiae aut iste. Excepturi dolorem facere necessitatibus quaerat voluptates. Amet doloribus nesciunt velit maxime sint molestiae, impedit odit nemo? Atque optio ratione rerum quas provident dolore asperiores a maxime, nulla exercitationem maiores dicta rem laborum assumenda laboriosam pariatur dolorum. Recusandae magnam eos corrupti debitis est quisquam nobis nemo enim repudiandae libero vero itaque necessitatibus accusamus obcaecati amet fugit sed laborum, commodi quae, reprehenderit id! Accusantium excepturi quos qui quia animi voluptatem tempora nesciunt.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus non eaque quisquam saepe itaque sequi rerum, harum ab quasi impedit temporibus assumenda corrupti tempora ea maiores quae molestiae aut iste. Excepturi dolorem facere necessitatibus quaerat voluptates. Amet doloribus nesciunt velit maxime sint molestiae, impedit odit nemo? Atque optio ratione rerum quas provident dolore asperiores a maxime, nulla exercitationem maiores dicta rem laborum assumenda laboriosam pariatur dolorum. Recusandae magnam eos corrupti debitis est quisquam nobis nemo enim repudiandae libero vero itaque necessitatibus accusamus obcaecati amet fugit sed laborum, commodi quae, reprehenderit id! Accusantium excepturi quos qui quia animi voluptatem tempora nesciunt.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
