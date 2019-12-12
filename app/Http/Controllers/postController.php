<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Auth;
use Illuminate\Http\Request;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('user_id', Auth::user()->id)->get();
        return view('posts.index', array('posts'=>$posts));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Category::all();
        return view('posts.createPost', array('categorias'=>$categorias));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validacion datos
        /*$request->validate([
            'title'=>'string|required|min:3|max:50',
            'excerpt'=>'string|required|min:6|max:50',
            'body'=>'string|required|min:1|max:255',
            'img'=> 'required|file|image',
            'category'=>'required|numeric'
        ]);*/

        $data = new Post;

        //pillar los datos del input

        $data->title= $request->input('title');
        $data->excerpt= $request->input('excerpt');
        $data->body= $request->input('body');
        $data->image = $request->file('img');
        $data->category_id = $request->get('category');
        $data->user_id = Auth::user()->id;

        $data->save();

        $posts = Post::where('user_id', Auth::user()->id)->get();
        return redirect(route('post.index', array('posts'=>$posts)));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
