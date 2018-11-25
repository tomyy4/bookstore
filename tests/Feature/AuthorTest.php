<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Author;

class AuthorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function testCanSeeAuthors()
    {
        $response = $this->get('/authors');

        $response->assertStatus(200);
    }

    public function testCanSeeAuthorByItsId()
    {
       $author = factory('App\Author',1)->create();

        foreach ($author as $au) {
            $response = $this->get('/author/' . $au->id);
            $response->assertStatus(200);
        }
    }

    // public function testCanSeeAuthorBooks() 
    // {
    //     $author = factory('App\Author',1)->create();
    //     $book = factory('App\Book',1)->create();

    //      foreach ($book as $b) {
    //         $response = $this->get('/author/books/' . $b->id);
    //         $response->assertStatus(200);
    //     }

    // }
}