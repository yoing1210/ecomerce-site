@extends('dashboard.layouts.main') 

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-md-8">
        <h1 class="mb-3">{{ $post->title }}</h1>

       {{-- By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">  {{ $post->author->name }}</a> in  --}}
      {{-- tag p di sebelah kanan awalnya ada diatas sebelum author  --}}

      {{-- <p> <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none"> {{ $post->category->name }} </a> </p> --}}


        <a href="" class="btn btn-success"> <span data-feather="arrow-left"></span>Back To my post</a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"> <span data-feather="edit"></span>Edit</a>
        
        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger " onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"> Delete </span></button>
          </form>
        <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}"
        class="img-fluid mt-3">

        
        <article class="my-3 fs-5">
            {!! $post->body !!} 
        </article>
        
        <a href="/posts" class="d-block mt-3">Back to post</a>
    </div>
    </div>
</div>

@endsection