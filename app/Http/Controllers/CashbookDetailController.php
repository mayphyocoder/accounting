<?php

namespace App\Http\Controllers;

use App\Models\CashBook;
use Illuminate\Http\Request;

class CashbookDetailController extends Controller
{
    public function show($id)
    {
        $cashbooks = CashBook::where('coa_acc_type_id_1', $id)->get();

        return view('detail.cashbook_detail', compact('cashbooks'));
    }
}
