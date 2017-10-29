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
            <button class="btn btn-default">
                <a href="{{ url('/bills/create') }}" class="">Add a bill</a>
            </button>
        </div>

        <br>

        <div class="table-responsive">
            <table class="table table-hover">
                <tr>
                    <th>Amount</th>
                    <th>Mileage</th>
                    <th>Added on</th>
                </tr>
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


