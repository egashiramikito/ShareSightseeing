<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>投稿の詳細</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>写真</h2>
                <input type="text" name="post[title]" placeholder="画像を添付"/>
            </div>
            <div class="body">
                <h2>投稿内容</h2>
                <textarea name="post[body]" placeholder="投稿コメント"></textarea>
            </div>
            <input type="hidden" name="post[area_id]" value="{{$area_id}}"/>
            <input type="hidden" name="post[prefecture_id]" value="{{$prefecture_id}}"/>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/area">戻る</a>
         
        </div>
    </body>
</html>