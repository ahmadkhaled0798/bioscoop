@include('layouts.header')
        <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FAQ</title>
    <style>
        /* Style the buttons that are used to open and close the accordion panel */
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            text-align: left;
            border: none;
            outline: none;
            transition: 0.4s;
        }

        /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
        .active, .accordion:hover {
            background-color: #ccc;
        }

        /* Style the accordion panel. Note: hidden by default */
        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }
        .accordion:after {
            content: '\02795'; /* Unicode character for "plus" sign (+) */
            font-size: 13px;
            color: #777;
            float: right;
            margin-left: 5px;
        }

        .active1:after {
            content: "\2796"; /* Unicode character for "minus" sign (-) */
        }
    </style>




</head>
<body>
<div class="faq-page">


    <div class="faq-content">
        <h1>FAQ</h1>
        <button class="accordion">vraag 1</button>
        <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus aliquam beatae blanditiis consequuntur dolorem eligendi enim est et, eum incidunt itaque libero neque, officia quia rerum, saepe sequi totam!</p>
        </div>

        <button class="accordion">vraag 2</button>
        <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aperiam, aut consequuntur dolores eaque esse facere laudantium minima mollitia natus non officiis omnis perferendis quisquam saepe, tempora voluptatum! Praesentium.</p>
        </div>

        <button class="accordion">vraag 3</button>
        <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dignissimos et facere laborum laudantium, minus mollitia porro quas quod rem? Corporis culpa fugit, inventore ipsa labore nulla quas quis saepe.</p>
        </div>

    </div>
    </div>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active1");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight){
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
    @include('layouts.footer')
</body>
</html>
