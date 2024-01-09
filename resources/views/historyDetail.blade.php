@extends('layouts.main')
@section('container')

@if(session()-> has ('fail'))
<div class="alert alert-danger col-lg-5 mb-1 top-0 start-50 translate-middle text-center" role="alert">
  {{ session('fail') }}
</div>
@endif
		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row">


            @if ($pesanan->status ==1)
            <div class="col-md-12">
              <div class="card">
                  <div class="card-body text-black">
                      <h2>Sukses Check Out</h2>
                      <h5>Pesanan anda sudah sukses dicheck out, selanjutnya untuk pembayaran silahkan trensfer di rekening 
                          <strong>Bank BRI Nomor Rekening: 12314-2313-43565</strong>
                          dengan nominal : <strong> @currency($pesanan->jumlah_harga+$pesanan->kode)</strong>
                      </h5>
                  </div>
              </div>
              
            <div class="card">
              <div class="card-body">
                <h2><i class="bi bi-cart2 fa-sm"></i> Detail Pemesanan</h2>
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
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no =1; ?>
                    @foreach ($pesanan_details as $pesanan_detail)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>
                          <img src="{{ asset('post_images/'. $pesanan_detail->post->image[0]->gambar ) }}" width="100">
                        </td>
                      <td>{{ $pesanan_detail->post->title }}</td>
                      <td>{{ $pesanan_detail->color }}</td>
                      <td>{{ $pesanan_detail->jumlah }}</td>
                      <td> @currency ($pesanan_detail->post->price) </td>
                      <td> @currency ($pesanan_detail->jumlah_harga) </td>
                     
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="6" align="left"><strong> Catatan: </strong></td>
                        <td><strong> {{ $pesanan_detail->pesan }} </strong></td>
                    </tr>
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
              {{-- kirim struk transaksi --}}
              <div class="card-body text-black">
                  
                  <h5>Jika sudah melakukan pembayaran harap mengirim struk pembayaran di bawah ini:
                  </h5>

                  <form method="post" action="{{ url('history') }}/{{ $pesanan->id }}" class="mb-5" enctype="multipart/form-data" >
                    @csrf
                    

                  <div>
                    <label for="image" class="form-label">Product Image</label>
                    <img class="img-preview img-fluid col-sm-5">
                    <input class="form-control form-control-lg mb-4 @error('image') is-invalid @enderror" type="file" id="image" name="image"  
                    onchange="previewImage()">
                    @error('image')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
                
                
              </div>
          </div>



          <div class="card">
            {{-- batalkan pesanan --}}
            <div class="card-body text-black text-center">

              <a href="{{ url('batalkan') }}/{{ $pesanan->id  }}" class="badge bg-danger text-decoration-none py-3 px-5 mx-5" onclick="return confirm('Anda yakin akan membatalkan pesanan?')"> <h6>Batalkan Pesanan</h6></a>
              
              
            </div>
        </div>

          </div>


            @elseif ($pesanan->status ==5)
            <div class="col-md-12">
              <div class="card">
                  <div class="card-body text-black">
                      <h2>Transaksi Dibatalkan</h2>
                      <h5>Pesanan anda telah dibatalkan, <br> jika anda masih tertarik dengan produk kami silahkan jelajahi produk lainnya pada menu produk
                      </h5>
                  </div>
              </div>
              </div>
            @else
            <div class="col-md-12">
              <div class="card">
                  <div class="card-body text-black">
                      <h2>Transaksi Berhasil</h2>
                      <h5>Pesanan anda sedang dalam proses pengerjaan, <br> informasi mengenai pengiriman akan kami informasikan melalui notifikasi whatsapp

                      </h5>
                  </div>
              </div>
              </div>
            
            @endif


            

					</div>
				</div>
			</div>
		<!-- End Hero Section -->

    <script>

 
    
    
      function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
    
        imgPreview.style.display = 'block';
    
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
    
        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }
    </script>
    
        @endsection