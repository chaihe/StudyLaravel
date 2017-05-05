<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    //
    public function index()
    {
//        $name = DB::select('select * from articles');
        $name = \App\Models\Articles::orderBy('id', 'desc')->get();

//        dd($name);

        foreach ($name as $item) {
//            $item->
            echo json_encode($item);
        }

//        dd($name->first());
        dd($name);



//        echo json_encode($name->toArray());
        exit;
    }
}
