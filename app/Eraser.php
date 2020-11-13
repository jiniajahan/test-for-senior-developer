<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Buyer;


class Eraser extends Model
{
    protected $table = 'eraser_taken';

    public function buyer()
    {
        return $this->belongsToMany('App\Buyer');
    }
}
