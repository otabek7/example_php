<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;

class DatabaseTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the user database.
     *
     * @return void
     */
    public function test_user_database()
    {
        User::factory()->count(3)->create();

        $this->assertDatabaseCount('users', 3);
    }
}
