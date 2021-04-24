<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index(){
        //select * from users
        //$users = User::all();
        $users = User::paginate(5);
        return view('User.index', compact('users'));
    }
}
