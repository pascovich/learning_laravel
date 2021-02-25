<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>laravel_practice</title>

    </head>
    <body>
         @if($isweekend)
            {{ "va t'amiser"}}
            @else
           {{"desole il te faux travailler"}}
        @endif

    </body>
</html>
