<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
    * GET
    * /movies
    */
    public function index() {
    	return 'View all the movies...';
    }

    /**
    * GET
    * /movies/{title?}
    */
    public function view($title = null) {

    	# query the database for all movies that math the title $title

    	# return a view to show the moive, with that movie data

    	return 'You want to view the movie ' .$title;
    }
}
