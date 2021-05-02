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
        return redirect('users')->with('status', 'Se ha creado un usuario correctamente :).');

    }
    public function show($id){
        //
        $user = User::find($id);
        return view('user.show', compact('user'));
    }
    public function destroy($id){
        //delete from users where id=?
        $user = User::find($id)-> delete();
        return redirect('users')->with('status','Se ha eliminado el registro :(');
    }
    public function edit($id){
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }
    public function update(Request $request, $id){
        $user = User::find($id)->update($request->all());
        return redirect('users')->with('status','Se ha actualizado correctamente un usuario :]');
    }
}
