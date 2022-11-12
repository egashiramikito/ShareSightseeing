<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>viewareaprefecture</title>
　　 </head>
 　　   　 <body>
            <h1 class="対象地域を選択">
                {{ $area->name }}
            </h1>
                <div class="content">
                        <div class="content__post">
                            @foreach($prefectures as $prefecture)
                            <a href = "/viewarea/{{ $area->id }}/{{ $prefecture->id }}">{{$prefecture->name}}</a> 
                            @endforeach
                         
                        </div>
                </div>
                    <div class="footer">
                <a href="/viewarea">戻る</a>
        </div>
    </body>
</html>