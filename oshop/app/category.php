<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $primaryKey = 'cateid';

    public  function product(){
        return $this->hasMany('product', 'cateid', 'cateid');
    }
}
