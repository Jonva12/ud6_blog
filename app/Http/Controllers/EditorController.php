<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function __construct(){
    	$this->middleware('checkRol:editor');
    }
    
    public function index(){
    	return "Soy Editor";
    }
}
