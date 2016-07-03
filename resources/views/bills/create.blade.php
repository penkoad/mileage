@extends('layouts.app')

@section('content')

    <h1>Adding a bill?</h1>

    <hr>

    <form method="POST" action="/bills" enctype="multipart/form-data" >
        @include('errors.errors')

        @include('bills.form')
    </form>
@stop
