@extends('layouts.app')

@section('extra_css')
    <link rel="stylesheet" href="/js/amcharts/plugins/export/export.css" type="text/css" media="all" />
    <style>
    #chartdiv {
        width	: 100%;
        height	: 500px;
    }
    </style>
@stop

@section('content')
    <div class="container-fluid">
        <h1>Trends</h1>
            <div id="chartdiv"></div>
    </div>
@stop

@section('bottom_scripts')

    <script src="/js/amcharts/amcharts.js"></script>
    <script src="/js/amcharts/serial.js"></script>
    <script src="/js/amcharts/plugins/export/export.min.js"></script>
    <script src="/js/amcharts/themes/light.js"></script>

    <script>
        var chart = AmCharts.makeChart("chartdiv", {
            "type": "serial",
            "theme": "light",
            "marginRight":80,
            "autoMarginOffset":20,
            "dataDateFormat": "YYYY-MM-DD HH:NN",
            "dataProvider":[
            @foreach ($data as $datum)
            {
                    "date": "{{ $datum->added_on }}",
                    "value": "{{ $datum->mileage }}"
                },
            @endforeach
            ],
            "valueAxes": [{
                "axisAlpha": 0,
                "guides": [{
                    "fillAlpha": 0.1,
                    "fillColor": "#888888",
                    "lineAlpha": 0,
                    "toValue": 16,
                    "value": 10
                }],
                "position": "left",
                "tickLength": 0
            }],
            "graphs": [{
                "balloonText": "[[category]]<br><b><span style='font-size:14px;'>value:[[value]]</span></b>",
                "bullet": "round",
                "dashLength": 3,
                "colorField":"color",
                "valueField": "value"
            }],
            "trendLines": [{
                "finalDate": "2017-06-15 12",
                "finalValue": 21666,
                "initialDate": "2016-06-15 12",
                "initialValue": 0,
                "lineColor": "#CC0000"
            }],
            "chartScrollbar": {
                "scrollbarHeight":2,
                "offset":-1,
                "backgroundAlpha":0.1,
                "backgroundColor":"#888888",
                "selectedBackgroundColor":"#67b7dc",
                "selectedBackgroundAlpha":1
            },
            "chartCursor": {
                "fullWidth":true,
                "valueLineEabled":true,
                "valueLineBalloonEnabled":true,
                "valueLineAlpha":0.5,
                "cursorAlpha":0
            },
            "categoryField": "date",
            "categoryAxis": {
                "parseDates": true,
                "axisAlpha": 0,
                "gridAlpha": 0.1,
                "minorGridAlpha": 0.1,
                "minorGridEnabled": true
            },
            "export": {
                "enabled": true
            }
        });

        chart.addListener("dataUpdated", zoomChart);

        function zoomChart(){
            chart.zoomToDates(new Date(2016, 6, 1), new Date(2016, 9, 13));
        }
    </script>
@stop