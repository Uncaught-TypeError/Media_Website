<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $posts = Post::query()->orderBy('created_at','desc')->paginate(6)->withQueryString();
        $viewposts = Post::all()->sortByDesc('created_at');
        Paginator::useBootstrap();
        $category = Category::query()->orderBy('created_at','desc')->paginate(9)->withQueryString();
        // $posts = Post::find()->sortbyDesc('created_at');
        return view('home', compact('posts','viewposts','category'));
    }

    public function show(post $post){
        // return $post;
        return view('posts.show', compact('post'));
    }

    public function store(Request $request){
        // return $request;
        $request->validate([
            'title'=>'required|max:255',
            'description'=>'required',
            'category_id'=>'required',
        ]);

        $view = $request->all();
        $view['user_id'] = Auth::user()->id;

        Post::create($view);
        return redirect()->route('home');
    }

    public function create(){
        $categories = Category::all()->sortbyDesc('created_at');
        return view('posts.create',compact('categories'));
    }

}
