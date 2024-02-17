@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Modifier une éducation</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active">Modifier éducation</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <!-- Formulaire de modification de l'éducation -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('education_update', $education->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Formation</label>
                                        <input type="text" name="formation" class="form-control" value="{{ $education->formation }}">
                                    </div>
                                    <div class="form-group">
                                        <label>École</label>
                                        <input type="text" name="ecole" class="form-control" value="{{ $education->ecole }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Diplôme</label>
                                        <input type="text" name="diplome" class="form-control" value="{{ $education->diplome }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Année de début</label>
                                        <input type="number" name="annee_debut" class="form-control" value="{{ $education->annee_debut }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Année de fin</label>
                                        <input type="number" name="annee_fin" class="form-control" value="{{ $education->annee_fin }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
