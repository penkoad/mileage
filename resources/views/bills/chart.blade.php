@extends('layouts.app')

@section('content')
    <amchart ctitle="{{ $title }}" data="{{json_encode($dataset)}}" ></amchart>
@stop

@section('bottom_scripts')
    <link rel="stylesheet" href="/amcharts/plugins/export/export.css" type="text/css" media="all"/>
    <script src="/amcharts/themes/dark.js"></script>
    <script src="/amcharts/themes/light.js"></script>
    <script src="/amcharts/themes/chalk.js"></script>
    <script src="/amcharts/themes/black.js"></script>
    <script src="/amcharts/themes/patterns.js"></script>
@stop
