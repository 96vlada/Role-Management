@extends('layouts.app')
@section('content')
<div class="container">
    <div class="justify-content-center">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center"><span>Post</span>
                @can('role-create')
                    <span class="float-right">
                        <a class="btn btn-primary" href="{{ route('posts.index') }}">Back</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">
                <strong class="my-2">Title: </strong>
                <div class="alert alert-light border" role="alert">
                    {{ $post->title }}
                  </div>

                  <strong class="my-2">Body: </strong>
                  <div class="alert alert-light border" role="alert">
                      {{ $post->body }}
                    </div>

                    <strong class="my-2">Images: </strong>
                    <div class="alert alert-light border d-flex gap-3 flex-wrap" role="alert">
                        <img class="border" src="https://static.tehnomanija.rs/UserFiles/products/2017/007/large/125458.webp" alt="" width="100px" height="100px">
                        <img class="border" src="https://static.tehnomanija.rs/UserFiles/products/2017/007/large/125458.webp" alt="" width="100px" height="100px">
                        <img class="border" src="https://static.tehnomanija.rs/UserFiles/products/2017/007/large/125458.webp" alt="" width="100px" height="100px">
                        <img class="border" src="https://static.tehnomanija.rs/UserFiles/products/2017/007/large/125458.webp" alt="" width="100px" height="100px">
                        <img class="border" src="https://static.tehnomanija.rs/UserFiles/products/2017/007/large/125458.webp" alt="" width="100px" height="100px">
                      </div>

                      <strong class="my-2">Categories: </strong>
                      <div class="alert alert-light border" role="alert">
                          Computer,It,Laptop
                        </div>

                    
                
            </div>
        </div>
    </div>
</div>
@endsection