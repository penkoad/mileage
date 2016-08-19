@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Bills</h1>

        <div class="table-responsive">
            <table class="table table-hover">
                <tr>
                    <th>Amount</th>
                    <th>Mileage</th>
                    <th>Added on</th>
                </tr>
                @foreach($bill as $abill)
                    <tr>
                        <td>{{ $abill->amount }}</td>
                        <td>{{ $abill->mileage }}</td>
                        <td>{{ $abill->added_on }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <hr>
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <a href="{{ url('/bills/create') }}" class="">Add a bill</a>

    </div>
@stop


