<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
  
    public function index()
    {
        $articles = Article::all();
        return view ('articles.index')->with('articles', $articles);
    }

    
    public function create()
    {
        return view('articles.create');
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        Article::create($input);
        return redirect('articles')->with('flash_message', 'Article Addedd!');
    }

    
    public function show($id)
    {
        $article = Article::find($id);
        return view('articleDetail')->with('article', $article);
    }

    
    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit')->with('article', $article);
    }

  
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $input = $request->all();
        $article->update($input);
        return redirect('articles')->with('flash_message', 'Article Updated!');  
    }

   
    public function destroy($id)
    {
        Article::destroy($id);
        return redirect('articles')->with('flash_message', 'Article deleted!');  
    }
}