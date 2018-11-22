<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
    {{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>--}}
    {{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
</head>
<body>
<section id="footer">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            {{--<div class="col-xs-12 col-sm-4 col-md-4">--}}
                {{--<h5></h5>--}}
                {{--<ul class="list-unstyled quick-links">--}}
                    {{--<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i></a></li>--}}
                    {{--<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i></a></li>--}}
                    {{--<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i></a></li>--}}

                {{--</ul>--}}
            {{--</div>--}}
            <div class="row">
                <h5>Quick links</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="home"><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a href="contact"><i class="fa fa-angle-double-right"></i>Contact</a></li>
                    <li><a href="faq"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                    <li><a href="privacy"><i class="fa fa-angle-double-right"></i>Privacy</a></li>
                </ul>
            </div>
            {{--<div class="col-xs-12 col-sm-4 col-md-4">--}}
                {{--<h5></h5>--}}
                {{--<ul class="list-unstyled quick-links">--}}
                    {{--<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i></a></li>--}}
                    {{--<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i></a></li>--}}
                    {{--<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i></a></li>--}}

                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
            </hr>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
                <p class="h6">&copy All right Reversed.</p>
            </div>
            </hr>
        </div>
    </div>
</section>

</body>
</html>

