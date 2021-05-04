<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostExampleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_examplePost()
    {
//Creating 1 Task and one user to associate with that task.
        $post = Post::factory()->create();
        $post->title = "Example Post";
        $post->save();
        //$user = $task->user;
        $user = User::find(1);
        $user->name = "Nuri Tjiptarto";
        $user->save();
        $this->assertEquals("Nuri Tjiptarto",$user->name);
        $posts= $user->posts;

    }
}
