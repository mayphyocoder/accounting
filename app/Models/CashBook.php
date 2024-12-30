<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashBook extends Model
{
    use HasFactory;

    public function coa_table1()
    {
        return $this->hasOne(ChartofAccount::class, 'id', 'coa_acc_type_id_1');
    }


    public function coa_table2()
    {
        return $this->hasOne(ChartofAccount::class, 'id', 'coa_acc_type_id_2');
    }
}
