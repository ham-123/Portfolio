@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Blog</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mb-4">Modifier le billet de blog</h1>
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('blog_update', $blog->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="title" class="form-label">Titre :</label>
                                    <input type="text" id="title" name="title" value="{{ $blog->title }}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="content" class="form-label">Contenu :</label>
                                    <textarea id="content" name="content" class="form-control">{{ $blog->content }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="old_image" class="form-label">Ancienne image :</label><br>
                                    <img src="{{ asset('img/' . $blog->image_path) }}" alt="Old Image" style="max-width: 200px;">
                                    <input type="hidden" name="old_image" value="{{ $blog->image_path }}">
                                </div>
                                <div class="mb-3">
                                    <label for="image_path" class="form-label">Nouvelle image :</label>
                                    <input type="file" id="image_path" name="image_path" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
