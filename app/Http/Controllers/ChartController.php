<?php

namespace App\Http\Controllers;

use App\Bill;
use Illuminate\Http\Request;

use App\Http\Requests;

class ChartController extends Controller
{
    //
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){

        $bills = Bill::all(['added_on', 'mileage']);
        $data = $bills;

        return view('bills.chart')->with(compact('data'));
    }
}
