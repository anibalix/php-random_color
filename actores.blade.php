<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <style>
        body{
            background-color: #d3c1da;
        }
        .dos{
            border: 1px solid black;
            display: block;
            width: 300px;
            padding: 10px;
            margin: 0 auto 0 auto;
            text-align: center;
        }
        /*.dos h1{
            text-align: center;
        }*/
        .dos hover{
            border: 2px solid black;
        }
        .uno{
            display: block;
            margin: 0 auto 0 auto;
            width: 400px;
            text-align: center;

        }
        h1{
            font-weight: lighter;
        }
        h1:hover{
            font-weight: bold;
            letter-spacing: 1px;
            cursor: pointer;
        }
        a{
            border:1px black solid;
            padding:4px;
            text-decoration:none;
            color:black;
            border-radius: 2px;
        }
        a:hover{
                color: red;
                background-color: lightblue;
                border: 3px black solid;
                font-weight: bold;
                padding: 8px;
                border-radius: 10px;
                transition: ease-in-out 0.1s;
        }
    </style>
    <body>
        <div class="uno">
            <h1>Buscar Actores</h1>
            <form class="" action="index.html" method="post">
                <input type="text" name="search" value="" placeholder="Colocá el nombre aquí">
            </form>
        </div>
        <br>
        <hr>
        <br>
        <div class="dos">
            <h1>Actores</h1>

                @foreach ($actores as $act)
                    <a href="/actores/{{$act->id}}">{{$act->nombre}} {{$act->apellido}}</a><br><br>
                @endforeach

        </div>


    </body>
</html>
