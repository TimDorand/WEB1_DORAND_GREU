<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{

        public function __construct()
        {
            //Admin à tous les droits, il peut tout voir
//            $this->middleware('admin')->except('index', 'edit');
        }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.index')->with(compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all()->lists('name', 'username', 'type',
            'descriptif', 'context', 'objectif', 'contrainte');

        return view('user.create')->with(compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->id  = Auth::user()->id;

        $user->id            = $request->id;
        $user->name          = $request->name;
        $user->admin          = $request->admin;
        $user->email          = $request->email;
        $user->password          = $request->password;
        $user->save();

        return redirect()
            ->route('user.show', $user->id)
            ->with(compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('user.show')->with(compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user   = User::find($id);
        $users  = User::all()->lists('name', 'id')  ;
        return view('user.edit')->with(compact('user', 'users'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        Edition du profil, possibilité de mettre à jour le mot de passe, cripté par bcrypt
        $user = User::find($id);
        $user->name          = $request->name;
        $user->admin          = $request->admin;
        $user->email          = $request->email;
        $user->password       = bcrypt($request->password);
        $user->save();
        return redirect()->route('user.show', $user->id);
    }

    public function updatePassword(Request $request, $id)
    {
        $rules = [
            'mypassword' => 'required',
            'password' => 'required|confirmed|min:6|max:18'
        ];

        $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()){
        return redirect('user/password')->withErrors($validator);
        }else{
            if (Hash::check($request->mypassword, Auth::user()->password)){
                $user = new User();
                $user->where('email','=',Auth::user()->email)
                    ->update(['password'=>bcrypt($request->password)]);
                return redirect('user')->with('status','Mot de pass changé !');
            }else{
                 return redirect('user/password')->with('message','Incorrects');
            }
        }


        $user = User::findOrFail($id);

        // Validate the new password length...

        $user->fill([
            'password' => Hash::make($request->newPassword)
        ])->save();
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
