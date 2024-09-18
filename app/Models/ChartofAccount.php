<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartofAccount extends Model
{
    use HasFactory;
    
    public function account_type_table(){
        return $this->hasOne(AccountType::class,'id','account_type_id');
    }
}

