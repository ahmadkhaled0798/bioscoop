<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        if (empty($request->movie_name))
        {
            return  ('Movie Name is Empty!');


        }
        else{

            $movie_name = $request->movie_name;

            $movie_name = preg_replace('/\s+/', '+', $movie_name);
            $url = "http://www.omdbapi.com/?t=" . $movie_name . "&apikey=2a0ee939";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13");
            $json = curl_exec($ch);
            curl_close($ch);
            $obj = json_decode($json);
                    //echo "<pre>";
                    //var_dump($obj);
                    //echo "</pre>";
            echo "<center>API URL: " . $url . "<br>";
            echo "Movie Name: " . $obj->Title . "<br>";
            echo "<img src='" . $obj->Poster . "'></center><br>";

            $stuff = $obj;
            print json_encode($stuff);

//            foreach($obj as $key=>$val){
//                {{$key.": ".$val."<br>";}}
//
//            }

        }





    }

    public function show(){

        $movie_name = "john wick"; // veranderen naar een SQL Query zodat de titel van een film uit de database wordt opgehaald.

        $movie_name = preg_replace('/\s+/', '+', $movie_name);
        $url = "http://www.omdbapi.com/?t=" . $movie_name . "&apikey=2a0ee939";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13");
        $json = curl_exec($ch);
        curl_close($ch);
        $obj = json_decode($json);

        return view('filmpage')
            ->with('obj', $obj);
    }
}
