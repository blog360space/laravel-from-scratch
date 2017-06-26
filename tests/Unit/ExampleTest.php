<?php

namespace Tests\Unit;

use App\Post;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    
    use DatabaseTransactions;
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
        
        
        $first= factory(Post::class)->create([
            'created_at' => Carbon::now()
        ]);
        
        $second  = factory(Post::class)->create([
            'created_at' => Carbon::now()->subMonth()
        ]);
        
        //WHEN
        // I fetch post
        $posts = Post::archives();        
        
        //THEN
        $this->assertEquals([
            0 => [
                "year" => $first->created_at->format('Y'),
                "month" => $first->created_at->format('F'),
                "published" => 1,
            ],
            1 => [
                "year" => $second->created_at->format('Y'),
                "month" => $second->created_at->format('F'),
                "published" => 1,
            ]
        ]
        , $posts);
        
        //$this->assertCount(2, $posts);
    }
}
