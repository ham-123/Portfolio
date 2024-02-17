@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Gestion des Blogs</h1>
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
                            <h3 class="card-title">Liste des Blogs</h3>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                        <div class="card-body">
                            <a href="{{ route('blog_create') }}" class="btn btn-primary mb-3">Ajouter un nouveau blog</a>
                            <div class="row">
                                @foreach ($blogs as $blog)
                                <div class="col-md-6">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                          <h3 class="card-title"><u><strong>{{ $blog->title }}</strong></u></h3>
                                          <p class="card-text">{{ Str::limit($blog->content, 150) }}</p>
                                            <div class="text-center">
                                                <a href="{{ route('blog_show', $blog->id) }}" class="btn btn-primary mr-2">Voir</a>
                                                <a href="{{ route('blog_edit', $blog->id) }}" class="btn btn-warning mr-2">Modifier</a>
                                                <form method="POST" action="{{ route('blog_destroy', $blog->id) }}" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
