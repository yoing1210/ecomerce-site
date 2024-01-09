@extends('layouts/main')

@section('container')
<div class="ss">
  <h6 class="col-md-8 font-weight-bold"> 

    {{-- <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8'  height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/cart ">Cart</a></li>
        <li class="breadcrumb-item"><a href="/editCart/{{ $pesanan_details->post->slug }} ">{{ $pesanan_details->post->slug }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
      </ol>
    </nav>
     --}}
    </h6>
</div>









 <!-- Start Why Choose Us Section -->
 <div class="why-choose-section">
  <form action="{{ url('editCart') }}/{{ $pesanan_detail->id }}" method="post">
  <div class="container">
    <h2 class="section-title text-center mb-5">Edit Pesanan</h2>
    <div class="row justify-content-between ms-5">
      
    <div class="col-lg-5 ">
      

  
      <div class="row ">
      

  
      <div class=" col-md-12 my-3" style="margin-left: 30%;">
        <div class="product-configuration">
          <!-- Product Color -->
          <div class="product-color text-center">
            <h4> <strong>Pilih</strong>  Warna Favoritmu</h4>
            <div class="color-choose ">
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
      </div>
  

      <div class="row ms-5 ps-5 "  >

        {{-- Tinggalkan Pesan --}}
      <div class="Pesan col-5 col-md-7 ms-5 text-center" >
        
        @csrf
          <label for="pesan" class="form-label  "> <strong>Pesan</strong></label>
          <input type="Text" class="form-control-sm mb-4 border border-secondary-emphasis border-2 " style="--bs-border-opacity: .1;   width:90% " placeholder="{{ $pesanan_detail->pesan }}" name="pesan" required >
              @error('pesan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            
      </div>


      <div class="col-5 col-md-3">
        <div class="jumlah-pesan col-5 col-md-12 text-center">
          @csrf
        <label for="jumlah_pesan" class="form-label"><strong>Jumlah</strong></label>
        <input type="Text" class="form-control-sm mb-4 border border-secondary-emphasis border-2" style="--bs-border-opacity: .1;   width:100%; " placeholder="{{ $pesanan_detail->jumlah }}" name="jumlah_pesan" required >
            @error('jumlah_pesan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
            
      </div>
      </div>
    </div>
      </div>
      
    </div>
     <div class="col-6 mt-2 " >
      <div class="left-column">

      <div class="fixed-element">
        <div class="prod ">
          <img data-image="black" src=" {{ asset('post_images/'.$pesanan_detail->post->image[0]->gambar) }} " alt="">
          <img data-image="blue" src="{{ asset('post_images/'.$pesanan_detail->post->image[1]->gambar) }}" alt="">
          <img data-image="red" class="active" src="{{ asset('post_images/'.$pesanan_detail->post->image[2]->gambar) }}" alt="}">
        </div>
              <!-- Product Description -->
              <div class="product-description">
                <span> <a href="/editCard/{{ $pesanan_detail->post->category->slug }}"class="text-decoration-none"> {{ $pesanan_detail->post->category->name }} </a> </span>
                <h4>{{ $pesanan_detail->post->title }}</h4>
              </div>
        </div>
        </div>
      
    </div>
    </div>
  </div>

  
  <button type="submit" id= "cart" class="btn btn-primary "  style="border-radius: 10px; width:20%; margin-left:40%; margin-top:2%"> Simpan </button>
  </form>

  </div>
  <!-- End Why Choose Us Section -->


@endsection