<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Http\Requests\BillRequest;
use Illuminate\Http\Request;

use App\Http\Requests;

class BillController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bills.create');
    }

    public function store(BillRequest $request)
    {
        // The user in session will be added on the bill
        $bill = \Auth::user()->publish(
            New Bill($request->all())
        );

        // @todo: do we want to store twice the same bill?

        //dd($bill);
        if ($bill->save())
            flash()->Success('Success!', 'Your bill has been created.');

        return view('home');
    }

}
