<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCanSeeBooks()
    {
        $response = $this->get('/books');

        $response->assertStatus(200);
    }

    public function testCanSeeBookByItsId() 
    {
        $response = $this->get('book/{id}');
        $response->assertStatus(200);
    }
}