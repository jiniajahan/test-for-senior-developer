<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Buyer;

class Diary extends Model
{
    protected $table = 'diary_taken';

    public function buyer()
    {
        return $this->belongsToMany('App\Buyer');
    }
}
