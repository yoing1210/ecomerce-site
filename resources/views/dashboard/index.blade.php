@extends('dashboard.layouts.main') 

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2"> List Order </h1>
</div>

@if(session()-> has ('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif


<div class="table-responsive col-lg-10">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Status</th>
        <th scope="col">Harga Total</th>
        <th scope="col">User</th>
        <th scope="col">Tanggal Transaksi</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
     
      <?php $no =1; ?>
      @foreach ($pesanans as $pesanan)
      <tr>
          <td>{{ $no++ }}</td>
          <td>
              @if ($pesanan->status ==1)
              Sudah pesan dan belum dibayar
              @elseif ($pesanan->status ==3)
              Pesanan Sudah dibayar dan menunggu Konfirmasi
              @elseif ($pesanan->status ==5)
              Pesanan dibatalkan
              @else
              Sudah dibayar
              @endif
            
          </td>
          <td>
              @currency ($pesanan->jumlah_harga+$pesanan->kode)
          </td>
          <td>
            {{ $pesanan->user->name }}
          </td>
          <td>
            {{ $pesanan->tanggal }}
          </td>
          
          <td>
            <a href="/dashboard/{{ $pesanan->id }}" class="badge bg-info"><span data-feather="eye"> </span></a>
            
            {{-- <form action="/dashboard" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"> </span></button>
            </form> --}}
            
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection