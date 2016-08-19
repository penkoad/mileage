@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Adding a bill?</h1>

        <hr>
        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">

            <form method="POST" action="/bills" enctype="multipart/form-data">
                @include('errors.errors')

                @include('bills.form')
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create Bill</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
@stop
