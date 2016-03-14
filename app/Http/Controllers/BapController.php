<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Post;
use App\Models\User;
=======
use Illuminate\Foundation\Auth\User;
>>>>>>> 8bf4bd44c1ea24320aa249961db710525420d893
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\BapModel;

class BapController extends Controller
{

    public function __construct()
    {
        // Le middleware de l'admin est actif sur toutes les actions
        $this->middleware('admin', ['except'=>['create', 'edit']]);

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
        $bap = Bapmodel::find($id);
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
        $bap   = BapModel::find($id);
        $users  = User::all()->lists('name', 'id')  ;
        return view('bap.edit')->with(compact('bap', 'users'));
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
