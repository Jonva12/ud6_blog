<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
	public function __construct(){
    	$this->middleware('checkRol:admin');
    }

    public function index(){
    	$users = User::all();
    	return view('admin/index', array('users'=>$users));
    }
}
