<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>viewarea</title>
<!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @foreach($posts as $post)
            {{$post->title}}
            {{$post->body}}
        @foreach($post->photos as $photo) 
        <p><img src="{{$photo->image}}" alt="サンプル画像"></p>
        @endforeach
        @endforeach
        
    </body>    