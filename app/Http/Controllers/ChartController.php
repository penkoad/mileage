<?php

namespace App\Http\Controllers;

use App\Bill;

class ChartController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $dataset = Bill::all(['added_on', 'mileage']);
        $title = 'Trend';

        return view('bills.chart')->with(compact('dataset', 'title'));
    }
}
