@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
       <title>Makeup Time</title>
       <mate name="discription" content="時間術大全の補助サイトです">
       <link rel="stylesheet" href="{{asset('/css/home/index.css')}}">
       <link rel="preconnect" href="https://fonts.googleapis.com">

<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
       <!-- Fonts -->
       <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       
<body>
    <h1>Makeup Time<br><span>時間術大全補助サイト</span></h1>
    @if(empty($tactics->highlight_id))
    @else
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
    
    <div class="mainImage">
        <img src="/images/main.jpg" alt="写真">
    </div>
    
    <div class="aboutSection">
        <div class="tacticsBT">
            <a href="highlights" class="highlight">TACTICS</a>
        </div>
    
    <ul>
        <li>
            <img src="/images/highlights.jpg" alt="写真">
            <h3>Highlight</h3>
            <p>
            <a href="/highlights/{{ $tactics->highlight_id }}">{{ $tactics->highlight->name }}</a>
            </p>
        </li>
        <li>
            <img src="/images/laser.jpg" alt="写真">
            <h3>laser</h3>
            <p>
            <a href="/highlights/{{ $tactics->laser_id }}">{{ $tactics->laser->name }}</a>
            </p>
        </li>
        <li>
            <img src="/images/charge.jpg" alt="写真">
            <h3>charge</h3>
            <p>
            <a href="/highlights/{{ $tactics->charge_id }}">{{ $tactics->charge->name }}</a>
            </p>
        </li>
    </ul>
    </div>
    @endif
    <div class="copyright">
        <p>©2022 Makeup Time.</p>    
    </div>
    
    
    @endsection
</body>