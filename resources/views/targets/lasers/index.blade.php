@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
       <title>Makeup Time</title>
       <!-- Fonts -->
       <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
        <body>
            {{Auth::user()->name}}
        <h1>Makeup Time</h1>
        <div class='highlights'>
            @foreach ($lasers as $laser)
            
                <div class='laser'>
                    <h2 class='name'>
                        <a href="/lasers/{{ $laser->id }}">{{ $laser->name }}</a>
                    </h2>
                    <p class='description'>{{ $laser->sentence }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>

@endsection