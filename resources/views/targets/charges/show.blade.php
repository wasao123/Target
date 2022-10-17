@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Makeup Time</title>  
        <link rel="stylesheet" href="{{asset('/css/tactics/show.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
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
                <a href="/chargechart/index" class="chargechart">CHARGECHART</a>
            </li>
            </ul>
            
            <h1 class="name">
                {{ $charge->name }}
            </h1>
        <div class="about2">
            <div class="border-top">
            </div>
            
            <h3>本文</h3>
                  <p>{{ $charge->full_text }}</p> 
            </div>
        </div>
        <div class="tacticsBT">
            <a href="/lasers">戻る</a>
        </div>
        <div class="tacticsBT2"> 
            <form method="POST" action="/charges/{charge}">
                @csrf
                @method('PUT')
                <input type ="hidden" name="tactics[charge_id]" value="{{ $charge->id }}"/>
                <input type ="hidden" name="tactics[user_id]" value="{{\Auth::id()}}"/>
                <input type="submit" value="選択"/>
            </form>
        </div>
    </body>
</html>

@endsection