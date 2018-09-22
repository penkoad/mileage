@extends('layouts.app')

@section('content')
    <amchart ctitle="{{ $title }}" data="{{json_encode($dataset)}}" ></amchart>
@stop

@section('bottom_scripts')
    <link rel="stylesheet" href="/amcharts/plugins/export/export.css" type="text/css" media="all"/>
    <script src="/amcharts/themes/light.js" defer></script>
    <script src="/amcharts/plugins/export/export.min.js" defer></script>
@stop
