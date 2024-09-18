<?php

namespace App\Http\Controllers;

use App\Models\AccountType;
use App\Models\ChartofAccount;
use App\Models\Classification;
use Illuminate\Http\Request;

class ChartofAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $chartof_accounts = ChartofAccount::all();
        return view('chart_accounts.index', compact('chartof_accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classifications = Classification::all();
        $account_types = AccountType::all();
        return view('chart_accounts.create', compact('classifications', 'account_types'));
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

            'coa_number' => 'required|unique:chartof_accounts',
            'coa_name' => 'required',
            'account_type_id' => 'required',


        ]);

        $chartof_account = new ChartofAccount();
        $chartof_account->coa_number = $request->coa_number;
        $chartof_account->coa_name = $request->coa_name;
        $chartof_account->account_type_id = $request->account_type_id;
        $chartof_account->classification_id = null;
        $chartof_account->save();
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
        $chartof_account = ChartofAccount::find($id);
        return view('chart_accounts.show', compact('chartof_account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classifications = Classification::all();
        $account_types = AccountType::all();
        $chartof_account = ChartofAccount::find($id);
        return view('chart_accounts.edit', compact('classifications', 'account_types', 'chartof_account'));
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

            'coa_number' => 'required|unique:chartof_accounts,coa_number,' . $id,
            'coa_name' => 'required',
            'account_type_id' => 'required',


        ]);

        $chartof_account = ChartofAccount::find($id);
        $chartof_account->coa_number = $request->coa_number;
        $chartof_account->coa_name = $request->coa_name;
        $chartof_account->account_type_id = $request->account_type_id;
        $chartof_account->classification_id = null;
        $chartof_account->update();
        return redirect()->route('chart_accounts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chartof_account = ChartofAccount::find($id);
        $chartof_account->delete();
        return redirect()->back();
    }
}
