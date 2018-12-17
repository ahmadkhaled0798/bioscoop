<?php

namespace App\Http\Controllers;

use App\film;
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
        return view('filmplanner');
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
            'hall' => 'required|between:1, 5',
            'date' => 'required|date',
            'start_at' => 'required|time',
            'end_at' => 'required|time',
            'film' => 'required|string'

        ])->validate();



        $films = new Film();
        $films->hall= $request->hall;
        $films->date= $request->date;
        $films->start_at= $request->start_at;
        $films->end_at= $request->end_at;
        $films->film= $request->film;

        $films->save();

        return redirect('filmplanner')
            ->with('success', 'Film successfully planned.');
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
