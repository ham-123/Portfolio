@extends('backend.layouts.app')

@section('content')


 
  <div class="content-wrapper">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Blog</a></li>
              <li class="breadcrumb-item active">Blog</li>
            </ol>
          </div>
        </div>
      </div>
      <form method="POST" action="{{ route('blog_store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" id="title" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content:</label>
            <textarea id="content" name="content" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="image_path" class="form-label">Image:</label>
            <input type="file" id="image_path" name="image_path" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    </div>
  
  </div>




@endsection
