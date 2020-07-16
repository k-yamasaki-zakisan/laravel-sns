<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // $response = $this->get('/login');

        // $response->assertStatus(200);
        $user = factory(User::class)->create();
        $response = $this
            ->actingAs($user)
            ->get(route('/articles/create'));
        
        $response->assertStatus(200);
    }
    
}
