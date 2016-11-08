<?php
    public function rand_color() {
        return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
    }

    public function rand_size(){
        return rand(10,100);
    }

    public function rand_font()
    {
        $fonts = array("Helvetica", "Arial", "Comic Sans", "Tahoma", 'Georgia','Times New Roman','Comic Sans','Trebuchet MS','Courier New','Lucida Sans','Verdana');
        shuffle($fonts);
        $randomFont = array_shift($fonts);
        return $randomFont;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <style media="screen">

        body{
            background-color: {{rand_color()}};
        }
        .cua{
            border: 1px solid white;
            width: 500px;
            margin: 10% auto 0 auto;
            text-align: center;
            padding: 15px;
        }
        .actor{
            font-size: 28px;
        }
        p{
            margin: 0;
        }
        /*a{
            text-align: center;
            text-decoration: none;
        }*/
        a{
            border:1px black solid;
            padding:4px;
            text-decoration:none;
            color:black;
            border-radius: 2px;
            color: white;
            background-color: {{rand_color()}};
        }
        a:hover{
                color: {{rand_color()}};
                background-color: {{rand_color()}};
                border: 3px black solid;
                font-weight: bold;
                padding: 8px;
                border-radius: 10px;
                transition: ease-in-out 0.1s;
        }
    </style>
    <body>
        <div class="cua">
            <p>
                El actor seleccionado es:
            </p>
            <p class="actor">
                <b style="font-size:{{$rand_size}}px; font-family:{{$rand_font}};">{{ $actor->nombre }} {{ $actor->apellido }}</b>
            </p>
            <br>
            <a href="http://www.google.com/images?q={{ $actor->nombre }}+{{ $actor->apellido }}">Google Imagenes</a>
            <br> <br>
            <a href="https://www.youtube.com/results?search_query={{ $actor->nombre }}+{{ $actor->apellido }}">Videos de Youtube</a>
        </div>

    </body>
</html>
