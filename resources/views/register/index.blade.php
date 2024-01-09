@extends('layouts.main')

@section('container')

<div class="row justify-content-center ">
  <div class="col-lg-4">
    <main class="form-registration w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
      <form action="/register" method="post">
        @csrf
        {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
        
    
        <div class="form-floating">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
            <label for="name">Name</label>
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>


          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
            <label for="email">Email address</label>
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

        <div class="form-floating">
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
            <label for="username">username</label>
            @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>


        

          {{-- <div class="form-floating">
            <input type="alamat" name="alamat" class="form-control " id="alamat" placeholder="alamat" required value="{{ old('alamat') }}">
            <label for="alamat">Alamat</label>
            @error('alamat')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="form-floating">
            <input type="hp" name="hp" class="form-control" id="hp" placeholder="hp" required value="{{ old('hp') }}">
            <label for="hp">No HP</label>
            
          </div> --}}

        <div class="form-floating">
          <input type="password" name="password" class="form-control " id="password" placeholder="Password" required value="{{ old('password') }}">
          <label for="password">Password</label>
          
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
  
      </form>

      <small class="d-block text-center mt-3">
        already registered? <a href="/login">Sign in</a>
      </small>

    </main>
      
 
  </div>
</div>

@endsection