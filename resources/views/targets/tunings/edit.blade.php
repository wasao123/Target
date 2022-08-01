@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Makeup Time</title>
    </head>
    <body>
        <h1>Makeup Time</h1>
        <form action="/tuning/{{ $tuning->id }}" method="POST">
            @csrf 
            @method('PUT')
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="tuning[title]" placeholder="今日のハイライト"volue="{{$tuning->title}}"/>
            </div>
            <h3>ハイライトの時間をつくれたか？</h3>
            <div class="makeup_time">
                <label><input type="radio" value="1" name="tuning[makeup_time]" checked/>YES</label>
                
                
                <label><input type="radio" value="2" name="tuning[makeup_time]"/>NO</label>
                
                
            </div>
            
            <h3>今日の集中度</h3>
            <h2>laser</h2>
            <select name="tuning[laser_evaluation]">
            @for ($i = 1; $i <= 10; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
            @endfor
            </select>

            
            <h3>今日のエネルギーレベル</h3>
            <h2>charge</h2>
            <select name="tuning[charge_evaluation]">
            @for ($i = 1; $i <= 10; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
            @endfor
            </select>
            
            <div class="highlight_impressions">
                <h3>highlight</h3>
                <h4><a href="/highlights/{{ $tactics->highlight_id }}">{{ $tactics->highlight->name }}</a></h4>
                <textarea name="tuning[highlight_impressions]" placeholder="highlightはどうだったか？">{{$tuning->highlight_impressions}}</textarea>
            </div>
            <div class="laser">
                <h3>laser</h3>
                <h4><a href="/highlights/{{ $tactics->laser_id }}">{{ $tactics->laser->name }}</a></h4>
                <textarea name="tuning[laser_impressions]" placeholder="laserはどうだったか？">{{$tuning->laser_impressions}}</textarea>
            </div>
            <div class="charge">
                <h3>charge</h3>
                <h4><a href="/highlights/{{ $tactics->charge_id }}">{{ $tactics->charge->name }}</a></h4>
                <textarea name="tuning[charge_impressions]" placeholder="chargeはどうだったか？">{{$tuning->charge_impressions}}</textarea>
            </div>
            <div class="thank">
                <h3>今日の感謝の瞬間</h3>
                <textarea name="tuning[thank]" placeholder="今日の感謝の瞬間">{{$tuning->thank}}</textarea>
            </div>
            <input type ="hidden" name="tuning[user_id]" value="{{\Auth::id()}}"/>
            <input type="submit" value="update"/>
        </form>
        <div class="back">[<a href="/tunings">back</a>]</div>
    </body>
</html>

@endsection