@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Liste des expériences</h1>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('experiences_create') }}" class="btn btn-primary float-right">Ajouter une expérience</a>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <a href="{{ route('experiences_create') }}" class="btn btn-success">Ajouter une éducation</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Expériences</h3>
                        </div>
                        @include('_message')
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Poste</th>
                                        <th>Description</th>
                                        <th>Entreprise</th>
                                        <th>Date début</th>
                                        <th>Date fin</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($experiences as $experience)
                                    <tr>
                                        <td>{{ $experience->poste }}</td>
                                        <td>{{ $experience->description }}</td>
                                        <td>{{ $experience->entreprise }}</td>
                                        <td>{{ $experience->date_debut }}</td>
                                        <td>{{ $experience->date_fin }}</td>
                                        <td>
                                            <a href="{{ route('experiences_edit', $experience->id) }}" class="btn btn-primary">Modifier</a>
                                            <form action="{{ route('experiences_destroy', $experience->id) }}" method="POST">
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
    </div>
</div>
@endsection
