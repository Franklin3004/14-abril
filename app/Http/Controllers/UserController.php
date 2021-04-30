<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        //select * from users
        //$users = User::all();
        $users = User:: orderBy('id','desc')-> paginate(8);
        return view('User.index', compact('users'));
    }

    //formulario view html
    public function create()
    {
        return view('user.create');
    }

    //true, false
    public function store(Request $request)
    {
        //INSERT INTO usuarios () VALUES()
        $user = User::create($request->all());
        return redirect('users');

    }
    public function show($id){
        //
        $user = User::find($id);
        return view('user.show', compact('user'));
    }
}
