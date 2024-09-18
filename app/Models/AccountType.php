<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AccountType extends Model
{
    use HasFactory;

    public function classification_table(){
        return $this->hasOne(Classification::class, 'id','classification_id');

        // ****    Tables Relationship ** /////

        //  $this => Class AccountType inside
        //  hasOne => one to one (to connect table) _. table is called as Modedl
        // Classification => Model Name (including table)
        // 'classification_id' => Accounttpes table htae mhar shi tae 'classification_id'
        // 'id' => Classfications tables htae mhar shi tae 'id' 
    }
    
}
