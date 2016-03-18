<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();

        return view('comments.index')->with(compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comments = Comment::all()->lists('id','post_id', 'user_id', 'comment');

        return view('comments.create')->with(compact('comments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $comment = new Comment;

        $comment->user_id  = Auth::user()->id;
        $comment->id       = $request->id;
        $comment->comment     = $request->comment;
//        $comment->post_id  = $request->post->id;

        $comment->save();

        return redirect()
            ->route('post.show', $comment->id)
            ->with(compact('comment'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $users = User::find($id);
            $comments = Post::findOrFail($id);
            return view('comments.show')->with(compact('comments','users'));

        }catch(\Exception $e){
            return redirect()->route('comments.index')->with(['erreur' => 'Oopssss']);

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
