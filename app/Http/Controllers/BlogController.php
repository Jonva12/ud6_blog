<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class BlogController extends Controller
{
    public function index(){
    	$posts = Post::latest('published_at')->get();
    	$categorias = Category::all();
    	return view('welcome', compact('posts','categorias'));
    }
}
