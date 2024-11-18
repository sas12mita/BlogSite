<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ArticleController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //$articles = Article::where('user_id', Auth::id())->get(); 
        $articles = Article::where('user_id', Auth::id())->with('category')->get();
        return view('articles.index', compact('articles'));
    }
    public function welcome(Request $request)
    {
        $articles = Article::with('category')->get();
        return view('welcome', compact('articles'));
    }
    /**
     * Display the specified resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('articles.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $article = new Article();
        $article->title = $request->title;
        $article->content = $request->content;
        $article->category_id = $request->category_id;
        $article->user_id = Auth::id(); // Assuming the user is logged in
        $article->save();
        return redirect()->route('articles.index')->with('success', 'Article created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
  

    /**
     * Update the specified resource in storage.
     */
 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $user = Article::find($id);
        $user->delete();
        return redirect()->route('articles.index');
    }
}
