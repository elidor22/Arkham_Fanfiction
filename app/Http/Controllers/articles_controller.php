<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Auth;

class articles_controller extends Controller
{
    public function index()
    {
        return Article::all();
    }
 
    public function show()
    {
        return Article::where('user_id', auth()->user()->id)->get();
    }

    public function store(Request $request)
    {  
        $user_id =Auth::user()->id;
        $article = new Article([
        'user_id' => $user_id,
        'title' => $request->title,
        'article' => $request->article,
      ]);
      
      $article->save();

      ddd($article);
      return $article;
    }

    public function update(Request $request, $user_id)
    {
        $article = Article::findOrFail($user_id);
        $article->update($request->all());
        return $article;
        
    }

    public function delete(Request $request)
    {
        $user_id = Auth::user();
        $article = Article::where('user_id',$user_id)->first();
        $article->delete();

        return 204;
    }
}

