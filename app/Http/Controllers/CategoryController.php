<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return $id;
        // return $cat;
        return view('category.index',compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all()->sortbyDesc('created_at');
        return view('category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'cat_name'=>'required|max:255',
        ]);

        $cat = $request->all();
        $cat['user_id'] = Auth::user()->id;

        Category::create($cat);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // return $category;
        return view('category.index',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
