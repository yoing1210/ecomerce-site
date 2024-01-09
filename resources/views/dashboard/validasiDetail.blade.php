
@extends('dashboard.layouts.main') 
@section('container')

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row">
				
            
                
              <div class="card">
                <div class="card-body">
                  <h2><i class="bi bi-cart2 fa-sm"></i> Detail Pemesanan</h2>
                  @if ($pesanan->status==5)
                  <div class="card-body row justify-content-between ">
                    
                      <h5 align="left"> Pesanan Dibatalkan oleh  {{ $pesanan->user->name }}</h6>
                    </div>
                  @elseif(!empty($pesanan))
                  <p>Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                  <i class="el el-align-center"><h6> Dipesan Oleh : {{ $pesanan->user->name }}</h6></i>
                  
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Warna</th>
                        <th>Jumlah</th>
                        <th>Catatan</th>
                        <th>Harga</th>
                        <th>Total Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no =1; ?>
                      @foreach ($pesanan_details as $pesanan_detail)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $pesanan_detail->post->title }}</td>
                        <td>{{ $pesanan_detail->color }}</td>
                        <td>{{ $pesanan_detail->jumlah }}</td>
                        <td>{{ $pesanan_detail->pesan }}</td>
                        <td> @currency ($pesanan_detail->post->price) </td>
                        <td> @currency ($pesanan_detail->jumlah_harga) </td>
                       
                      </tr>
                      @endforeach
                      <tr>
                          <td colspan="6" align="left"><strong> Total Harga : </strong></td>
                          <td><strong> @currency ($pesanan->jumlah_harga) </strong></td>
                      </tr>
                      <tr>
                          <td colspan="6" align="left"><strong> Kode Unik : </strong></td>
                          <td><strong> {{ $pesanan->kode }} </strong></td>
                      </tr>
                      <tr>
                          <td colspan="6" align="left"><strong> Total yang harus ditransfer : </strong></td>
                          <td><strong> @currency ($pesanan->jumlah_harga+$pesanan->kode) </strong></td>
                      </tr>
                  
                   
                    </tbody>
                  </table>
                  @endif
                </div>
              </div>


              <div class="card">
                <div class="card-body">
                  @if($pesanan->status==1)
                    <h4 align="center"><i class="bi bi-cart2 fa-sm"></i> Bukti transaksi kosong</h4>
                  @elseif ($pesanan->status==2)
                    <div class="card-body row justify-content-between ">
                      <div class="col-lg-9">
                        <h6 align="left"> Bukti Pembayaran / {{ $pesanan->validasi->tanggal }} :</h6> 
                      </div>

                      <div class="col-lg-2 mb-3 ">
             
                        <a href="/dashboard" class="badge bg-info text-decoration-none  py-1 px-3"> <h6>Kembali</h6>   </a>
                        
                      </div>
                      <td>
                        <img src="{{ asset('storage/'. $pesanan->validasi->image ) }}" width="100%">
                      </td>
                    </h6>
                    
                  </div>
                

                    
                    
                  </div>
                  @elseif ($pesanan->status==3)
                    <div class="card-body row justify-content-between ">
                        <div class="col-lg-5">
                          <h6 align="left"> Bukti Pembayaran / {{ $pesanan->validasi->tanggal }} :
                        </div>

                        <div class="col-lg-4 ">
                          <a href="{{ url('konfirmasi-status') }}/{{ $pesanan->id  }}" class="badge bg-warning text-decoration-none py-1 px-3 mx-4"> <h6>Terima Pesanan</h6></a>
                          <a href="/dashboard" class="badge bg-info text-decoration-none  py-1 px-3 ms-3"> <h6>Kembali</h6>   </a>
                          
                        </div>
                      </h6>
                      
                    </div>
                   
                    <td>
                      <img src="{{ asset('storage/'. $pesanan->validasi->image ) }}" width="100%">
                    </td>
                    {{-- masukan foto pembayaran disini --}}
                    @endif
                  </div>

                  
            </div>
              

            </div>
					</div>
				</div>
	
		<!-- End Hero Section -->
        @endsection