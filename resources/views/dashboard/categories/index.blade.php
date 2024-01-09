@extends('dashboard.layouts.main') 

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Post Categories </h1>
</div>

@if(session()-> has ('success'))
<div class="alert alert-success col-lg-6" role="alert">
  {{ session('success') }}
</div>
@endif


<div class="table-responsive col-lg-8">

  <form method="post" action="/dashboard/categories" class="row g-3 mt-2" enctype="multipart/form-data">
    @csrf

    <div class="mb-2">
      <label for="image" class="form-label">Product Image</label>
      <img class="img-preview img-fluid mb-3 col-sm-5">
      <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"  
      onchange="previewImage()">
      @error('image')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="col-auto">
      {{-- <label for="name" class="form-label">Name</label> --}}
      <input type="Text" class="form-control"  id="name" name="name" placeholder="Name Category" required >
    </div>
    
    <div class="col-auto">
      {{-- <label for="slug" class="form-label">Slug</label> --}}
      <input type="Text" class="form-control"  id="slug" name="slug" placeholder="Slug Category"required >
    </div>

   

    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3 ">Add Category</button>
    </div>
</form>


<script>

    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');
  
    title.addEventListener('change',function(){
      fetch('/dashboard/categories/checkSlug?name=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

</script>





 
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Category Name</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
      
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $category->name }}</td>
        <td><img src="{{ asset('storage/'. $category->image ) }}" width="100"></td>
        <td>
          
          <form action="{{ url('/dashboard/categories') }}/{{ $category->id }}" method="post" class="d-inline">
            @csrf
            {{ method_field('DELETE') }}
            <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"> </span></button>
          </form>
          
        </td>
      </tr>

      @endforeach

    </tbody>
  </table>
</div>

@endsection