@include('layouts.header')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact</title>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">



</head>
<body>
<div class="contact-page">




    <div class="content">

        <div class="gegevens">
            <h1>Contactgegevens</h1>

            <p>Hoofdlocatie:	Terheijdenseweg 350 4826 AA Breda</p>
            <p>Telefoon:	076 573 34 44</p>
            <p>E-mailadres:	radiuscollege@rocwb.nl</p>

            <h1>Openingstijden :</h1>
            <p>Maandag 00:00 tot 00:00</p>
            <p>Dinsdag 00:00 tot 00:00</p>
            <p>Woensdag 00:00 tot 00:00</p>
            <p>Donderdag 00:00 tot 00:00</p>
            <p>Vrijdag 00:00 tot 00:00</p>
            <p>Zaterdag 00:00 tot 00:00</p>
            <p>Zondag 00:00 tot 00:00</p>

            <h1>Parkeren</h1>
            <p>Rond het Chassé Theater is voldoende parkeergelegenheid. Op loopafstand vindt u: parkeergarage Het Turfschip, parkeergarage Chassé parking (let op: beperkt aantal plekken beschikbaar!), parkeerterrein Chasséveld en parkeerterrein Beyerd/Vlaszak. Op koopavond donderdag en koopzondag is het druk, maak op die dagen gebruik van de Premium Parking. Voor rolstoelgebruikers zijn er speciale parkeerplaatsen naast het theater en in Chassé parking. </p>

        </div>
        <div class="formulier">

            <h1>Contactformulier</h1>

            <form action="" method="post" >
                @csrf
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Uw naam..">

                <label for="email">email adress</label>
                <input type="email" id="email" name="email" placeholder="Uw email..">

                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Uw bericht.." style="height:200px"></textarea>

                <input type="submit" value="Versturen">

            </form>
        </div>
    </div>
    <div class="map">
        <h1>Locatie</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2478.090174668728!2d4.778021715502817!3d51.60323631151284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c69f990d127d8b%3A0x1e825fb420ca913c!2sRadius+College!5e0!3m2!1sen!2snl!4v1542702678514" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>
@include('layouts.footer')
</body>
</html>
