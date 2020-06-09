<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('welcome', compact('user'));
    }

    public function getUsers()
    {
        $users = User::all();

        return view('hr.users.index', compact('users'));
    }

    public function grantAdmin($id)
    {
         
        $user = User::where('id', $id)->first();
        $user->admin = 1;
        $user->save();
        return redirect()->back();

    }

    public function revokAdmin($id)
    {
        $user = User::where('id', $id)->first();
        $user->admin = 0;
        $user->save();
        return redirect()->back();
    }


    public function userEdit($id)
    {
        $user = User::where('id', $id)->first();

        return view('hr.users.edit', compact('user'));
    }

    public function usersUpdate (request $request, $id)
    {
       
        $user = User::where('id', $id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->position = $request->position;
        $user->province = $request->province;
 
        if($request->password !== null)
         {
            $user->password = bcrypt($request->password);
         }

         $user->save();

         return redirect()->route('getUsers');

    }


    public function userDelete($id)

    {
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect()->back();
    }

    public function addUser()
    {
          if (Auth::user()->admin = 0) {
            return redirect()->back();
        }

        return view('hr.users.addNew');
    }

    public function storeUser(request $request)
    {

        if (Auth::user()->admin = 0) {
            return redirect()->back();
        }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->position = $request->position;
        $user->province = $request->province;
 
        if($request->password !== null)
         {
            $user->password = bcrypt($request->password);
         }

         $user->save();

         return redirect()->route('getUsers');

    }
}
