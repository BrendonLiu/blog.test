<?php

use App\Models;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostTableSeeder::class);
        
        $post_id = Models\Post::all();
                
        for ($i = 1; $i <= 100; $i++) {
            $comment = factory(Models\Comment::class)->make();
            $comment->post()->associate($post_id->random());
            $comment->save();
        }
    }
}
