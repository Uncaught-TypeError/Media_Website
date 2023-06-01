<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store2(Request $request, string $id)
    {
        // return $request;
        $request->validate([
            'user_comm'=>'required',
        ]);

        $cmt= $request->all();
        $cmt['user_id'] = Auth::user()->id; 
        $cmt['post_id'] = $id;

        // return $cmt;

        Comment::create($cmt);
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
