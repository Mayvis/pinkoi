<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StoreTest extends TestCase
{
    use RefreshDatabase, withFaker;

    /** @test */
    public function a_user_can_create_a_store()
    {
        $this->withoutExceptionHandling();

        $attributes = [
            'name' => $this->faker->sentence,
            'description' => $this->faker->paragraph
        ];

        $this->post('/stores', $attributes);

        $this->assertDatabaseHas('stores', $attributes);
    }
}
