<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Auth;

class articles_controller extends Controller
{

    public function index()
    {
        return Article::all();
    }
 
    public function show()
    {
        return Article::where('user_id', auth()->user()->id)->get();
        Session::save();
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

      /* dd(
        auth()->id() ?? '?',
        Auth::id() ?? '?',
        $request->user()->id ?? '?',
        auth()->check(),
        get_class(auth()->guard())
    ); */
      return $article;
    }

    public function update(Request $request)
    {
        $article = $request->validate([
            'title' => 'required|string',
            'article'=>'required|string',
        ]);
        $title=$request->title;

        //Find if the conditions are met then updates the information
        Article::where('user_id', auth()->user()->id)->where('title', $title)
        ->update($article);
       // $article->update($article);
        return $article;
        
    }

    public function delete(Request $request)
    {
        $user_id =Auth::user()->id;
        $title = $request->title;
        $article = Article::where('user_id', $user_id)
        ->where('title', $title);
        $article->delete($article);

        return 204;
    }
}

