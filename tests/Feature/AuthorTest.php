<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCanSeeAuthors()
    {
        $response = $this->get('/authors');

        $response->assertStatus(200);
    }

    public function testCanSeeAuthorByItsId()
    {
        $response = $this->get('/author/{id}');

        $response->assertStatus(200);
    }
}