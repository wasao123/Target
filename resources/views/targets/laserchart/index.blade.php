@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
       <title>Makeup Time</title>
       <!-- Fonts -->
       <link rel="stylesheet" href="{{asset('/css/home/index.css')}}">
       <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
        <body>
        <ul class="globalNavi">
            <h1>Makeup Time<br><span>時間術大全補助サイト</span></h1>
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
        <h1>Laserchart</h1>
        <div class="mainImage">
             
            <div id="curve_chart" style="width: 100%; height: 500px"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            
            const tests = @json($tests);
            
            console.table(tests);

            
            
            function drawChart() {
              var data = new google.visualization.DataTable();
                  data.addColumn( 'string', '資産' );
                  data.addColumn( 'number', '集中度' );
                  data.addRows( 
                    tests
                    );

        
              var options = {
                title: '集中度推移',
                legend: { position: 'bottom' }
              };
        
              var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        
              chart.draw(data, options);
            }
          </script>
        </div>
    </body>
</html>

@endsection