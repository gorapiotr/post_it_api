<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Utils\GenerateToken;


class NoteTest extends TestCase
{
    use RefreshDatabase, GenerateToken;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetNotes()
    {

        $response = $this->withoutMiddleware()
            ->json(
                'GET',
                'api/notes',
                [],
                ['Authorization' => 'Bearer ' . $this->getToken()]
            )
            ->assertStatus(200);

        $response->assertStatus(200);
    }
}