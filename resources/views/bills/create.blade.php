@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2>Create a New Bill</h2>
        <div class="row">

            <div class="col"></div>
            <div class="col-8">
                <form method="POST" action="{{ route('bills.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="mileage">Mileage:</label>
                        <input type="text" name="mileage" id="mileage" class="form-control {{ $errors->has('mileage') ? ' is-invalid' : '' }}" value="{{ old('mileage') }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->has('mileage') ? $errors->get('mileage')[0] : '' }}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="amount">Amount:</label>
                        <input type="text" name="amount" id="amount" class="form-control {{ $errors->has('amount') ? ' is-invalid' : '' }}" value="{{ old('amount') }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->has('amount') ? $errors->get('amount')[0] : '' }}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="added_on">Date:</label>
                        <div class='input-group date'>
                            <input type="text" class="form-control {{ $errors->has('added_on') ? ' is-invalid' : '' }}" name="added_on" id="added_on" value="{{ old('added_on') }}">
                            <div class="invalid-feedback">
                                {{ $errors->has('added_on') ? $errors->get('added_on')[0] : '' }}
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
            <div class="col"></div>
        </div>
    </div>

@stop

@section('extra_css')
    <link href="{{ mix('css/libs.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css" rel="stylesheet">
@stop

@section('bottom_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script>
    $('#added_on').datepicker({
        format: "yyyy-mm-dd",
        //startDate: "today",
        daysOfWeekDisabled: "0,6",
        autoclose: true,
        todayHighlight: true
    });
    </script>
@stop
