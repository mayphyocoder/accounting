<?php

namespace App\Models;

use App\Http\Controllers\CashbookController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartofAccount extends Model
{
    use HasFactory;

    public function account_type_table()
    {
        return $this->hasOne(AccountType::class, 'id', 'account_type_id');
    }
    public function cashbook_table()
    {
        return $this->hasMany(CashBook::class, 'coa_acc_type_id_1', 'id');
    }
}
