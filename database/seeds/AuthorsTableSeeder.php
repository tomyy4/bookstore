<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $users = [
        //     ['id' => 1, 'name' => 'Stephan de Vries', 'username' => 'stephan', 'email' => 'stephan-v@gmail.com', 'password' => bcrypt('carrotz124')],
        //     ['id' => 2, 'name' => 'John doe', 'username' => 'johnny', 'email' => 'johndoe@gmail.com', 'password' => bcrypt('carrotz1243')],
        // ];

        $authors = [
        	['id' =>1,
        	'name' => 'JK Rowling',
        	'biography' => 'Some biography',
        	'country' => 'United Kingdom',
        	'date_of_birth' => '1965-31-31'
        	],
        	['id' => 2,
        	'name' => 'George RR Martin',
        	'biography' => 'Some biography',
        	'country' => 'United Kingdom',
        	'date_of_birth' => '1948-09-20'
        	],	
        	['id' => 3,
        	'name' => 'Virginia Wolf',
        	'biography' => 'Some biography',
        	'country' => 'United Kingdom',
        	'date_of_birth' => '1882-01-25'
        	],	
        	['id' => 4,
        	'name' => 'Ernest Hemingway',
        	'biography' => 'Some biography',
        	'country' => 'United States',
        	'date_of_birth' => '1899-07-21'
        	],	
        	['id' => 5,
        	'name' => 'Jane Austen',
        	'biography' => 'Some biography',
        	'country' => 'United Kingdom',
        	'date_of_birth' => '1775-12-16'
        	]
        ];

        DB::table('authors')->insert($authors);
    }
}
