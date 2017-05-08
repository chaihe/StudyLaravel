<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    //
    public function index()
    {
////        $name = DB::select('select * from articles');
//        $name = Articles::orderBy('id', 'desc')->get();
//
////        dd($name);
//
//        foreach ($name as $item) {
////            $item->
//            echo json_encode($item);
//        }
//
////        dd($name->first());
//        dd($name);
//
//
//
////        echo json_encode($name->toArray());
//        exit;

        $articles = Articles::all();
        return view('articles.index',compact('articles'));
    }

    public function show($id)
    {
        //两种判断空数据的方式
//        $article = Articles::find($id);
//        if (is_null($article))
//        {
//            dd($article);
//            abort(404);
//        }
        $article = Articles::findOrFail($id);

        return view("articles.showContent",compact('article'));
    }
}
