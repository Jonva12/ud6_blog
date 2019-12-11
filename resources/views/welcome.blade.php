@extends('layouts.app2')


  @section('content')
  <!-- Page Content -->
  <div class="container">
    @foreach($posts as $post)
    <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-8">
        <!-- Title -->
        <h1 class="mt-4">{{$post->title}}</h1>
        <!-- Author -->
        <p class="lead">
          by
          <a href="#">{{$post->user_id}}</a>
        </p>
        <hr>
        <!-- Date/Time -->
        <p>{{$post->published_at}}</p>
        <hr>
        <!-- Preview Image -->
        @isset($post->image)
        <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">
        <hr>
        @endisset
        <!-- Post Content -->
        <p class="lead">{{$post->excerpt}}</p>
        <blockquote class="blockquote">
          <p class="mb-0">blockquote ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Someone famous in
            <cite title="Source Title">Source Title</cite>
          </footer>
        </blockquote>
        <p>{{$post->body}}</p>
        <hr>
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
        
        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                @foreach($categorias as $c)
                  <li>
                    <a href="#">{{$c->name}}</a>
                  </li>
                @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    @endforeach
    <!-- /.row -->
  </div>
  <!-- /.container -->
  @endsection