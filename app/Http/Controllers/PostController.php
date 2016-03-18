<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index')->with(compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$post = new Post;
        $post->title = 'Un autre article';
        $post->description = 'Une autre description';
        $post->save();
        return 'Formulaire';*/

        $users = User::all()->lists('name', 'id');

        return view('posts.create')->with(compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;

        $post->user_id  = Auth::user()->id;
        $post->title    = $request->title;
        $post->content  = $request->content;

        $post->save();

        return redirect()
            ->route('posts.show', $post->id)
            ->with(compact('post'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $post = Post::find($id);
//            $post = Post::where('id','=',$id)->get()->first();
            $users = User::find($id);

            $comments = $post->comments;
            return view('posts.show')->with(compact('post','comments','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*return view('articles.edit')->with(compact($id));*/
        $post   = Post::find($id);
        $users  = User::all()->lists('name', 'id')  ;

        return view('posts.edit')->with(compact('post', 'users'));
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
        $post = Post::find($id);

        $post->title   = $request->title;
        $post->content = $request->content;
        /*$post->user_id = $request->user_id;*/

        $post->save();

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();


        return redirect()->route('posts.index');
    }
}
