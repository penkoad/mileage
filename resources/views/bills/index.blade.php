@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col"></div>
            <div class="col-8">
                <h4>Bills
                    <a href="{{ url('/bills/create') }}" class="float-right">
                        <button type="button" class="btn btn-primary">Add a bill</button>
                    </a>
                </h4>

                <table class="table table-hover mt-4">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Amount</th>
                        <th scope="col">Mileage</th>
                        <th scope="col">Added on</th>
                    </tr>
                    </thead>
                    @foreach($bills as $bill)
                        <tr>
                            <td>{{ $bill->amount }}</td>
                            <td>{{ $bill->mileage }}</td>
                            <td>{{ date('F d, Y', strtotime($bill->added_on)) }}</td>
                        </tr>
                    @endforeach
                </table>
                <div class="float-right">{{ $bills->render() }}</div>
            </div>

            <div class="col"></div>
        </div>
    </div>
@stop


