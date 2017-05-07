<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PracticeController extends Controller
{

   public function practice8() {
      $movies = Movie::filter('actor', 'LIKE', '%Tom Hanks%');

      dump($movies)
   }

   public function practice7() {
      $movies = Movie::all();

      //String

      echo($movies);


      //Array
      foreach($movies as $movie) {
         dump($movie['cover']);
      }

      //Object
      foreach($movies as $movie) {
         dump($movie->cover);
      }
   }
   //How to Delete

   public function practice6() {

      $movie = Movie::find(11);

      if(!$movie) {
         dump('Did not delete book 11, did not find it');
      }
      else {
         $movie->delete();
         dump('Deleted Movie 11');
      }
   }

   //How to filter
   public function practice5() {

      $movie = new Movie();
      $movies = $movie->where('actor', 'LIKE', '%Tom Hanks%')->get();

      dump($movies->toArray());
   }

   public function practice4() {
      $movie = new Movie();
      $movies = $movie->all();
      dump($movies->toArray());
   }
   //Creates a new movie in the database
   public function practice3() {
      $newMovie = new Movie();

      $newMovie->title = 't';
      $newMovie->cover = 't';
      $newMovie->actor = 't';
      $newMovie->genre = 't';
      $newMovie->description = 't';
      $newMovie->purchase_link = 't';

      $newMovie->save();

      dump($newMovie);
      dump($newMovie->toArray());
   }

	public function practice2() {
		dump(config('app'));
	}
   public function practice1() {
   		dump('This is the first example.');
   }

   public function index($n) {
   		$method = 'practice'.$n;

   		if(method_exists($this, $method))
   			return $this->$method();
   		else
   			dd("Practice round [{$n}] not defined");
   }
}
