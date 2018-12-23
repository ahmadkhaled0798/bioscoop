<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $films=film::all();


//        $movie_url = 'http://www.omdbapi.com/?t='. urlencode($_GET['movie']).'&apikey=c8307ab5';
//        $movie_json = file_get_contents($movie_url);
//        $movie_array = json_decode($movie_json, true);


        return view('home/index')->with('films' , $films()->film_title);
    }
    public function index1()
    {
        return view('home/index');
    }
}
