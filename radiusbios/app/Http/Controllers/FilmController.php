<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;
use Validator;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('films/index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filmTitles = Film::all()->unique("film_title");;
//        $filmTitles = array_unique($filmTitles, film_title);
        return view('/employees/filmplanner')
            ->with('filmTitles', $filmTitles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Validator::make($request->all(), [
            'film_title' => 'required|string'

        ])->validate();

        $films = new Film();
        $films->film_title = $request->film_title;

        $films->save();

        return redirect('films/create')
            ->with('success_film', 'Film successfully added.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(film $film)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, film $film)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(film $film)
    {
        //
    }
}
