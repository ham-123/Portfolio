@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Page À Propos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active">À Propos</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                @include('_message')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">À Propos</h3>
                            </div>
                            <form class="form-horizontal" action="{{ url('admin/personnel/post') }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nom</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="nom" id="nom"
                                            value="{{ @$getpersonnel[0]->nom }}"
                                                placeholder="Entrez votre nom" />
                                        </div>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="from-group row">
                                        <label class="col-sm-2 col-form-lable">
                                            Prénom
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="prenom" id="prenom"
                                            value="{{ @$getpersonnel[0]->prenom }}"
                                                placeholder="Entrez votre prenom" />
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="from-group row">
                                        <label class="col-sm-2 col-form-lable">
                                            Age
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="nunmber" name="age" id="age"
                                            value="{{ @$getpersonnel[0]->age }}"
                                                placeholder="Age" />
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="from-group row">
                                        <label class="col-sm-2 col-form-lable">
                                            Nationalité
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="texte" name="nationalite" id="nationalite"
                                            value="{{ @$getpersonnel[0]->nationalite }}"
                                                placeholder="Nationalité" />
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="from-group row">
                                        <label class="col-sm-2 col-form-lable">
                                            Freelance
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="texte" name="freelance" id="freelance"
                                            value="{{ @$getpersonnel[0]->freelance }}"
                                                placeholder="Freelance" />
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="from-group row">
                                        <label class="col-sm-2 col-form-lable">
                                            Adresse
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="texte" name="adresse" id="adresse"
                                            value="{{ @$getpersonnel[0]->adresse }}"
                                                placeholder="Adresse" />
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="from-group row">
                                        <label class="col-sm-2 col-form-lable">
                                            Téléphone
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="texte" name="telephone" id="telephone"
                                            value="{{ @$getpersonnel[0]->telephone }}"
                                                placeholder="Téléphone" />
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="from-group row">
                                        <label class="col-sm-2 col-form-lable">
                                            Email
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="texte" name="email" id="email"
                                            value="{{ @$getpersonnel[0]->email }}"
                                                placeholder="Email" />
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="from-group row">
                                        <label class="col-sm-2 col-form-lable">
                                            Linkedin
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="texte" name="linkedin" id="linkedin"
                                            value="{{ @$getpersonnel[0]->linkedin }}"
                                                placeholder="LinkedIn" />
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="from-group row">
                                        <label class="col-sm-2 col-form-lable">
                                            Skype
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="texte" name="skype" id="skype"
                                            value="{{ @$getpersonnel[0]->skype }}"
                                                placeholder="Skype" />
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="from-group row">
                                        <label class="col-sm-2 col-form-lable">
                                            Languages
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="texte" name="languages" id="languages"
                                            value="{{ @$getpersonnel[0]->languages }}"
                                                placeholder="Languages" />
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="from-group row">
                                        <label class="col-sm-2 col-form-lable">
                                            Années d'Experiences
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" name="annee_experience"
                                            value="{{ @$getpersonnel[0]->annee_experience }}"
                                                id="annee_experience" placeholder="Années d'experience" />
                                        </div>
                                    </div>
                                </div>


                                <div class="card-body">
                                    <div class="from-group row">
                                        <label class="col-sm-2 col-form-lable">
                                            Projet complète
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" name="complet_project"
                                            value="{{ @$getpersonnel[0]->complet_project }}"
                                                id="complet_project" placeholder="Années d'experience" />
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="from-group row">
                                        <label class="col-sm-2 col-form-lable">
                                            Prix remportés
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" name="prix_remporte"
                                            value="{{ @$getpersonnel[0]->prix_remporte }}"
                                                id="" placeholder="Prix remportés" />
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" id="id" value="{{ @$getpersonnel[0]->id }}">
                                </div>



                        </div>
                        <div class="card-footer">
                            <button type="submit" name="add_an_update" class="btn btn-info"  value="@if(count($getpersonnel) > 0) Edit @else Add @endif">
                                @if(count($getpersonnel) > 0)
                                Edit
                            @else
                                Add
                            @endif
                        </button>
                            <a href="#" class="btn btn-default float-right">Retour</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
