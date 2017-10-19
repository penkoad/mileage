<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Http\Requests\BillRequest;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bills = Bill::orderBy('added_on', 'desc')
            ->paginate(10)
            ;

        return view('bills.index', compact('bills'));
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

    /**
     * @param BillRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(BillRequest $request)
    {
        // The user in session will be added on the bill
        $bill = \Auth::user()->publish(
            New Bill($request->all())
        );

        //dd($bill);
        if ($bill->save()) {
            flash()->Success('Success!', 'Your bill has been created.');
        }

        // After flashing a message you need to redirect or you'll flash twice
        // in request and the next one.
        return redirect()->route('bills.list');
    }
}
