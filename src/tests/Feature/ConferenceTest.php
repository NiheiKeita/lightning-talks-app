<?php

namespace Tests\Feature;

use Tests\TestCase;

class ConferenceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/conferences');

        $response->assertStatus(200);
    }
}
