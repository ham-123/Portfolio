@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tableau de bord</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    @include('_message')
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Liens vers les différentes parties du tableau de bord</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!-- Card pour la gestion des informations personnelles -->
                                    <div class="col-md-6 mb-3">
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>Informations Personnelles</h3>
                                                <p>Gérez vos informations personnelles.</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-user"></i>
                                            </div>
                                            <a href="{{ route('personnel_about') }}" class="small-box-footer">Gestion des informations <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>

                                    <!-- Card pour la gestion des compétences -->
                                    <div class="col-md-6 mb-3">
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>Compétences</h3>
                                                <p>Gérez vos compétences.</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-chart-bar"></i>
                                            </div>
                                            <a href="{{ route('competences_index') }}" class="small-box-footer">Gestion des compétences <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>

                                    <!-- Card pour la gestion de l'éducation -->
                                    <div class="col-md-6 mb-3">
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>Éducation</h3>
                                                <p>Gérez votre parcours académique.</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-graduation-cap"></i>
                                            </div>
                                            <a href="{{ route('education_index') }}" class="small-box-footer">Gestion de l'éducation <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>

                                    <!-- Card pour la gestion des expériences -->
                                    <div class="col-md-6 mb-3">
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>Expériences</h3>
                                                <p>Gérez vos expériences professionnelles.</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-briefcase"></i>
                                            </div>
                                            <a href="{{ route('experiences_index') }}" class="small-box-footer">Gestion des expériences <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>

                                    <!-- Card pour la section Contact -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
