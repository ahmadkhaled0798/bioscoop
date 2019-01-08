<?php

namespace App\Http\Controllers;

use App\Planner;
use Illuminate\Http\Request;
use Validator;

class PlannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'hall' => 'required|between:1, 3',
            'date' => 'required|date',
            'start_at' => 'required',
            'end_at' => 'required',
            'film' => 'required|string|different:Geen films toegevoegd'

        ])->validate();



        $planners = new Planner();
        $planners->hall= $request->hall;
        $planners->date= $request->date;
        $planners->start_at= $request->start_at;
        $planners->end_at= $request->end_at;
        $planners->film= $request->film;

        $planners->save();

        return redirect('films/create')
            ->with('success_planner', 'Film successfully planned.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
