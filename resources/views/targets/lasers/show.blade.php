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
                  <p>{{ $laser->full_text }}</p> 
            </div>
        </div>
        <div class="footer">
            <a href="/lasers">戻る</a>
            
            <form method="POST" action="/lasers/{laser}">
                @csrf
                @method('PUT')
                <input  name="tactics[laser_id]" value="{{ $laser->id }}"/>
                <input type ="hidden" name="tactics[user_id]" value="{{\Auth::id()}}"/>
                <input type="submit" value="選択"/>
            </form>
        </div>
    </body>
</html>