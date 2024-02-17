@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Ajouter une éducation</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active">Ajouter éducation</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <!-- Formulaire de création d'une nouvelle éducation -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('education_store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Formation</label>
                                        <input type="text" name="formation" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>École</label>
                                        <input type="text" name="ecole" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Diplôme</label>
                                        <input type="text" name="diplome" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Année de début</label>
                                        <input type="number" name="annee_debut" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Année de fin</label>
                                        <input type="number" name="annee_fin" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
