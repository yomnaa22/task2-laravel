<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function Articlelist()
    {
        $articles = Article::all();
        
      return response()->json( $articles);  
      
        

    }
  

    public function store(Request $request)
    {
        //$article = Article::create($request->all());

            $article = new Article;
            $article -> name = $request -> name;
            $article -> details = $request -> details;
            $article -> slug = $request -> slug;
            $article -> is_used = $request -> is_used;
            $article -> category_id = $request -> category_id;
            
            $article->save();            
    
            return response()->json("saved successfully");
           
        
    }

    public function deleteArticle($id)
    {
        $article = Article::find($id);
        if($article)
        {
            $article -> delete();

            return response()->json("deleted");
        }

        return response()->json("delete failed");

    }



    public function showArticle($id)
    {

        $article= Article::find($id);
        
        return response()->json( $article);

        
    }


    public function updateArticle(Request $request, $id)
    {
        $article = Article::find($id);
        $article -> name = $request -> name;
        $article -> details = $request -> details;
        $article -> slug = $request -> slug;
        $article -> is_used = $request -> is_used;
        $article -> category_id = $request -> category_id;

        $article->save();            

       
        return response()->json("saved successfully");
        

    }
}
