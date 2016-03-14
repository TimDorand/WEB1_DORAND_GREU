<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Http\Requests;
use App\Models\BapModel;

class AdminController extends Controller
{

    public function __construct()
    {
        //Admin à tous les droits, il peut tout voir
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baps = Bapmodel::all();
        return view('admin.index')->with(compact('baps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $baps = Bapmodel::all()->lists('name', 'username', 'type',
            'descriptif', 'context', 'objectif', 'contrainte');

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
        $bap = new Bapmodel;
        $bap->id            = $request->id;
        $bap->validate      = $request->validate;
        $bap->name          = $request->name;
        $bap->username      = $request->username;
        $bap->type          = $request->type;
        $bap->typeother     = $request->typeother;
        $bap->descriptif    = $request->descriptif;
        $bap->context       = $request->context;
        $bap->objectif      = $request->objectif;
        $bap->contrainte    = $request->contrainte;
        $bap->save();

        return redirect()
            ->route('admin.show', $bap->id)
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
        $bap = Bapmodel::find($id);
        return view('admin.show')->with(compact('bap'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bap   = BapModel::find($id);
        $users  = User::all()->lists('name', 'id')  ;
        return view('admin.edit')->with(compact('bap', 'users'));
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
        $bap = BapModel::find($id);
        $bap->validate      = $request->validate;
        $bap->name          = $request->name;
        $bap->username      = $request->username;
        $bap->type          = $request->type;
        $bap->typeother     = $request->typeother;
        $bap->descriptif    = $request->descriptif;
        $bap->context       = $request->context;
        $bap->objectif      = $request->objectif;
        $bap->contrainte    = $request->contrainte;
        $bap->descriptif     = $request->descriptif;
//        $bap->user_id = $request->user_id;
        $bap->save();
        return redirect()->route('bap.show', $bap->id);
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
