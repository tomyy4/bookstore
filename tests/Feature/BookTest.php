<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookTest extends TestCase
{
    use RefreshDatabase;
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
        $book = factory('App\Book',1)->create([
          'title' => 'The Good Book!'
        ]);

        foreach ($book as $b) {
            $response = $this->get('/book/' . $b->id);
            $response->assertStatus(200);
        }
    }
    
    public function testCanSeeBookTitle() 
    {
        $book = factory('App\Book',1)->create([
          'title' => 'The Good Book!'
        ]);

        foreach ($book as $b) {
            $this->assertEquals('The Good Book!',$b->title);
        }
    }
}