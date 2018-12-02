
<?php
if (!empty($_GET['movie'])) {

    $movie_url = 'http://www.omdbapi.com/?t='. urlencode($_GET['movie']).'&apikey=c8307ab5';
    $movie_json = file_get_contents($movie_url);
    $movie_array = json_decode($movie_json, true);

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


<div class="result">
    <div class="img">
        @if(!empty($movie_array) && !empty($_GET['movie']))
            <img src="<?php echo $movie_array['Poster'];?>" alt="">

            @else
            <p>film niet gevonden</p>
            @endif
    </div>
    <div class="title">
        @if(!empty($movie_array) && !empty($_GET['movie']))
            <p><?php echo $movie_array['Title'];?></p>
        @endif
    </div>

    <div class="beschrijving">
        @if(!empty($movie_array) && !empty($_GET['movie']))
            <p><?php echo $movie_array['Plot'];?></p>
        @endif
    </div>
</div>



</body>
</html>
