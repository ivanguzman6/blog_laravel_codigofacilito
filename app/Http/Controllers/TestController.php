<?php

namespace App\Http\Controllers;
use App\Article;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function view($id)
    {
        $article = Article::find($id);

        $article->category;
        $article->user;
        $article->tags;

        return view('test.index',['article'=>$article]);
    }
}
