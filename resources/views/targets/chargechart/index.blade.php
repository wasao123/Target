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
        <h1>Chargechart</h1>
        
            <div id="curve_chart" style="width: 900px; height: 500px"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            
            const tests = @json($tests);
            
            console.table(tests);

            
            
            function drawChart() {
              var data = new google.visualization.DataTable();
                  data.addColumn( 'string', '資産' );
                  data.addColumn( 'number', 'エネルギーレベル' );
                  data.addRows( 
                    tests
                    );

        
              var options = {
                title: 'エネルギー推移',
                legend: { position: 'bottom' }
              };
        
              var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        
              chart.draw(data, options);
            }
          </script>
    </body>
</html>

@endsection