<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\Utils\GenerateToken;


class NoteTest extends TestCase
{
    use GenerateToken;

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