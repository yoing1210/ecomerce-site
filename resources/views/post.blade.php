@extends('layouts/main')

@section('container')
<div class="ss">
  <h6 class="col-md-8 font-weight-bold"> 

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8'  height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/produk ">Produk</a></li>
        <li class="breadcrumb-item"><a href="/categories/{{ $post->category->slug }} ">{{ $post->category->slug }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
      </ol>
    </nav>
    
    </h6>
</div>









<main class="containers">
  
  <!-- Left Column / Headphones Image -->
  <div class="left-column">
    
    <div class="fixed-element">
    <div class="prod">
      <img data-image="black" src=" {{ asset('post_images/'.$post->image[0]->gambar) }} " alt="">
      <img data-image="blue" src="{{ asset('post_images/'.$post->image[1]->gambar) }}" alt="">
      <img data-image="red" class="active" src="{{ asset('post_images/'.$post->image[2]->gambar) }}" alt="{{ $post->category->name }}">
    </div>
      <!-- Product Description -->
      <div class="product-description">
        <span> <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none"> {{ $post->category->name }} </a> </span>
        <h1>{{ $post->title }}</h1>
      </div>
    </div>
  </div>


  <!-- Right Column -->
  <div class="right-column mt-5 mb-5">
    <form action="{{ url('posts') }}/{{ $post->slug }}" method="post">
    <!-- Product Configuration -->
    <div class="product-configuration">
      <!-- Product Color -->
      <div class="product-color text-center">
        <h4> <strong>Pilih</strong>  Warna Favoritmu</h4>
        <div class="color-choose col-md-12 ">
          <div class="choose px-3 pt-2 me-3 border border-2 border-dark-subtle rounded-3">
            <input data-image="red" type="radio" id="red" name="color" value="Putih" checked>
            <label for="red"><span></span></label>
            <p class="fst-italic mt-2 "><strong>Putih</strong></p>
          </div>
          <div class="choose px-3 pt-2 me-3 border border-2 border-dark-subtle text-center rounded-3">
            <input data-image="blue" type="radio" id="blue" name="color" value="Cokelat">
            <label for="blue"><span></span></label>
            <p class="fst-italic mt-2 "><strong>Cokelat</strong></p>
             
          </div>
          <div class="choose px-3 pt-2 border border-2 border-dark-subtle rounded-3">
            <input data-image="black" type="radio" id="black" name="color" value="Hitam">
            <label for="black"><span></span></label>
            <p class="fst-italic mt-2 "><strong>Hitam</strong></p>
          </div>
        </div>
      </div>
      </div>


      <!-- Cable Configuration -->
      {{-- <div class="cable-config">
        <h4> Pilih Partisi </h4>

        <div class="cable-choose">
          <button>Straight</button>
          <button>Coiled</button>
          <button>Long-coiled</button>
        </div>
      </div> --}}

    <div class="row my-1" >
       {{-- jumlah pesan --}}
    <div class="jumlah-pesan col-5 col-md-3 text-center">
        @csrf
      <label for="jumlah_pesan" class="form-label"><strong>Jumlah</strong></label>
      <input type="Text" class="form-control-sm mb-4 border border-secondary-emphasis border-2" style="--bs-border-opacity: .1;   width:100%; " placeholder="Stock: {{ $post->stock }}" name="jumlah_pesan" required >
          @error('jumlah_pesan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
          
    </div>


    {{-- Tinggalkan Pesan --}}
    <div class="Pesan col-5 col-md-7 text-center">
      
      @csrf
        <label for="pesan" class="form-label  "> <strong>Pesan</strong></label>
        <input type="Text" class="form-control-sm mb-4 border border-secondary-emphasis border-2 " style="--bs-border-opacity: .1;   width:90% " placeholder="Tinggalkan Pesan" name="pesan" required >
            @error('pesan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
           
    </div>
    </div>
    
    

 <!-- Product Pricing -->
          <div class="product-price mb-3 px-5">
         
            <h4> Harga : <strong>@currency($post->price)</strong></h4>

          </div>  
          
          <button type="submit" id= "cart" class="btn btn-primary "  style="border-radius: 10px; width:80%"> Masukkan Keranjang <i class="bi bi-cart2 fa-sm " ></i></button>
  </form>

    <div class="deskripsi">
      <h5>Informasi Produk</h5>
      <p>{!! $post->body !!}</p>
      </div>
    

    </div>


   


   
  </div>
</main>



{{-- <div class="container">
  <div class="row justify-content-center mb-5">
      <div class="col-md-8">
      <h1 class="mb-3">{{ $post->title }}</h1>

    
    <p> <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none"> {{ $post->category->name }} </a> </p>
      <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" 
      class="img-fluid">

      
      <article class="my-3 fs-5">
          {!! $post->body !!} 
      </article>

      <a href="/posts" class="d-block mt-3">Back to post</a>
  </div>
  </div>
</div> --}}




@endsection