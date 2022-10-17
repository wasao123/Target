@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE HTML>
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
                <a href="/chargechart/index" class="chargechart">CHARGECHART</a>
            </li>
            </ul>
        
        <div class="border-top">
        </div>
        
        <div class='about2'>
             <form action="/tuning/store" method="POST">
                @csrf
                
                <div class="title">
                    <h2>今日のハイライト</h2>
                    <input type="text" name="tuning[title]"  class="@error('title') is-invalid @enderror" placeholder="今日のハイライト"/>
                </div>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
                <h2>ハイライトの時間をつくれたか？</h2>
                <div class="makeup_time">
                    <label><input type="radio" value="1" name="tuning[makeup_time]" checked/>YES</label>
                    
                    
                    <label><input type="radio" value="2" name="tuning[makeup_time]"/>NO</label>
                    
                    
                </div>
                
                <h2>集中度</h2>
                <select name="tuning[laser_evaluation]">
                @for ($i = 1; $i <= 10; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
                </select>
    
                
                <h2>エネルギーレベル</h2>
                <select name="tuning[charge_evaluation]">
                @for ($i = 1; $i <= 10; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
                </select>
                
                <h2>試した戦術</h2>
                    <h4><a href="/highlights/{{ $tactics->highlight_id }}">{{ $tactics->highlight->name }}</a></h4>
                    <input type ="hidden" name="tuning[highlight_id]" value="{{ $tactics->highlight_id }}"/>
                    <textarea name="tuning[highlight_impressions]" placeholder="highlightはどうだったか？"></textarea>
                
                    <h4><a href="/highlights/{{ $tactics->laser_id }}">{{ $tactics->laser->name }}</a></h4>
                    <input type ="hidden" name="tuning[laser_id]" value="{{ $tactics->laser_id }}"/>
                    <textarea name="tuning[laser_impressions]" placeholder="laserはどうだったか？"></textarea>
                
                
                    <h4><a href="/highlights/{{ $tactics->charge_id }}">{{ $tactics->charge->name }}</a></h4>
                    <input type ="hidden" name="tuning[charge_id]" value="{{$tactics->charge_id }}"/>
                    <textarea name="tuning[charge_impressions]" placeholder="chargeはどうだったか？"></textarea>
                
                    <h2>今日の感謝の瞬間</h2>
                    <textarea name="tuning[thank]" placeholder="今日の感謝の瞬間"></textarea>
            <div class="tacticsBT2"> 
                <input type ="hidden" name="tuning[user_id]" value="{{\Auth::id()}}"/>
                <a><input type="submit" value="保存"/></a>
            </form>
            </div>
            <div class="tacticsBT"><a href="/tunings">back</a></div>
        </div>
    </body>
</html>

@endsection