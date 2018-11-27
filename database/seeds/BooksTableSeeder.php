<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
        	[
        	'id' => 1,
        	'title' => 'Pride and Prejudice',
        	'sinopsis' => 'Some sinopsis',
        	'published_in' => '1813-01-28',
        	'img' => 'https://pixabay.com/go/?t=image-list-shutterstock&id=509582812',
        	'author_id' => 5
        	],
        	[ 
        	'id' => 2,
        	'title' => 'Mansfield Park',
        	'sinopsis' => 'Some sinopsis',
        	'published_in' => '1814-07-01',
        	'img' => 'https://pixabay.com/go/?t=image-list-shutterstock&id=509582812',
        	'author_id' => 5
        	],
        	['id' => 3,
        	'title' => 'A Game of Thrones',
        	'sinopsis' => 'Some sinopsis',
        	'published_in' => '1996-08-01',
        	'img' => 'https://pixabay.com/go/?t=image-list-shutterstock&id=509582812',
        	'author_id' => 2
        	],
        	['id' => 4,
        	'title' => 'A Clash Of Kings',
        	'sinopsis' => 'Some sinopsis',
        	'published_in' => '1998-11-16',
        	'img' => 'https://pixabay.com/go/?t=image-list-shutterstock&id=509582812',
        	'author_id' => 2
        	],
        	[
        	'id' => 5,
        	'title' => "Harry Potter and the Philosopher's Stone",
        	'sinopsis' => 'Some sinopsis',
        	'published_in' => '1997-01-01',
        	'img' => 'https://pixabay.com/go/?t=image-list-shutterstock&id=509582812',
        	'author_id' => 1
        	],
        	[
        	'id' =>6,
        	'title' => "Harry Potter and the Chamber of Secrets",
        	'sinopsis' => 'Some sinopsis',
        	'published_in' => '1998-07-02',
        	'img' => 'https://pixabay.com/go/?t=image-list-shutterstock&id=509582812',
        	'author_id' => 1
        	],[
        	'id' => 7,
        	'title' => "A Room of One's Own",
        	'sinopsis' => 'Some sinopsis',
        	'published_in' => '1929-09-01',
        	'img' => 'https://pixabay.com/go/?t=image-list-shutterstock&id=509582812',
        	'author_id' => 3
        	],[
        	'id' => 8,
        	'title' => "To the Lighthouse",
        	'sinopsis' => 'Some sinopsis',
        	'published_in' => '1927-05-05',
        	'img' => 'https://pixabay.com/go/?t=image-list-shutterstock&id=509582812',
        	'author_id' => 3
        	],
        	[
        	'id' => 9,
        	'title' => "For Whom the Bell Tolls",
        	'sinopsis' => 'Some sinopsis',
        	'published_in' => '1940-10-21',
        	'img' => 'https://pixabay.com/go/?t=image-list-shutterstock&id=509582812',
        	'author_id' => 4
        	],[
        	'id' => 10,
        	'title' => "The Old Man and the Sea",
        	'sinopsis' => 'Some sinopsis',
        	'published_in' => '1952-01-01',
        	'img' => 'https://pixabay.com/go/?t=image-list-shutterstock&id=509582812',
        	'author_id' => 4
        	]
        ];
    	
    	DB::table('books')->insert($books);

    }
}
