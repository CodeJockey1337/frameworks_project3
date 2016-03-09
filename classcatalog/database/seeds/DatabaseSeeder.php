<?php

use Illuminate\Database\Seeder;
use App\Library;
use App\Book;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Library::truncate();
        DB::table('libraries')->insert(
            [
                'library_name' => 'George Washington Library',
                'library_city' => 'Washington DC'
            ]
        );
            
        DB::table('libraries')->insert(
            [
                'library_name' => 'Denver Public Library',
                'library_city' => 'Denver, CO'
            ]
        );
        DB::table('libraries')->insert(
            [
                'library_name' => 'Armstrong Browning Library at Baylor University',
                'library_city' => 'Waco, TX'
            ]
        );
        DB::table('libraries')->insert(
            [
                'library_name' => 'Central Library',
                'library_city' => 'Vancouver, Canada'
            ]
        );
        DB::table('libraries')->insert(
            [
                'library_name' => 'Morgan Library',
                'library_city' => 'New York City, NY'
            ]
        );
        DB::table('libraries')->insert(
            [
                'library_name' => 'Boston Public Library',
                'library_city' => 'Boston, MA'
            ]
        );
        DB::table('libraries')->insert(
            [
                'library_name' => 'Braddock Carnegie Library',
                'library_city' => 'Braddock, PA'
            ]
        );
        DB::table('libraries')->insert(
            [
                'library_name' => 'Indianapolis Public Library',
                'library_city' => 'Indianapolis, IN'
            ]
        );
        DB::table('libraries')->insert(
            [
                'library_name' => 'Los Angeles Central Library',
                'library_city' => 'Los Angeles, CA'
            ]
        );
        DB::table('libraries')->insert(
            [
                'library_name' => 'Hearst Castle Gothic Study',
                'library_city' => 'San Simeon, CA'
            ]
        );
        Book::truncate();
        $bookdata = 
        array(
            array(
                'book_title'=>'Agile Web Development With Rails 4',
                'book_author'=>'Dave Thomas'
            ),
            array(
                'book_title'=>'The Pragmatic Programmer',
                'book_author'=>'Dave Thomas'
            ),
            array(
                'book_title'=>'Programming Ruby 1.9 & 2.0',
                'book_author'=>'Dave Thomas'
            ),
            array(
                'book_title'=>'Writing That Works',
                'book_author'=>'Kenneth Roman'
            ),
            array(
                'book_title'=>'The Five Dysfunctions of a Team',
                'book_author'=>'Patrick Lencioni'
            ),
            array(
                'book_title'=>'Moby Dick',
                'book_author'=>'Herman Melville'
            )
        );
        Book::insert($bookdata);
    }
}
