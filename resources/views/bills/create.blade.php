@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a New Bill</div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('bills.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class='col-sm-12'>

                                @if($errors->has('mileage'))
                                    <div class="alert alert-danger" role="alert">
                                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                        <span class="sr-only">Error:</span>
                                        {{ $errors->has('mileage') ? $errors->get('mileage')[0] : '' }}
                                    </div>
                                @endif
                                <div class="form-group {{ $errors->has('mileage') ? ' has-error' : '' }}">
                                    <label for="mileage">Mileage:</label>
                                    <input type="text" name="mileage" id="mileage" class="form-control" value="{{ old('mileage') }}" required>
                                </div>

                                @if($errors->has('amount'))
                                    <div class="alert alert-danger" role="alert">
                                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                        <span class="sr-only">Error:</span>
                                        {{ $errors->has('amount') ? $errors->get('amount')[0] : '' }}
                                    </div>
                                @endif
                                <div class="form-group {{ $errors->has('amount') ? ' has-error' : '' }}">
                                    <label for="amount">Amount:</label>
                                    <input type="text" name="amount" id="amount" class="form-control" value="{{ old('amount') }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="added_on">Date:</label>

                                    <div class='input-group date'>
                                        <input type="text" class="form-control" name="added_on" id="added_on" value="{{ old('added_on') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                            <hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create Bill</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

@section('extra_css')
    <link href="{{ asset('css/libs.css') }}" rel="stylesheet">
@stop

@section('bottom_scripts')
    <script>
    $('#added_on').datepicker({
        uiLibrary: 'bootstrap4',
        disableDaysOfWeek: [0, 6],
        format: 'yyyy-mm-dd',
        header: false
    });
    </script>
@stop
