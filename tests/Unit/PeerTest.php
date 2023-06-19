<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class PeerTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        // , ['first_name' => 'Arthur']
        // $this->assertTrue(true);
        $response = $this->getJson('/api/peer');

        $response
            ->assertStatus(200)
            ->assertJson([
                
            ]);
    }
}
