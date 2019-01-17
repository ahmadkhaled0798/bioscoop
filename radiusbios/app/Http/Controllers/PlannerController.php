<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            'film' => 'required|string'

        ])->validate();

        $film_original = $request->film;
        $film = $request->film;
        $start_at = $request->start_at;


        $film = preg_replace('/\s+/', '+', $film);
        $url = "http://www.omdbapi.com/?t=" . $film . "&apikey=2a0ee939";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13");
        $json = curl_exec($ch);
        curl_close($ch);
        $obj = json_decode($json);


        $Runtime_before = $obj->Runtime;


        $Runtime = preg_replace("/[^0-9,.]/", "", $Runtime_before);

        $start_at = str_replace(":",".",$start_at);

        $hours = floor($Runtime / 60);
        $minutes = $Runtime % 60;

        $end_at_2 = $start_at + $hours . "." . $minutes;

        $end_at = str_replace(".",":",$end_at_2);
        $start_at = str_replace(".",":",$start_at);

        $insert_film_remark = $request->hall . "|" . $request->date . "|" . $start_at . "|" . $end_at;

        $films = new Film();
        $films->film_title= $film_original;
        $films->film_remark= $insert_film_remark;

        $films->save();


        if ($request->hall == 1)
        {
            $rows = 9; // aantal rijen van stoelen (verticaal)
            $halltype = 15; // aantal stoelen in 1 rij
            $chair_nr = 1; // rij van loveseat
        }
        else if ($request->hall == 2)
        {
            $rows = 9; // aantal rijen van stoelen (verticaal)
            $halltype = 10; // aantal stoelen in 1 rij
            $chair_nr = 1; // rij van loveseat
        }
        else {
            $rows = 10; // aantal rijen van stoelen (verticaal)
            $halltype = 10; // aantal stoelen in 1 rij
            $chair_nr = 0; // rij van loveseat
        }

        DB::table('halls')->insert([
            [
                'chair_nr' => $chair_nr,
                'hall_remark' => $insert_film_remark,
                'rows' => $rows,
                'hall_type' => $halltype,

            ]

        ]);


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
