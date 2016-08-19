
    {{ csrf_field() }}

    <div class="form-group">
        <label for="mileage">Mileage:</label>
        <input type="text" name="mileage" id="mileage" class="form-control" value="{{ old('mileage') }}" required>
    </div>

    <div class="form-group">
        <label for="amount">Amount:</label>
        <input type="text" name="amount" id="amount" class="form-control" value="{{ old('amount') }}" required>
    </div>


    <div class="input-group date">
        <label for="added_on">Date:</label>
        <input type="text" class="form-control" name="added_on" id="added_on" value="{{ old('added_on') }}" required><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
    </div>



@section('extra_css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css">
@stop

@section('bottom_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script>
        $('.input-group.date').datepicker({
            format: "yyyy-mm-dd",
            //startDate: "today",
            daysOfWeekDisabled: "0,6",
            autoclose: true,
            todayHighlight: true
        });
    </script>
@stop