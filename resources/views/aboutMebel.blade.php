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
  
        <h5> <strong> About Us </strong>
        </h5>
    </div>
    </div>



   <!-- Start Why Choose Us Section -->
   <div class="why-choose-section">
    <div class="container">
      <div class="row justify-content-between">


     
        <div class="col-lg-6">
          <h5 class="section-title">Tentang Kami</h5>
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



        
        
         
               <!-- Start We Help Section -->
               <div class="we-help-section">
                <div class="container">
                    <div class="text mt-5">

                        <div class="card-body text-black" style="text-align:center">
                    
                          <h5> <strong> Syarat Dan Ketentuan </strong>
                          </h5>
                      </div>
                      </div>
                  <div class="row justify-content-between">
                   
                   
                    
                    <div class="col-lg-6 mb-5 mb-lg-0 mt-5">
                      <div class="imgs-grid">
                        <div class="grid grid-1"><img src="images/img-grid-1.jpg" alt="Untree.co"></div>
                        <div class="grid grid-2"><img src="images/img-grid-2.jpg" alt="Untree.co"></div>
                        <div class="grid grid-3"><img src="images/img-grid-3.jpg" alt="Untree.co"></div>
                      </div>
                    </div>

                    <div class="col-lg-5 ps-lg-5">
                      <h2 class="section-title mb-2 mt-5"></h2>
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
                    <div class="text mt-5">

                        <div class="card-body text-black" style="text-align:center">
                    
                          <h5> <strong> Kebijakan dan Privasi </strong>
                          </h5>
                      </div>
                      </div>
                   
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

            
        </div>



      </div>
    </div>
    </div>
    <!-- End Why Choose Us Section -->
















 

    






  
		{{-- <!-- Start Contact Form -->
		<div class="untree_co-section">
      <div class="container">

        <div class="block">
          <div class="row justify-content-center">


            <div class="col-md-8 col-lg-8 pb-4">


              <div class="row mb-5">
                <div class="col-lg-4">
                  <div  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                    <div class="service-icon color-1 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                      </svg>
                    </div> <!-- /.icon -->
                    <div class="service-contents">
                      <p>43 Raymouth Rd. Baltemoer, London 3910</p>
                    </div> <!-- /.service-contents-->
                  </div> <!-- /.service -->
                </div>

                <div class="col-lg-4">
                  <div  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                    <div class="service-icon color-1 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                      </svg>
                    </div> <!-- /.icon -->
                    <div class="service-contents">
                      <p>info@yourdomain.com</p>
                    </div> <!-- /.service-contents-->
                  </div> <!-- /.service -->
                </div>

                <div class="col-lg-4">
                  <div  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                    <div class="service-icon color-1 mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                      </svg>
                    </div> <!-- /.icon -->
                    <div class="service-contents">
                      <p>+1 294 3925 3939</p>
                    </div> <!-- /.service-contents-->
                  </div> <!-- /.service -->
                </div>
              </div>

              <form>
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label class="text-black" for="fname">First name</label>
                      <input type="text" class="form-control" id="fname">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label class="text-black" for="lname">Last name</label>
                      <input type="text" class="form-control" id="lname">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="text-black" for="email">Email address</label>
                  <input type="email" class="form-control" id="email">
                </div>

                <div class="form-group mb-5">
                  <label class="text-black" for="message">Message</label>
                  <textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
                </div>

                <button type="submit" class="btn btn-primary-hover-outline">Send Message</button>
              </form>

            </div>

          </div>

        </div>

      </div>


    </div>
  </div>

  <!-- End Contact Form --> --}}

  @endsection