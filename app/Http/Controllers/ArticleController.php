<?php

namespace App\Http\Controllers;
use App\Models\Article;
//use Illuminat\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests\ArticlePostRequest;


class ArticleController extends Controller
{
    public function Articlelist()
    {
         
        $articles = Article::all(); 
   
      
        return view('articles.list',['articles'=>$articles]);
    }

  
    public function createArticle()
    {
        return view('articles.create');
    }

    public function saveArticle(ArticlePostRequest $request)
    {
        $article = new Article;
        $article -> name = $request -> name;
        $article -> details = $request -> details;
        $article -> slug = $request -> slug;
        $article -> is_used = $request -> is_used;
        $article -> category_id = $request -> category_id;
        
        $article->save();            

        return redirect()->route('articles.list');
       
    }


    public function deleteArticle($id)
    {
        $article = Article::find($id);
        if($article)
        {
            $article -> delete();
        }

        return redirect()->route('articles.list');

    }

    public function showArticle($id)
    {

       // $articals = Artical::where('category_id','=', $id)->get(); 
      //  return view('articles.list',['articals'=>$articals])


  
        $article= Article::find($id);
        
        return view('articles.show', ['article'=>$article]);

       
        
    }

    public function editArticle($id)
    {
        $article = Article::find($id);

        return view('articles.edit', ['article' => $article]);
    }
    public function saveEditArticle(ArticlePostRequest $request, $id)
    {
        $article = Article::find($id);
        $article -> name = $request -> name;
        $article -> details = $request -> details;
        $article -> slug = $request -> slug;
        $article -> is_used = $request -> is_used;
        $article -> category_id = $request -> category_id;

        $article->save();            

        return redirect()->route('articles.list');
        

    }
    public function ArticleTable()
    {
         
        $articles = Article::all(); 
   
      
        return view('dashboard.pages.data',['articles'=>$articles]);
    }

   


}
