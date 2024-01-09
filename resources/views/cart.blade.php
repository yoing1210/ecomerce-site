@extends('layouts.main')
@section('container')

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row">
				
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                   
                  <h2><i class="bi bi-cart2 fa-sm"></i> Keranjang Belanja</h2>
                  @if(!empty($pesanan))
                  <p>Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama Barang</th>
                        <th>Warna</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total Harga</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                        $total = 0;
                      @endphp
                      <?php $no =1; ?>
                      @foreach ($pesanan_details as $pesanan_detail)
                     
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                          <img src="{{ asset('post_images/'. $pesanan_detail->post->image[1]->gambar) }}" width="100">
                        </td>
                        <td>{{ $pesanan_detail->post->title }}</td>
                        <td>{{ $pesanan_detail->color }}</td>
                        <td>{{ $pesanan_detail->jumlah }}</td>
                        <td> @currency ($pesanan_detail->post->price) </td>
                        <td> @currency ($pesanan_detail->jumlah_harga) </td>
                        <td>
                          

                            <!-- Button trigger modal -->
                            <a href="/editCart/{{ $pesanan_detail->id }}"><button type="button" class="btn btn-primary mb-2" style="border-radius:3px; border-color:rgb(28, 83, 21); padding:2px 15px" >
                              <i class="bi bi-pencil-square"></i>
                            </button></a>

                        
                                </div>
                              </div>
                            </div>
                       

                         
                          <form action="{{ url('cart') }}/{{ $pesanan_detail->id }}" method="post">
                              @csrf
                              {{ method_field('DELETE') }}
                              <button type="submit" class="btn bg-danger" style="border-radius:3px; border-color:rgb(222, 27, 27); padding:2px 15px"><i class="bi bi-trash text-light" onclick="return confirm('Anda yakin menghapus pesanan ini?')"></i></button>
                          </form>
                        </td>
                      </tr>
                      @php
                        $total += ($pesanan_detail->post->price*$pesanan_detail->jumlah)
                      @endphp
                      @endforeach
                        <td colspan="6" align="right"><strong> Total Harga : </strong></td>
                        <form action="konfirmasi-cart" method="post">
                          @csrf
                        <input type="hidden" name="total" value="{{ ($total) }}">
                        <td><strong> @currency ($total) </strong></td>
                        <td>
                          <button class="btn btn-lg btn-primary mt-5 text-center" type="submit" style="border-radius:3px;  padding:5px 5px; " onclick="return confirm('Anda yakin akan check out?')"> 
                            {{-- <a href="{{ url('konfirmasi-cart') }}" class="btn bg-primary" style="border-radius:3px; border-color:rgb(10, 140, 56); padding:5px 5px; opacity:0%;" > --}}
                          </a><i class="bi bi-cart2 pe-3" > Check Out</i> </button>
                        </form>
                        </td>
                    </tbody>
                  </table>
                  @endif
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





















































































    
{{-- 
		

		<div class="untree_co-section before-footer-section">
            <div class="container">
              <div class="row mb-5">
                <form class="col-md-12" method="post">
                  <div class="site-blocks-table">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="product-thumbnail">Image</th>
                          <th class="product-name">Product</th>
                          <th class="product-price">Price</th>
                          <th class="product-quantity">Quantity</th>
                          <th class="product-total">Total</th>
                          <th class="product-remove">Remove</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="product-thumbnail">
                            <img src="images/product-1.png" alt="Image" class="img-fluid">
                          </td>
                          <td class="product-name">
                            <h2 class="h5 text-black">Product 1</h2>
                          </td>
                          <td>$49.00</td>
                          <td>
                            <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                              <div class="input-group-prepend">
                                <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                              </div>
                              <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                              <div class="input-group-append">
                                <button class="btn btn-outline-black increase" type="button">&plus;</button>
                              </div>
                            </div>
        
                          </td>
                          <td>$49.00</td>
                          <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                        </tr>
        
                        <tr>
                          <td class="product-thumbnail">
                            <img src="images/product-2.png" alt="Image" class="img-fluid">
                          </td>
                          <td class="product-name">
                            <h2 class="h5 text-black">Product 2</h2>
                          </td>
                          <td>$49.00</td>
                          <td>
                            <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                              <div class="input-group-prepend">
                                <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                              </div>
                              <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                              <div class="input-group-append">
                                <button class="btn btn-outline-black increase" type="button">&plus;</button>
                              </div>
                            </div>
        
                          </td>
                          <td>$49.00</td>
                          <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
        
              <div class="row">
                <div class="col-md-6">
                  <div class="row mb-5">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <button class="btn btn-black btn-sm btn-block">Update Cart</button>
                    </div>
                    <div class="col-md-6">
                      <button class="btn btn-outline-black btn-sm btn-block">Continue Shopping</button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label class="text-black h4" for="coupon">Coupon</label>
                      <p>Enter your coupon code if you have one.</p>
                    </div>
                    <div class="col-md-8 mb-3 mb-md-0">
                      <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                    </div>
                    <div class="col-md-4">
                      <button class="btn btn-black">Apply Coupon</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 pl-5">
                  <div class="row justify-content-end">
                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-12 text-right border-bottom mb-5">
                          <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <span class="text-black">Subtotal</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black">$230.00</strong>
                        </div>
                      </div>
                      <div class="row mb-5">
                        <div class="col-md-6">
                          <span class="text-black">Total</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black">$230.00</strong>
                        </div>
                      </div>
        
                      <div class="row">
                        <div class="col-md-12">
                          <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Proceed To Checkout</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
		
		  @endsection