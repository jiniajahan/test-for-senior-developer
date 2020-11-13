<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function getSort(){

        return view('Example.index');
    }

    public function getForeach(){

        return view('Example.index');
    }

    public function getFilter(){

        return view('Example.index');
    }

    public function getMap(){

        return view('Example.index');
    }

    public function getReduce(){

        return view('Example.index');
    }

    public function getCallback(){

        return view('Example.callback');
    }
}
