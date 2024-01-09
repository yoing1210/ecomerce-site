@extends('layouts.main')
@section('container')

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row">
				
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <h2><i class="bi bi-cart2 fa-sm"></i> Riwayat Pemesanan</h2>
                  {{-- @if(empty($pesanan))
                  <h4>Pesanan anda masih kosong</h4>
                  @else --}}
                  <table class="table table-striped">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>Status</th>
                          <th>Jumlah Harga</th>
                          <th>Detail</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no =1; ?>
                        @foreach ($pesanans as $pesanan)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $pesanan->tanggal }}</td>
                            <td>
                                @if ($pesanan->status ==1)
                                Pesanan belum dibayar
                                @elseif ($pesanan->status ==3)
                                Pesanan Sudah dibayar dan menunggu Konfirmasi
                                @elseif ($pesanan->status ==5)
                                Pesanan Dibatalkan
                                @else
                                Pesanan Sukses dan Barang anda sedang di kerjakan
                                @endif
                            </td>
                            <td>
                                @currency ($pesanan->jumlah_harga+$pesanan->kode)
                            </td>
                            <td>
                                <a href="/history/{{ $pesanan->id }}" class="btn btn-primary">
                                    <i class="bi bi-info-square-fill"></i></a>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
                  {{-- @endif --}}
                </div>
              </div>
            </div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->


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

	
		</div>
	</div>
	</div>
	<!-- End Product Section -->
		  @endsection