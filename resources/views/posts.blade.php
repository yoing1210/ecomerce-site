@extends('layouts/main')
  
@section('container')
     
     <div class="row">
        <form action="/posts">
          <div class="input-group mb-5">
            <h6 class="col-md-8 font-weight-bold"> 

              <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8'  height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/produk">Produk</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                </ol>
              </nav>
              
              </h6>
           
          </div>
        </form>
      </div>

      

     {{-- 
     <div class="card mb-3">
         <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
         <div class="card-body text-center"> --}}

            {{-- untuk mengambil title dan excerpt ke card --}}

           {{-- <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
           <p>
            <small class="text-muted"> --}}

                {{-- By : <a href="/authors/{{ $posts[0]->author->username }}"class="text-decoration-none">{{ $posts[0]->author->name }}</a> in  --}}

                {{-- <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none"> {{ $posts[0]->category->name }} </a>
                <a>{{ $posts[0]->created_at->diffForHumans() }}</a>  
            </small>
            </p>

           <p class="card-text">{{ $posts[0]->excerpt}}</p>

           <a href="/posts/{{ $posts[0]->slug }} "class="text-decoration-none btn btn-warning">Read More</a>
          

         </div>
       </div> --}}
    
       @if ($posts->count())
     <div class="container">
        <div class="row">
             @foreach ($posts->skip(0) as $post)
             <div class="col-12 col-md-4 col-lg-3 mb-5">
              {{-- <div class="position-absolute bg-danger px-3 py-2  rounded-5" style="background-color:rgba(0, 0, 0, 0.4)">
                <a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none "> {{ $post->category->name }}</a></div> --}}
              <a class="product-item" style="text-decoration:none" href="/posts/{{ $post->slug }}">
                <img src="{{ asset('post_images/'. $post->image[1]->gambar) }}" alt="{{ $post->category->name }}" class="img-fluid product-thumbnail">
                <h3 class="product-title">{{ $post->title }}</h3>
                <h3 class="product-title"><strong >@currency($post->price)</strong></h3>
            
              </a>
            </div>
            @endforeach
        </div>
        
    </div>  
       

    @else
    <p class="text-center fs-4"> Tidak ada produk ditemukan</p>
  @endif
  
@endsection
   
