<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleRequest;
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
        $articles = Articles::latest()->published()->get();
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
//        dd($article->published_at->diffForHumans());  几秒前
        return view("articles.showContent",compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(CreateArticleRequest $request)
    {
//        dd($request->all());

        //获取某一个值
//        dd($request->get('title'));

        //添加验证条件
//        this->validate($request,['title'=>'required','contend'=>'required']);

        $input = $request->all();
//        $input['published_at']=Carbon::now();
        Articles::create($input);

        return redirect('/articles');
    }

    public function edit($id)
    {
        $article = Articles::findOrFail($id);
        return view('articles.edit',compact('article'));
    }

    public function update(CreateArticleRequest $request, $id)
    {
        $article = Articles::findOrFail($id);
        $article->update($request->all());

        return redirect('/articles');
    }

}
