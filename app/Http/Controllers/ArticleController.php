<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Routing\Controller as BaseController;

class ArticleController extends Controller
{
    /**
     * Display a listing of articles.
     *
     * @return \Illuminate\Contracts\View\View
     */
  

    public function index()
{
    $articles = Article::all();
    //$users = Auth::user(); // Retrieve the authenticated user
    //$users = users::all(); 

    //return view('articles.index', compact('articles', 'users'));
    
    return view('articles.index', compact('articles'));
}




    public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'article_title' => 'required|max:255',
        'article' => 'required',
    ]);

    // Create a new article record
    $article = new Article;
    $article->article_title = $validatedData['article_title'];
    $article->article = $validatedData['article'];
    $article->email = Auth::user()->email;
    $article->user_name = Auth::user()->name; // Assuming you have a user_id column in the articles table
    $article->save();

    // Redirect the user after the article is saved
    return redirect('/articles')->with('success', 'Article saved successfully.');
    //return redirect()->route('articles1')->with('success', 'Article saved successfully.');

}


public function create(){

   return view('articles.create');
    //return view('auth.register');
}


public function article_show(){

    return view('article_show');
     //return view('auth.register');
 }


}
