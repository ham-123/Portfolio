@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Détails du projet</h1>
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
                            <h3 class="card-title">Détails du projet</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Titre: {{ $portfolio->title }}</label>
                               
                            </div>
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <img src="{{ asset('img/' . $portfolio->image) }}" alt="Project Image" style="width: 100px; height: auto;">
                            </div>
                            
                            <div class="form-group">
                                <label for="project_type">Type de projet:{{ $portfolio->project_type }}</label>
                                
                            </div>
                            <div class="form-group">
                                <label for="client">Client: {{ $portfolio->client }}</label>
                                <p></p>
                            </div>
                            <div class="form-group">
                                <label for="languages">Langages: {{ $portfolio->languages }}</label>
                             
                            </div>
                            <div class="form-group">
                                <label for="preview_link">Lien de prévisualisation: <a href="{{ $portfolio->preview_link }}">{{ $portfolio->preview_link }}</a></label>
                                
                            </div>

                            <a href="{{ route('portfolio_index') }}" class="btn btn-primary">Retour</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
