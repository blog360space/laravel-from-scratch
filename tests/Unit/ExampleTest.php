<?php

namespace Tests\Unit;

use App\Post;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
//    public function testBasicTest()
//    {
//        $this->assertTrue(true);
//    }
    
    public function testBasicTest()
    {
        //GIVEN
        // 2posts 1 on this month and 1 last month
        factory(Post::class)->create([
            'created_at' => Carbon::now()->subMonth()
        ]);
        
        factory(Post::class)->create([
            'created_at' => Carbon::now()
        ]);
        
        
        //WHEN
        // I fetch post
        $posts = Post::archives();
        
        //THEN
        $this->assertCount(2, $posts);
    }
}
