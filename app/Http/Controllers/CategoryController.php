<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryPostRequest;

//use Illuminat\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class CategoryController extends Controller
{
    public function list()
    {
         
        $categories = Category::all(); 
        $cat = Category::find(1);
      
        return view('category.list',['categories'=>$categories ]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function save(CategoryPostRequest $request)
    {
        $category = new Category;
        $category -> name = $request -> name;
        $category -> description = $request -> description;
        $category->save();            
  

        return redirect()->route('categories.list');
       
    }

    public function delete($id)
    {
        $category = Category::find($id);
        if($category)
        {
            $category -> delete();
        }

        return redirect()->route('categories.list');

    }

    public function show($id)
    {

       // $articals = Artical::where('category_id','=', $id)->get(); 
      //  return view('articles.list',['articals'=>$articals])


      $articles = Article::all();
        $category = Category::find($id);
        
        return view('category.show', ['category' => $category, 'articles'=>$articles]);

       
        
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('category.edit', ['category' => $category]);
    }
    public function saveEdit(CategoryPostRequest $request, $id)
    {
        $category = Category::find($id);
        $category -> name = $request -> name;
        $category -> description = $request -> description;
        $category->save();            

        return redirect()->route('categories.list');
        

    }






}
