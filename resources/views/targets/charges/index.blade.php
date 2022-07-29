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
        <div class='charges'>
          
        </div>
    </body>  @foreach ($charges as $charge)
            
                <div class='highlight'>
                    <h2 class='name'>
                        <a href="/charges/{{ $charge->id }}">{{ $charge->name }}</a>
                    </h2>
                    <p class='description'>{{ $charge->sentence }}</p>
                </div>
            @endforeach
</html>

@endsection