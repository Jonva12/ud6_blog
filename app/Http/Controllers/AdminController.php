<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class AdminController extends Controller
{
	public function __construct(){
    	$this->middleware('checkRol:admin');
    }

    public function index(){
    	$users = User::all();
    	return view('admin.index', compact('users'));
    }

    public function edit($id){
    	$user = User::find($id);
    	$rol = Role::all();
        return view('admin.edit', compact('user', 'rol'));
    }
    public function update(Request $request, $id){
    	$user = User::where('id', $id)->first();
        $user->rol = $request->get('rol');
        $user->save();
        return redirect(route('admin'));
    }
}
