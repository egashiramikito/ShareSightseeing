<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>viewarea</title>
    </head>
         <body>
         <h1>エリアを選ぶ</h1>
        <div class='viewareas'>
            <div class='area'>
                @foreach($areas as $area)
                <a href ="/viewarea/{{ $area->id }}">{{$area->name}}</a>
                @endforeach
               
            </div>
        </div>