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
        <h1>メイクタイム・メモ</h1>
        <h2 class='create'>
            <a href='/tunings/create'>create</a>
        </h2>
        <div class='tunings'>
        @foreach ($tunings as $tuning)
        <h2 class='date'>{{ $tuning->updated_at}}</h2>
        <h2>今日のハイライト</h2>
        <h2 class='Title'>{{ $tuning->title}}</h2>
        
        <h3>ハイライトの時間をつくれたか？</h3>
        @if($tuning->makeup_time == 1)
        <h4>YES</h4>
        @else
        <h4>NO</h4>
        @endif
        
        <h3>今日の集中度</h3>
        <h2>laser</h2><h4 class='laser_evaluation'>{{ $tuning->laser_evaluation}}</h4>
        
        <h3>今日のエネルギーレベル</h3>
        <h2>charge</h2><h4 class='charge_evaluation'>{{ $tuning->charge_evaluation}}</h4>
        
        
        <h2>今日試した戦術</h2>
        
        <h4><a href="/highlights/{{ $tactics->highlight_id }}">{{ $tactics->highlight->name }}</a></h4>
        <h4 class='highlight_impressions'>{{ $tuning->highlight_impressions}}</h4>
        <h4><a href="/highlights/{{ $tactics->laser_id }}">{{ $tactics->laser->name }}</a></h4>
        <h4 class='laser_impressions'>{{ $tuning->laser_impressions}}</h4>
        <h4><a href="/highlights/{{ $tactics->charge_id }}">{{ $tactics->charge->name }}</a></h4>
        <h4 class='charge_impressions'>{{ $tuning->charge_impressions}}</h4>
        <h4 class='thank'>{{ $tuning->thank}}</h4>
        <!--<p class="edit">[<a href="/tunings/{{ $tuning->id }}/edit">編集</a>]</p>-->
        @endforeach
        </div>
    </body>
</html>

@endsection