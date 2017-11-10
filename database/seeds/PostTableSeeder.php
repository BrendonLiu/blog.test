<?php

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = Post::count();
        if ($count > 0) {
            $this->command->getOutput()->warning("Post already exists");
            return false;
        }
        
        factory(Post::class,10)->create();
    }
}
