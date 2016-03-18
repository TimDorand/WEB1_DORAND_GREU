<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\BapModel;
use Illuminate\Support\Facades\Auth;

class BapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baps = Bapmodel::all();
        return view('bap.index')->with(compact('baps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all()->lists('name', 'type',
            'descriptif', 'context', 'objectif', 'contrainte');

       return view('bap.create')->with(compact('users'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Requests\BapProjetRequest $request)
    {
//        Récupération de tout les données de la bdd après la Validation de BapProjetRequest
        $bap = new Bapmodel;

        $bap->user_id       = Auth::user()->id;
        $bap->username      = Auth::user()->name;
        $bap->id            = $request->id;
        $bap->validate      = $request->validate;
        $bap->name          = $request->name;
        $bap->type          = $request->type;
        $bap->typeother     = $request->typeother;
        $bap->descriptif    = $request->descriptif;
        $bap->context       = $request->context;
        $bap->objectif      = $request->objectif;
        $bap->contrainte    = $request->contrainte;
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
        try{

            $bap = BapModel::findOrFail($id);
            return view('bap.show')->with(compact('bap'));


        }catch(\Exception $e){

            return redirect()->route('bap.index')->with(['erreur'=>'Whoooooops']);

        }
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
        return view('bap.edit')->with(compact('bap', 'users'));    }

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
