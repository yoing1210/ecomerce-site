@extends('dashboard.layouts.main') 

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Post Images {{ auth()->user()->name }}</h1>
</div>

<div class="col-lg-8">

  <form method="post" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
      @csrf

      <div class="mb-3">
        <label for="category" class="form-label">Post Id</label>
        <select class="form-select" name="post_id">
          @foreach ($categories as $category)
          @if(old('category_id') == $category->id)
          <option value="{{ $category -> id }}" selected> {{ $category->name }} </option>
          @else
          <option value="{{ $category -> id }}"> {{ $category->name }} </option>
          @endif
          @endforeach
        </select>
      </div>
      
        <div class="mb-3">
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

        <button type="submit" class="btn btn-primary">Create Post</button>
      </form>

  </div>

@endsection