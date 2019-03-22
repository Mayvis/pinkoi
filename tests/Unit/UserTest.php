<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function is_administrator()
    {
        $this->actingAs(factory(User::class)->create());

        $this->assertFalse(auth()->user()->isAdmin());

        $this->actingAs(factory(User::class)->create(['email' => 'liangyu@test.com']));

        $this->assertTrue(auth()->user()->isAdmin());
    }
}
