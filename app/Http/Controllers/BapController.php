<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\BapModel;

class BapController extends Controller
{

    public function __construct()
    {
        // Le middleware de l'admin est actif sur toutes les actions
        $this->middleware('admin');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baps = Post::all();
        return view('bap.index')->with(compact('baps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $baps = User::all()->lists('id', 'name', 'username', 'type',
            'typeother','descriptif', 'context', 'objectif', 'contrainte');

       return view('bap.create')->with(compact('baps'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $bap = new Post;
        $bap->name          = $request->name;
        $bap->username      = $request->username;
        $bap->type          = $request->type;
        $bap->typeother      = $request->typeother;
        $bap->descriptif      = $request->descriptif;
        $bap->context      = $request->context;
        $bap->objectif      = $request->objectif;
        $bap->contrainte      = $request->contrainte;
        $bap->description   = $request->description;
        $bap->save();

        return redirect()
            ->route('bap.show', $bap->id)
            ->with(compact('bap'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bap = Post::find($id);
        return view('bap.show')->with(compact('bap'));
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
