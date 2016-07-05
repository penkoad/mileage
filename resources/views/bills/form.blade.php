<div class="row">
    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="mileage">Mileage:</label>
            <input type="text" name="mileage" id="mileage" class="form-control" value="{{ old('mileage') }}" required>
        </div>

        <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="text" name="amount" id="amount" class="form-control" value="{{ old('amount') }}" required>
        </div>

        <div class="form-group">
            <label for="added_on">Date:</label>
            <input type="text" name="added_on" id="added_on" class="form-control" value="{{ old('added_on') }}" required>
        </div>

    </div>

    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
        <hr>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Bill</button>
        </div>
    </div>
</div>

