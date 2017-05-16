<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Carbon\Carbon;
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

//        $a = collect([
//            ['a' => 1],
//            ['b' => 2],
//
//        ]);
//
//        dd($a, $a->where('a', 1));
//
//        $articles = Articles::all();
//        dd($articles, $articles->where('id', 1)->first());
        //文章倒序
        $articles = Articles::latest()->get();
        $articles->toJson();
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

    public function create()
    {
        return view('articles.create');
    }

    public function save(Request $request)
    {
//        dd($request->all());

        //获取某一个值
//        dd($request->get('title'));

        $input = $request->all();
//        $input['published_at']=Carbon::now();
        Articles::create($input);

        return redirect('/articles');
    }

}
