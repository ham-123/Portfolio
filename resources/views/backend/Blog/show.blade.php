@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Détails du Blog</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Détails du blog</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Titre: {{ $blog->title }}</label>
                            </div>
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <img src="{{ asset('img/' . $blog->image_path) }}" alt="Blog Image" style="width: 200px; height: auto;">
                            </div>
                            <div class="form-group">
                                <label for="content">Contenu:</label>
                                <p>{{ $blog->content }}</p>
                            </div>
                            <a href="{{ route('blog_index') }}" class="btn btn-primary">Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
