@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
       <title>Makeup Time</title>
       <link rel="stylesheet" href="{{asset('/css/home/index.css')}}">
       <!-- Fonts -->
       <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Makeup Time</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                      <div class="today's-target">
                        <h1>目標</h1>
                    </div>
                    <h2>
                        <a href="highlights" class="highlight">戦術を選ぶ</a>
                    </h2>
                    @if(empty($tactics->highlight_id))
                     
                    @else
                    <div class="today's-tactics">
                        <h2　class="tactics">
                            今日の戦術
                        </h2>
                        
                        <h3 class="highlight">
                            Highlight
                        </h3>
                        
                        <h2 class="today">
                        <a href="/highlights/{{ $tactics->highlight_id }}">{{ $tactics->highlight->name }}</a>
                        </h2>
                        
                        <h3 class="laser">
                            Laser
                        </h3>
                        <a href="/highlights/{{ $tactics->laser_id }}">{{ $tactics->laser->name }}</a>
                        <h3 class="charge">
                            Charge
                        </h3>
                        <a href="/highlights/{{ $tactics->charge_id }}">{{ $tactics->charge->name }}</a>
                    </div>
                    <h2>
                        <a href="tunings" class="tuning">tuning</a>
                    </h2>
                    <h2>
                        <a href="/laserchart/index" class="chart">Laserchart</a>
                    </h2>
                    <h2>
                        <a href="/chargechart/index" class="chargechart">Chargechart</a>
                    </h2>
                    <footer></footer>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
