@extends('layouts.app')

@section('content')
    <amchart ctitle="{{ $title }}" data="{{json_encode($dataset)}}" ></amchart>
@stop
