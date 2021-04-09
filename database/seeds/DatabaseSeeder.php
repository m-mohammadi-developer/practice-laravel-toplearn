<?php

use App\Comment;
use App\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(Post::class, 20)->create();
        factory(Comment::class, 80)->create();
    }
}
