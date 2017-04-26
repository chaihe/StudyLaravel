<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $nameArr = [];
        $nameArr['first'] = 'chai';
        $nameArr['last'] = 'zhi';

        return view('user.chai',$nameArr)->with('age',123);
    }
}
