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

<div class="row mb-5 mt-5">

</div>

<!-- Start Product Section -->
<div class="product-section mt-5">
	<div class="container">
		<div class="row">
	
			<!-- Start Column 1 -->
			<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
				<h2 class="mb-4 section-title">Dibuat Dari Material Terbaik.</h2>
				<p class="mb-4" style="text-align: justify;">Furniture berkualitas dengan material pilihan serta desain baru dan kekinian memberikan pengalaman dan nuansa baru di dalam rumah impian anda. </p>
				<p><a href="/produk" class="btn btn-primary">Explore</a></p>
			</div> 
			<!-- End Column 1 -->
	
			@if ($post->count())
			@foreach ($post as $posts)
			
				<!-- Start Column 2 -->
			<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
				<a class="product-item" href="/posts/{{ $posts->slug }} ">
					<img src="{{ asset('post_images/'. $posts->image[1]->gambar) }}" alt="{{ $posts->category->name }}" class="img-fluid product-thumbnail">
					<h3 class="product-title">{{ $posts->title }}</h3>
					<h3 class="product-title"><strong>@currency ($posts->price) </strong></h3>
					
	
					<span class="icon-cross">
						<img src="images/cross.svg" class="img-fluid">
					</span>
				</a>
			</div> 
			@if ($posts->id == 3)
        	@break
    		@endif
			<!-- End Column 2 -->
			@endforeach
			@endif
			
	
			<!-- Start Column 3 -->
			{{-- <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
				<a class="product-item" href="cart.html">
					<img src="images/product-2.png" class="img-fluid product-thumbnail">
					<h3 class="product-title">Kruzo Aero Chair</h3>
					<strong class="product-price">$78.00</strong>
	
					<span class="icon-cross">
						<img src="images/cross.svg" class="img-fluid">
					</span>
				</a>
			</div> --}}
			<!-- End Column 3 -->
	
			<!-- Start Column 4 -->
			{{-- <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
				<a class="product-item" href="cart.html">
					<img src="images/product-3.png" class="img-fluid product-thumbnail">
					<h3 class="product-title">Ergonomic Chair</h3>
					<strong class="product-price">$43.00</strong>
	
					<span class="icon-cross">
						<img src="images/cross.svg" class="img-fluid">
					</span>
				</a>
			</div> --}}
			<!-- End Column 4 -->
	
		</div>
	</div>
	</div>
	<!-- End Product Section -->



	
<!-- Start Hero Section -->
{{-- <div class="hero ">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				
				<div class="intro-excerpt">
					<h1>Modern Interior <span clsas="d-block">Design Studio</span></h1>
					<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
					<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-black-outline">Explore</a></p>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="hero-img-wrap">
					<img src="images/couch.png" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div> --}}
<!-- End Hero Section -->



    <!-- Start Why Choose Us Section -->
	
	<div class="why-choose-section">
		<div class="container">
		  <div class="row justify-content-between">

			<div class="col-lg-6">
          <h5 class="section-title">Kami Siap Membantu</h5>
          <p>Kami menyediakan layanan unggulan yang bisa anda pesan, tim kami akan membantu menyelesaikan permasalahan keluhan di rumah anda.</p>
    
          <div class="row my-5">
            <div class="col-6 col-md-6">
              <a class="nav-link" href="/layanan#item-1">
            
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
              <a class="nav-link" href="/layanan#item-2">
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
              <a class="nav-link" href="/layanan#item-3">
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
              <a class="nav-link" href="/layanan#item-4 ">
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
		
		  </div>
		</div>
		</div>
		<!-- End Why Choose Us Section -->




		
<!-- Start We Help Section -->
<div class="we-help-section">
<div class="container">
	<div class="row justify-content-between">
		<div class="col-lg-7 mb-5 mb-lg-0">
			<div class="imgs-grid">
				<div class="grid grid-1"><img src="images/img-grid-1.jpg" alt="Untree.co"></div>
				<div class="grid grid-2"><img src="images/img-grid-2.jpg" alt="Untree.co"></div>
				<div class="grid grid-3"><img src="images/img-grid-3.jpg" alt="Untree.co"></div>
			</div>
		</div>
		<div class="col-lg-5 ps-lg-5">
			<h2 class="section-title mb-4">Kami Membantu Anda Membuat Desain Interior Impian</h2>
			<p>Mebel Puji menyediakan berbagai macam produk furniture terpopuler. Dengan fitur custom desain memudahkan anda untuk memilih warna produk serta varian yang bisa anda request di form pesan.</p>
			<p>
				Kami juga memiliki arsitek handal yang siap membantu anda. Konsultasikan desain interior rumah,kantor maupun ruangan anda lainnya kepada desainer kami.
			</p>

			<ul class="list-unstyled custom-list my-4">
				<li>Custom Desain mudah dengan pilihan warna</li>
				<li>Bisa Konsultasi Desain Interior</li>
				<li>Titik Jemput tersebar di Sulawesi Tenggara</li>
				<li>Request Pesanan sesuai kebutuhan pelanggan</li>
			</ul>
			<p><a href="/produk" class="btn btn-primary">Explore</a></p>
		</div>
	</div>
