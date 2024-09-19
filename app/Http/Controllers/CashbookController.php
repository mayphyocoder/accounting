<?php

namespace App\Http\Controllers;

use App\Models\AccountType;
use App\Models\CashBook;
use App\Models\ChartofAccount;
use App\Models\Classification;
use Illuminate\Http\Request;

class CashbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cashbook.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chartof_accounts = ChartofAccount::all();
        // $classifications = Classification::all();
        $account_types = AccountType::all();

        return view('cashbook.create', compact('chartof_accounts','account_types'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([

            'cashbook_date' => 'required',
            'coa_acc_type_id_1' => 'required',
            'coa_acc_type_id_2' => 'required',
            'voucher' => 'required',
            'debit' => 'required|numeric',
            'credit'=>'required|numeric',
            'cashbook_description' => 'required',
            'currency' => 'required',
            'total_amount' => 'required',

        ]);
        
            // => from Table straight///

        $cashbook = new CashBook();
        $cashbook->cashbook_date = $request->cashbook_date;
        $cashbook->coa_acc_type_id_1 = $request->coa_acc_type_id_1;
        $cashbook->coa_acc_type_id_2 = $request->coa_acc_type_id_2;
        $cashbook->voucher = $request->voucher;
        $cashbook->debit = $request->debit;
        $cashbook->credit = $request->credit;
        $cashbook->cashbook_description = $request->cashbook_description;
        $cashbook->taxes = $request->taxes;
        $cashbook->currency = $request->currency;
        $cashbook->rate = $request->rate;
        $cashbook->total_amount = $request->total_amount;
        
        $cashbook->save();


        
        $cashbook->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
