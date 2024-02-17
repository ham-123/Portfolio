
@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Formulaire pour modifier une compétence existante -->
        <form action="{{ route('competences_update', $competence->id) }}" method="POST">
            @csrf <!-- Protection contre les attaques CSRF -->
            @method('PUT') <!-- Utilisation de la méthode PUT pour la mise à jour -->
            
            <!-- Champ pour le titre de la compétence -->
            <div class="form-group">
                <label for="titre">Titre :</label>
                <input type="text" name="titre" id="titre" class="form-control" value="{{ $competence->titre }}">
            </div>
            
            <!-- Champ pour le niveau de la compétence -->
            <div class="form-group">
                <label for="niveau">Niveau :</label>
                <input type="text" name="niveau" id="niveau" class="form-control" value="{{ $competence->niveau }}">
            </div>
            
            <!-- Bouton pour soumettre le formulaire -->
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
@endsection
