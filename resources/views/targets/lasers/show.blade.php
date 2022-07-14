<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Makeup Time</title>  
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="name">
            {{ $laser->name }}
        </h1>
        <div class="content">
            <div class="content_laser">
                 <h3>本文</h3>
                  <p>{{ $laser->description }}</p> 
            </div>
        </div>
        <div class="footer">
            <a href="/lasers">戻る</a>
            <a href="/charges">選択</a>
        </div>
    </body>
</html>