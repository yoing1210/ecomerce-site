@extends('layouts.main')

@section('container')
     <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show "  role="alert">
                {{ session('success') }}
                </div>
                @endif

                @if(session()->has('error'))
                <div class="alert alert-success alert-dismissible fade show "  role="alert">
                {{ session('error') }}
                </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <h3><i class="bi bi-person-lines-fill"> </i> My Profile</h3>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td>No HP</td>
                                    <td>:</td>
                                    <td>{{ $user->hp }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{ $user->alamat }}</td>
                                </tr>
                                <tr>
                                    <td>Kode Pos</td>
                                    <td>:</td>
                                    <td>{{ $user->pos }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="bi bi-pencil-square"></i> Edit Profile</h4>
                        
                        <div class="row justify-content-left ">
                            <div class="col-lg-5">

                        <form action="/profile" method="post">
                            @csrf
                            {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
                            
                        
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ $user->name }}">
                                <label for="name">Name</label>
                                @error('name')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                              </div>
                            
                    
                    
                            <div class="form-floating">
                              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ $user->email }}">
                              <label for="email">Email</label>
                              @error('email')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                            </div>
                    
                            <div class="form-floating">
                                <input type="hp" name="hp" class="form-control @error('hp') is-invalid @enderror" id="hp" placeholder="hp" required value="{{ old('hp') }}">
                                <label for="hp">No HP</label>
                                @error('hp')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                              </div>

                            <div class="form-floating">
                              <input type="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="alamat" required value="{{ old('alamat') }}">
                              <label for="alamat">Alamat</label>
                              @error('alamat')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-floating">
                              <input type="pos" name="pos" class="form-control @error('pos') is-invalid @enderror" id="pos" placeholder="pos" required value="{{ old('pos') }}">
                              <label for="pos">Kode Pos</label>
                              @error('pos')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                            </div>
                    
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="{{ old('password') }}">
                                <label for="password">Password</label>
                              </div>
                    
                            
                        
                            <button class="w-100 btn btn-lg btn-primary mt-5" type="submit">Simpan</button>
                      
                                </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
     </div>

@endsection