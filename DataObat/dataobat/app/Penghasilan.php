<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Penghasilan extends Model
{
	//use SoftDeletes;

    protected $table = "penghasilan";

    protected $fillable = [
        'id','date','jumlah','deleted',
    ];

    //protected $dates =['deleted'];
}
