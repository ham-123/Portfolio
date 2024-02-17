@extends('backend.layouts.app')

@section('content')

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Modifier le projet</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
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
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Formulaire de modification de projet</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('portfolio_update', $portfolio->id) }}" method="POST"  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            
                                <div class="form-group">
                                    <label for="title">Titre:</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $portfolio->title }}">
                                    
                                </div>
                            
                                <div class="form-group">
                                    <label for="image">Image actuelle:</label>
                                    <img src="{{ asset('img/' . $portfolio->image) }}" alt="Project Image" style="width: 100px; height: auto;">
                                </div>
                                
                                <div class="form-group">
                                    <label for="image">Nouvelle image:</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                                
                            
                                <div class="form-group">
                                    <label for="project_type">Type de projet:</label>
                                    <input type="text" class="form-control" id="project_type" name="project_type" value="{{ $portfolio->project_type }}">
                                </div>
                            
                                <div class="form-group">
                                    <label for="client">Client:</label>
                                    <input type="text" class="form-control" id="client" name="client" value="{{ $portfolio->client }}">
                                </div>
                            
                                <div class="form-group">
                                    <label for="languages">Langages:</label>
                                    <input type="text" class="form-control" id="languages" name="languages" value="{{ $portfolio->languages }}">
                                </div>
                            
                                <div class="form-group">
                                    <label for="preview_link">Lien de prévisualisation:</label>
                                    <input type="text" class="form-control" id="preview_link" name="preview_link" value="{{ $portfolio->preview_link }}">
                                </div>
                            
                                <!-- Ajoutez d'autres champs ici selon vos besoins -->
                            
                                <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                            </form>
                            
                        </div>
                        <a href="{{ route('portfolio_index') }}" class="btn btn-primary">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
