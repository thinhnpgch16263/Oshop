<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $primaryKey = 'proid';

    public function category(){
        return $this->hasOne('category', 'cateid', 'cateid');
    }
}
