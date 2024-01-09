

@extends('layouts.main')

@section('container')
<h6 class="col-md-8 font-weight-bold"> 

  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8'  height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">

      <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
    </ol>
  </nav>
  
  </h6>
  
  @include('partials.carousel')


  <div class="text mt-5">

    <div class="card-body text-black" style="text-align:center">

      <h5> <strong> Cari Produk</strong> Berdasarkan <strong>Ketegori</strong>

      </h5>
  </div>
  </div>

     <div class="container">
        <div class="row mb-5 mt-2">
            @foreach( $categories as $category)

            <div class="col mb-5 ">
              <a href="/categories/{{ $category->slug }}" style="text-decoration:none; text-align:center ">
              <div class="card m-auto" style="width: 10rem; border:0ch">
                <img src="{{ asset('storage/'. $category->image ) }}" class="card-img-top" alt="{{ $category->name }}" style="border-radius:20px;">
                <div class="card-body">
                  <h6 class="card-text ">{{ $category->name }}</h6>
                </div>
              </div>

               
            </a>
            </div>
            @endforeach
        </div>
     </div>


     <div class="text mt-5">

      <div class="card-body text-black" style="text-align:center">
  
        <h5> <strong> Jelajahi</strong>  Produk Kami <br>
          Untuk Melengkapi Keindahan  <strong>Rumah Anda</strong>
  
        </h5>
    </div>
    </div>



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

       







@endsection
   
