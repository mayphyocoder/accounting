<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    use HasFactory;

    public function account_type_table(){
        return $this->hasMany(AccountType::class,'classification_id', 'id');
    }
}
