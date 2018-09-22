@extends('layouts.app')

@section('extra_css')
    <style>
        body { padding-bottom: 100px; }
        .level {  display: flex; align-items: center; }
        .flex { flex: 1; }
        .mr-1 { margin-right: 1em;}
        .ml-a { margin-left: auto;}
        [v-cloak]: { display: none;}
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="level">
            <div class="flex">
                <h4>Bills</h4>
            </div>
            <a href="{{ url('/bills/create') }}" class="">
                <button class="btn btn-default">Add a bill</button>
            </a>
        </div>

        <br>

        <div class="table-responsive">
            <table class="table table-hover">
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

            <div class="text-center">
                {{ $bills->render() }}
            </div>
        </div>
    </div>
@stop


