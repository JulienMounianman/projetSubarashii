<?php
namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int $id The Id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', ['user' => $user]);
    }


    public function update(Request $request,$id)
    {
        // validation des données
        $this->validate($request, [
            'pseudo' => '|string|max:255',
            'first_name' => '|max:255',
            'last_name' => '|max:255',
           'password' => '|string|min:6|confirmed'

        ]);
        $user = User::findOrFail($id);

        $newData = $request->all();
        $newData['password']=bcrypt($newData['password']);



        if ( $user->update($newData)) {
            Session::flash('message', 'Utilisateur mis à jour');
            return redirect()->route('UserDashboard', ['id' => $id]);
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('UserDashboard', ['id' => $id]);
        }
    }


    public function dashboard($id)
    {
        $user = User::findOrFail($id);
        return view('users.dashboard' ,['user' => $user]);
    }

}