</div>
</div>
<!-- End We Help Section -->

<!-- Start Popular Product -->
<div class="popular-product">
<div class="container">
	<div class="row">
		@if ($post->count())
		@foreach ($post as $posts)
		<div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
			<div class="product-item-sm d-flex">
				<div class="thumbnail">
					<img src="{{ asset('post_images/'. $posts->image[1]->gambar) }}" alt="{{ $posts->category->name }}" class="img-fluid" style="border-radius: 20px;">
				</div>
				<div class="pt-3">
					<h3>{{ $posts->title }}</h3>
					<p>{{ $posts->title }} </p>
					<p><a href="/posts/{{ $posts->slug }}">Lihat</a></p>
				</div>
			</div>
		</div>
		@if ($posts->id == 4)
        @break
    	@endif
		@endforeach
		@endif


	</div>
</div>
</div>
<!-- End Popular Product -->

<!-- Start Testimonial Slider -->
{{-- <div class="testimonial-section">
<div class="container">
	<div class="row">
		<div class="col-lg-7 mx-auto text-center">
			<h2 class="section-title">Testimonials</h2>
		</div>
	</div>

	<div class="row justify-content-center">
		<div class="col-lg-12">
			<div class="testimonial-slider-wrap text-center">

				<div id="testimonial-nav">
					<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
					<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
				</div>

				<div class="testimonial-slider">
					
					<div class="item">
						<div class="row justify-content-center">
							<div class="col-lg-8 mx-auto">

								<div class="testimonial-block text-center">
									<blockquote class="mb-5">
										<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
									</blockquote>

									<div class="author-info">
										<div class="author-pic">
											<img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
										</div>
										<h3 class="font-weight-bold">Maria Jones</h3>
										<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
									</div>
								</div>

							</div>
						</div>
					</div>  --}}
					<!-- END item -->

					{{-- <div class="item">
						<div class="row justify-content-center">
							<div class="col-lg-8 mx-auto">

								<div class="testimonial-block text-center">
									<blockquote class="mb-5">
										<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
									</blockquote>

									<div class="author-info">
										<div class="author-pic">
											<img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
										</div>
										<h3 class="font-weight-bold">Maria Jones</h3>
										<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
									</div>
								</div>

							</div>
						</div>
					</div>  --}}
					<!-- END item -->

					{{-- <div class="item">
						<div class="row justify-content-center">
							<div class="col-lg-8 mx-auto">

								<div class="testimonial-block text-center">
									<blockquote class="mb-5">
										<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
									</blockquote>

									<div class="author-info">
										<div class="author-pic">
											<img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
										</div>
										<h3 class="font-weight-bold">Maria Jones</h3>
										<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
									</div>
								</div>

							</div>
						</div>
					</div>  --}}
					<!-- END item -->

				{{-- </div>

			</div>
		</div>
	</div>
</div>
</div> --}}
<!-- End Testimonial Slider -->

<!-- Start Blog Section -->
{{-- <div class="blog-section">
<div class="container">
	<div class="row mb-5">
		<div class="col-md-6">
			<h2 class="section-title">Recent Blog</h2>
		</div>
		<div class="col-md-6 text-start text-md-end">
			<a href="#" class="more">View All Posts</a>
		</div>
	</div>

	<div class="row">

		<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
			<div class="post-entry">
				<a href="#" class="post-thumbnail"><img src="images/post-1.jpg" alt="Image" class="img-fluid"></a>
				<div class="post-content-entry">
					<h3><a href="#">First Time Home Owner Ideas</a></h3>
					<div class="meta">
						<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
					</div>
				</div>
			</div>
		</div>

		<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
			<div class="post-entry">
				<a href="#" class="post-thumbnail"><img src="images/post-2.jpg" alt="Image" class="img-fluid"></a>
				<div class="post-content-entry">
					<h3><a href="#">How To Keep Your Furniture Clean</a></h3>
					<div class="meta">
						<span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
					</div>
				</div>
			</div>
		</div>

		<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
			<div class="post-entry">
				<a href="#" class="post-thumbnail"><img src="images/post-3.jpg" alt="Image" class="img-fluid"></a>
				<div class="post-content-entry">
					<h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
					<div class="meta">
						<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
</div> --}}
<!-- End Blog Section -->	

@endsection