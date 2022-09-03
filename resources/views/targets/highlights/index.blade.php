@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
       <title>Makeup Time</title>
       <link rel="stylesheet" href="{{asset('/css/highlight/index.css')}}">
       <!-- Fonts -->
       <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
        <body>
        <h1>Makeup Time</h1>
        <div class='highlights'>
            @foreach ($highlights as $highlight)
            
                <div class='highlight'>
                    <h2 class='name'>
                        <a href="/highlights/{{ $highlight->id }}">{{ $highlight->name }}</a>
                    </h2>
                    <p class='description'>{{ $highlight->sentence }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>

@endsection