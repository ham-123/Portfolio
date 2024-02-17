@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Liste des éducations</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active">Éducation</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                @include('_message')
                <div class="row mb-3">
                    <div class="col-md-12">
                        <a href="{{ route('education_create') }}" class="btn btn-success">Ajouter une éducation</a>
                    </div>
                </div>
                <!-- Affichage de la liste des éducations -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Formation</th>
                                            <th>École</th>
                                            <th>Diplôme</th>
                                            <th>Année de début</th>
                                            <th>Année de fin</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($educations as $education)
                                            <tr>
                                                <td>{{ $education->id }}</td>
                                                <td>{{ $education->formation }}</td>
                                                <td>{{ $education->ecole }}</td>
                                                <td>{{ $education->diplome }}</td>
                                                <td>{{ $education->annee_debut }}</td>
                                                <td>{{ $education->annee_fin }}</td>
                                                <td>
                                                    <a href="{{ route('education_edit', $education->id) }}" class="btn btn-primary">Modifier</a>
                                                    <form action="{{ route('education_destroy', $education->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
