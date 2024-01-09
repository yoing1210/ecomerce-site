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
  
        <h5> <strong>  FAQs </strong> Kami Untuk <strong>Anda</strong>
  
        </h5>
    </div>
    </div>



   <!-- Start Why Choose Us Section -->
   <div class="why-choose-section">
    <div class="container">
      <div class="row justify-content-between">


     
        <div class="col-lg-6">
          <h5 class="section-title">Kami Siap Membantu</h5>
          <p>Kami menyediakan layanan unggulan yang bisa anda pesan, tim kami akan membantu menyelesaikan permasalahan keluhan di rumah anda.</p>
    
          <div class="row my-5">
            <div class="col-6 col-md-6">
              <a class="nav-link" href="#item-1">
            
                <div class="feature">
                  <div class="icon">
                    <img src="images/return.svg" alt="Image" class="imf-fluid">
                  </div>
                  <h3>Konsultasi Desain </h3>
                  <p>Konsultasikan desain interior rumah,kantor maupun ruangan anda lainnya kepada desainer kami.</p>
                </div>

              </a>
            </div>
    
            <div class="col-6 col-md-6">
              <a class="nav-link" href="#item-2">
              <div class="feature">
                <div class="icon">
                  <img src="images/truck.svg" alt="Image" class="imf-fluid">
                </div>
                <h3>Pengantaran dan Pemasangan</h3>
                <p>Kami juga memberikan layanan untuk pengantaran maupun pemasangan/instalasi/perakitan furniture anda</p>
              </div>
              </a>
            </div>
    
            <div class="col-6 col-md-6">
              <a class="nav-link" href="#item-3">
              <div class="feature">
                <div class="icon">
                  <img src=" images/support.svg" alt="Image" class="imf-fluid">
                </div>
                <h3>Pick Up Point</h3>
                <p>Titik penjemputan tersedia di berbagai kabupaten kota se-Sulawesi Tenggara.</p>
              </div>
              </a>
            </div>
    
            <div class="col-6 col-md-6">
              <a class="nav-link" href="#item-4 ">
              <div class="feature">
                <div class="icon">
                  <img src="images/bag.svg" alt="Image" class="imf-fluid">
                </div>
                <h3>FAQs</h3>
                <p>Pertanyaan yang sering di tanyakan pelanggan.</p>
              </div>
            </a>
            </div>
    
          </div>
        </div>
    
        <div class="col-lg-5">
          <div class="img-wrap">
            <img src="images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
          </div>
        </div>



        
        <div class="col-12">
          <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
            <div id="item-1">
              <h4></h4>
               <!-- Start We Help Section -->
               <div class="we-help-section">
                <div class="container">
                  <div class="row justify-content-between">
                   
                   
                    
                    <div class="col-lg-6 mb-5 mb-lg-0 mt-5">
                      <div class="imgs-grid">
                        <div class="grid grid-1"><img src="images/img-grid-1.jpg" alt="Untree.co"></div>
                        <div class="grid grid-2"><img src="images/img-grid-2.jpg" alt="Untree.co"></div>
                        <div class="grid grid-3"><img src="images/img-grid-3.jpg" alt="Untree.co"></div>
                      </div>
                    </div>

                    <div class="col-lg-5 ps-lg-5">
                      <h2 class="section-title mb-4 mt-5">Konsultasi Desain</h2>
                      <p>Anda kesulitan dalam menentukan desain ruangan anda? 
                        Anda kebingungan untuk merealisasikan ruangan anda? 
                        
                      </p>
                      <p>
                        <strong> Kami Punya Solusinya !</strong>
                        
                        Hanya dengan Rp 1,8 Juta saja anda bisa mendapatkan pelayanan konsultasi desain interior bersama kami 
                      </p>
                      <p>
                        Tahapan Menggunakan Layanan Ini
                      </p>
                
                      <ul class="list-unstyled custom-list my-4">
                        <li>Hubungi Desainer Kami dan mulai konsultasi</li>
                        <li>Jika dibutuhkan kami akan membantu hingga instalasi selesai</li>

                      </ul>
                      <p>
                      <form action="send" method="post">
                        @csrf
                        <input type="hidden" name="nama">
                        <button class="btn btn-lg btn-primary mt-5 text-center px-3" type="submit" style="border-radius:50px;  padding:5px 5px; ">Hubungi Sekarang</button>
                      </form>
                      </p>
                    </div>
                  </div>
                </div>
                </div>
                <!-- End We Help Section -->
            </div>
         
            <div id="item-2">
              <h4></h4>
              <!-- Start We Help Section -->
              <div class="we-help-section">
                <div class="container">
                  <div class="row justify-content-between">
                   
                    <div class="col-lg-5 ps-lg-5 mt-5">
                      <h2 class="section-title mb-4">Pengantaran dan Pemasangan</h2>
                      <p><strong>Pengantaran Menuju Lokasi Anda</strong></p>
                      <p>Pengantaran menggunakan mobil box yang telah di lakukan standarisasi serta SOP dalam Packagingnya membuat produk pesanan anda aman sampai tujuan</p>
                      <p><strong>Instalasi di Rumah Anda</strong></p>
                      <p>Instalasi dan pemasangan furniture akan di lakukan oleh tim kami jika di butuhkan. Instalasi ini hanya berlaku untuk beberapa produk.</p>
                
                      
                    </div>
                    
                    <div class="col-lg-6 mb-5 mb-lg-0 mt-5">
                      <div class="imgs-grid">
                        <div class="grid grid-1"><img src="images/img-grid-1.jpg" alt="Untree.co"></div>
                        <div class="grid grid-2"><img src="images/img-grid-2.jpg" alt="Untree.co"></div>
                        <div class="grid grid-3"><img src="images/img-grid-3.jpg" alt="Untree.co"></div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
                <!-- End We Help Section -->
            </div>

            <div id="item-3">
              <h4></h4>
               <!-- Start We Help Section -->
               <div class="we-help-section">
                <div class="container">
                  <div class="row justify-content-between">
                   
                   
                    
                    <div class="col-lg-6 mb-5 mb-lg-0 mt-5">
                      <div class="imgs-grid">
                        <div class="grid grid-1"><img src="images/img-grid-1.jpg" alt="Untree.co"></div>
                        <div class="grid grid-2"><img src="images/img-grid-2.jpg" alt="Untree.co"></div>
                        <div class="grid grid-3"><img src="images/img-grid-3.jpg" alt="Untree.co"></div>
                      </div>
                    </div>

                    <div class="col-lg-5 ps-lg-5">
                      <h2 class="section-title mb-4 mt-5">Pick Up Point</h2>
                      <p>Titik penjemputan produk hanya tersedia untuk pengantaran di luar kawasan Kota Kendari. <br>
                        </p>
                        <p>Berikut pelabuhan yang bisa anda cek</p>
                
                      <ul class="list-unstyled custom-list my-4">
                        <li>Pelabuhan Raha</li>
                        <li>Pelabuhan Wanci</li>
                        <li>Pelabuhan Bau-bau</li>
                        <li>Pelabuhan Buton</li>
                      </ul>
             
                    </div>
                  </div>
                </div>
                </div>
                <!-- End We Help Section -->
            </div>


            <div id="item-4">
              <h4></h4>
              <!-- Start We Help Section -->
              <div class="we-help-section">
                <div class="container">
                  <div class="row justify-content-between">
                   
                    <div class="col-lg-5 ps-lg-5 mt-5">
                      <h2 class="section-title mb-4">FAQs</h2>
                      <p>Pertanyaan yang sering diajukan memudahkan kamu menemukan solusi atas permasalahan mengenai furniture maupun dekorasi ruangan yang kamu miliki</p>
                
                      <a href="{{ route("FAQ") }}"> <button class="btn btn-lg btn-primary mt-5 text-center px-5" type="submit" style="border-radius:50px;  padding:5px 5px; ">FAQs</button> </a>
                    </div>
                    
                    <div class="col-lg-6 mb-5 mb-lg-0 mt-5">
                      <div class="imgs-grid">
                        <div class="grid grid-1"><img src="images/img-grid-1.jpg" alt="Untree.co"></div>
                        <div class="grid grid-2"><img src="images/img-grid-2.jpg" alt="Untree.co"></div>
                        <div class="grid grid-3"><img src="images/img-grid-3.jpg" alt="Untree.co"></div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
                <!-- End We Help Section -->
            </div>
            
          </div>
        </div>



      </div>
    </div>
    </div>
    <!-- End Why Choose Us Section -->


  @endsection