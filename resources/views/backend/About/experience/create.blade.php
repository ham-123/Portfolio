@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ajouter une expérience</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informations sur l'expérience</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('experiences_store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="poste">Poste</label>
                                    <input type="text" class="form-control" id="poste" name="poste" placeholder="Poste">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="entreprise">Entreprise</label>
                                    <input type="text" class="form-control" id="entreprise" name="entreprise" placeholder="Entreprise">
                                </div>
                                <div class="form-group">
                                    <label for="date_debut">Date début</label>
                                    <input type="date" class="form-control" id="date_debut" name="date_debut">
                                </div>
                                <div class="form-group">
                                    <label for="date_fin">Date fin</label>
                                    <input type="date" class="form-control" id="date_fin" name="date_fin">
                                </div>
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
