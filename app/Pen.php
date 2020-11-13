<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Buyer;


class Pen extends Model
{
    protected $table = 'pen_taken';

    public function buyer()
    {
        return $this->belongsToMany('App\Buyer');
    }
}
