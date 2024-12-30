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
        $cashbooks = CashBook::all();

        return view('cashbook.index', compact('cashbooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chartof_accounts = ChartofAccount::all();
        $account_types = AccountType::all();

        return view('cashbook.create', compact('chartof_accounts', 'account_types'));
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
            'credit' => 'required|numeric',
            'rate' => 'numeric',
            'currency' => 'required',
            'total_amount' => 'numeric',
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

        return redirect()->route('cashbook.index');
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
        $chartof_accounts = ChartofAccount::all();
        $account_types = AccountType::all();
        $cashbook = Cashbook::find($id);
        return view('cashbook.edit', compact('chartof_accounts', 'account_types', 'cashbook'));
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
        $request->validate([
            'cashbook_date' => 'required',
            'coa_acc_type_id_1' => 'required',
            'coa_acc_type_id_2' => 'required',
            'voucher' => 'required',
            'debit' => 'required|numeric',
            'credit' => 'required|numeric',
            'rate' => 'numeric',
            'currency' => 'required',
            'total_amount' => 'numeric',
        ]);

        // => from Table straight///

        $cashbook = Cashbook::find($id);
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
        $cashbook->update();

        return redirect()->route('cashbook.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cashbook = Cashbook::find($id);
        $cashbook->delete();
        return redirect()->back();
    }
}
