<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class articles_controller extends Controller
{
    public function Get_Articles(){
       
        return Articles::all();

    }

    public function store(Request $request){
        $articles = Articles::create([
            'user_id' => $request->user_id,
            'title'=> $request->title,
            'article'=> $request->article
        ]);
        return $articles;
    }

    public function update(Request $request, Articles $articles){
        $data = $request->validate([
            'user_id'=>'required|int',
            'title' => 'required|string',
            'article' => 'required|text',
        ]);
            $articles->update($data);

            return response($articles,201);

    }
}
