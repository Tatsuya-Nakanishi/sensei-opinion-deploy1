<?php

use Illuminate\Database\Seeder;

use App\Thread;
use App\Comment;
use App\Category;

class ThreadCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $body = 'この文章はダミーです。';
        
        $commentdammy = 'コメントダミーです。';
        
        for( $i = 1 ; $i <= 10 ; $i++) {
            $thread = new Thread;
            $thread->user_id = $i;
            $thread->category_id = 1;
            $thread->body = $body;
            
            $thread->save();
            
            $maxComments =  mt_rand(3, 10);
            for ($j=0; $j <= $maxComments; $j++) {
                $comment = new Comment;
                $comment->user_id = $i;
                $comment->thread_id = 1;
                $comment->comment = $commentdammy;
                
                $comment->save();
            }
            
        }
        
        $category1 = new Category;
        $category1->name = "学校生活";
        $category1->save();
        
        $category2 = new Category;
        $category2->name = "人間関係";
        $category2->save();
        
        $category3 = new Category;
        $category3->name = "学習面";
        $category3->save();
        
        $category4 = new Category;
        $category4->name = "進路";
        $category4->save();
    }
}
