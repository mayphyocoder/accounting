<?php

namespace App\Http\Controllers;

use App\Models\AccountType;
use App\Models\Classification;
use Illuminate\Http\Request;

class AccountTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account_types = AccountType::all();
        return view('account_type.index', compact('account_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classifications = Classification::all();
        return view('account_type.create',compact('classifications'));
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
            
            'classification_id' => 'required',
            'account_number' => 'required|unique:account_types',
            'description' => 'required',
            'financial_statement' => 'required',
            
        ]);
        $account_type = new AccountType();
        $account_type->classification_id = $request->classification_id;
        $account_type->account_number = $request->account_number;
        $account_type->description = $request->description;
        $account_type->financial_statement = $request->financial_statement;
        $account_type->save();
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
        $classifications = Classification::all();
        $account_type = AccountType::find($id);
        return view('account_type.edit',compact('account_type','classifications'));
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
            
            'classification_id' => 'required',
            'account_number' => 'required|unique:account_types,account_number,'.$id,
            'description' => 'required',
            'financial_statement' => 'required',
            
        ]);
        $account_type = AccountType::find($id);
        $account_type->classification_id = $request->classification_id;
        $account_type->account_number = $request->account_number;
        $account_type->description = $request->description;
        $account_type->financial_statement = $request->financial_statement;
        $account_type->update();
        return redirect()->route('account_type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $account_type = AccountType::find($id);
        $account_type->delete();
        return redirect()->back();
    }
}
