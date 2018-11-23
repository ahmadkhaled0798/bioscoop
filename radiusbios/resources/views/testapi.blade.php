<?php
/**
 * Created by PhpStorm.
 * User: ayub cige
 * Date: 22-11-2018
 * Time: 16:54
 */
?>
<?php
if (!empty($_GET['location'])) {
    /**
     * Here we build the url we'll be using to access the google maps api
     */
    $maps_url = 'https://' .
        'maps.googleapis.com/' .
        'maps/api/geocode/json' .
        '?address=' . urlencode($_GET['location']);
    $maps_json = file_get_contents($maps_url);
    $maps_array = json_decode($maps_json, true);
    $lat = $maps_array['results'][0]['geometry']['location']['lat'];
    $lng = $maps_array['results'][0]['geometry']['location']['lng'];
    /**
     * Time to make our Instagram api request. We'll build the url using the
     * coordinate values returned by the google maps api
     */
    $url = 'https://' .
        'api.instagram.com/v1/media/search' .
        '?lat=' . $lat .
        '&lng=' . $lng .
        '&client_id=CLIENT-ID'; //replace "CLIENT-ID"
    $json = file_get_contents($url);
    $array = json_decode($json, true);
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
    <input type="text" name="location"/>
    <button type="submit">Submit</button>
</form>
<br/>
<div id="results" data-url="<?php if (!empty($url)) echo $url ?>">
    <?php
    if (!empty($array)) {
        foreach ($array['data'] as $key => $item) {
            echo '<img id="' . $item['id'] . '" src="' . $item['images']['low_resolution']['url'] . '" alt=""/><br/>';
        }
    }
    ?>
</div>
<script>
    $(document).ready(function () {
        setInterval(function () {
            itsAjaxTime();
        }, 5000);
    });

    function itsAjaxTime() {
        var url = $('#results').data('url');
        $.getJSON(url + '&callback=?', function (data) {
            addNewImages(data);
        });
    }

    function addNewImages(data) {
        $.each(data.data, function (index, image) {
            if ($('#' + image.id).length == 0) {
                var img = $('<img ' +
                    'id="' + image.id +
                    '" src="' + image.images.low_resolution.url +
                    '" alt=""/><br/>');
                img.hide().prependTo('#results').fadeIn(2000);
            }
        });
    }
</script>
</body>
</html>
