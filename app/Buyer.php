<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Diary;
use App\Eraser;
use App\Pen;


class Buyer extends Model
{
    public function diaries()
    {
        return $this->hasMany('App\Diary');
    }
    public function erasers()
    {
        return $this->hasMany('App\Eraser');
    }
    public function pens()
    {
        return $this->hasMany('App\Pen');
    }


}
