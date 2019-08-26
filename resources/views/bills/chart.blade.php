@extends('layouts.app')

@section('content')
    <amchart ctitle="{{ $title }}" data="{{json_encode($dataset)}}" asset-url="{{ URL::asset('/amcharts/') }}"></amchart>
@stop
