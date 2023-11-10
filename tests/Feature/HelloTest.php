<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_it_says_hello_world(): void
    {
        $response = $this->get('/api/hello');

        $response->assertStatus(200)
            ->assertExactJson([
                'response' => 'Hello Tornike!'
            ]);
    }
}
