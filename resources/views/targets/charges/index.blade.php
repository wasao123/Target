@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
       <title>Makeup Time</title>
       <link rel="stylesheet" href="{{asset('/css/tactics/index.css')}}">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <!-- Fonts -->
       <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
        <body>
           <h1>Makeup Time<br><span>時間術大全補助サイト</span></h1>
            <ul class="globalNavi">
            <li>
                <a href="/home">HOME</a>
            </li>
            <li>
                <a href="/tunings" class="tuning">TUNING</a>
            </li>
            <li>
                <a href="/laserchart/index" class="chart">LASERCHART</a>
            </li>
            <li>
                <a href="/chargechart/index" class="chargechart">CHARGCHART</a>
            </li>
            </ul>
        
            <div class='about'>
            <h1>Chargeを選ぶ<br><span>Chaerge</span></h1>
            </div>
            <div class="border-top">
            </div>
            @foreach ($charges as $charge)
            
                <div class='about2'>
                    <h2 class='name'>
                        <a href="/charges/{{ $charge->id }}">{{ $charge->name }}</a>
                    </h2>
                    <p class='description'>{{ $charge->sentence }}</p>
                </div>
            @endforeach
        </body>
</html>

@endsection