<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "post";

    protected $fillable = [
        'id','nama','stok','harga', 'jo','bobot','deleted',
    ];
}
