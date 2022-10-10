@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
       <title>Makeup Time</title>
       <link rel="stylesheet" href="{{asset('/css/tunings/index.css')}}">
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
                <h1>Tuningする<br><span>Tuning</span></h1>
            </div>
                
                
            <h2 class='name'>
                <div class="tacticsBT">
                <a href='/tunings/create'>create</a>
                </div>
            </h2>
            <div class="border-top">
            </div>
            
                @foreach ($tunings as $tuning)
                <div class='about2'>
                            <h3><time>{{ $tuning->updated_at}}</time></h3>
                            <h2>今日のハイライト</h2>
                            <h3><p>{{ $tuning->title}}</p></h3>
                            
                            <h2>ハイライトの時間をつくれたか？</h2>
                            @if($tuning->makeup_time == 1)
                            <p>YES</p>
                            @else
                            <p>NO</p>
                            @endif
                            
                            <h2>集中度</h2>
                            <h3 class='laser_evaluation'>{{ $tuning->laser_evaluation}}</h3>
                            
                            <h2>エネルギーレベル</h2>
                            <h3 class='charge_evaluation'>{{ $tuning->charge_evaluation}}</h3>
                            
                            
                            <h2>試した戦術</h2>
                            
                            <h4><a href="/highlights/{{ $tactics->highlight_id }}">{{ $tactics->highlight->name }}</a></h4>
                            <h4 class='highlight_impressions'>{{ $tuning->highlight_impressions}}</h4>
                            <h4><a href="/highlights/{{ $tactics->laser_id }}">{{ $tactics->laser->name }}</a></h4>
                            <h4 class='laser_impressions'>{{ $tuning->laser_impressions}}</h4>
                            <h4><a href="/highlights/{{ $tactics->charge_id }}">{{ $tactics->charge->name }}</a></h4>
                            <h4 class='charge_impressions'>{{ $tuning->charge_impressions}}</h4>
                            <h4 class='thank'>{{ $tuning->thank}}</h4>
            <!--<p class="edit">[<a href="/tunings/{{ $tuning->id }}/edit">編集</a>]</p>-->
                </div>
                @endforeach
    </body>
</html>

@endsection