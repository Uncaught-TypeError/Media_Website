<?php

namespace App\Http\Controllers;

use App\Models\SubComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubCommentController extends Controller
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
    public function store3(Request $request, string $id)
    {
        // return $id;
        $request->validate([
            'sub_comm'=>'required',
        ]);
        $subcmt= $request->all();
        $subcmt['user_id'] = Auth::user()->id; 
        $subcmt['comment_id'] = $id;

        // return $cmt;

        SubComment::create($subcmt);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(SubComment $subComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubComment $subComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubCommentRequest $request, SubComment $subComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubComment $subComment)
    {
        //
    }
}
