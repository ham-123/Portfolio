@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <form action="{{ route('competences_store') }}" method="POST">
            @csrf 
            
            <div class="form-group">
                <label for="titre">Titre :</label>
                <input type="text" name="titre" id="titre" class="form-control" placeholder="Titre de la compétence">
            </div>
            
            <div class="form-group">
                <label for="niveau">Niveau :</label>
                <input type="text" name="niveau" id="niveau" class="form-control" placeholder="Niveau de la compétence">
            </div>
            
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection
