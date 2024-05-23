<?php

namespace Tests\Feature\Tweet;

use App\Models\Tweet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;

class DeleteTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_delete_successed()
    {
        $user = User::factory()->create();

        $tweet = Tweet::factory()->create(['user_id' => $user->id]);

        $this->actingAs($user);
        $response = $this->delete('/tweet/delete' . $tweet->id);
        $response->assertRedirect('/tweet');
    }
}
