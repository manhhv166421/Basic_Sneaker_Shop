<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //use HasFactory;
    protected $table = "bill";

    public function bill_detail()
    {
    	return $this->hasMany('App\BillDetail','id_bill','id');
    }
}
