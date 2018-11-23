<?php
/**
 * Created by PhpStorm.
 * User: ayub cige
 * Date: 22-11-2018
 * Time: 16:54
 */
?>
<?php
if (!empty($_GET['movie'])) {
    /**
     * Here we build the url we'll be using to access the google maps api
     */
    $movie_url = 'http://www.omdbapi.com/?t='. urlencode($_GET['movie']).'&apikey=c8307ab5';
    $movie_json = file_get_contents($movie_url);
    $movie_array = json_decode($movie_json, true);
    dd($movie_array);// $movie_array['id'];
//    $title = $movie_array['title'];
//    $plot= $movie_array['plot'];
//    $image = $movie_array['poster'];
//    /**
//     * Time to make our Instagram api request. We'll build the url using the
//     * coordinate values returned by the google maps api
//     */
//    $url = 'https://' .
//        'api.instagram.com/v1/media/search' .
//        '?lat=' . $lat .
//        '&lng=' . $lng .
//        '&client_id=CLIENT-ID'; //replace "CLIENT-ID"
//    $json = file_get_contents($url);
//    $array = json_decode($json, true);
}
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>geogram</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
<form action="" method="get">
    <input type="text" name="movie"/>
    <button type="submit">Submit</button>
</form>


{{--<div id="results" data-url="<?php if (!empty($url)) echo $url ?>">--}}
    {{--<?php--}}
    {{--if (!empty($movie_array)) {--}}
        {{--foreach ($movie_array as $) {--}}
            {{--echo $item['Title'];--}}
        {{--}--}}
    {{--}--}}
    {{--?>--}}
{{--</div>--}}



</body>
</html>
