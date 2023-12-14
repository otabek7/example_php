<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JSONTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_json()
    {
        $response = $this->get('/json-test');

        $response->assertStatus(200);
        $response->assertExactJson([
            'name' => 'Jone',
            'updated' => true,
        ]);
    }
}
