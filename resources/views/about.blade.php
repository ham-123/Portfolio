@extends('layouts.app')

@section('content')
    <!-- Page Title Starts -->
    <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
        <h1>A PROPOS <span>DE MOI</span></h1>
        <span class="title-bg">HmD</span>
    </section>
    <!-- Page Title Ends -->
    <!-- Main Content Starts -->
    <section class="main-content revealator-slideup revealator-once revealator-delay1">
        <div class="container">
            <div class="row">
                @foreach ($abouts as $about)
                    <div class="col-12 col-lg-5 col-xl-6">
                        <div class="row">

                            <div class="col-12">
                                <h3 class="text-uppercase custom-title mb-0 ft-wt-600">INFOS PERSONNELLES</h3>
                            </div>
                            <div class="col-12 d-block d-sm-none">
                                <img src="img/img-mobile.jpg" class="img-fluid main-img-mobile" alt="my picture" />
                            </div>
                            <div class="col-6">
                                <ul class="about-list list-unstyled open-sans-font">
                                    <li> <span class="title">Nom :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $about->nom }}</span>
                                    </li>
                                    <li> <span class="title">Premon :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $about->prenom }}</span>
                                    </li>
                                    <li> <span class="title">Age :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $about->age }}
                                            ans</span> </li>
                                    <li> <span class="title">Nationalité :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $about->nationalite }}</span>
                                    </li>
                                    <li> <span class="title">Freelance :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $about->freelance }}</span>
                                    </li>
                                    <li> <span class="title">Address :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $about->adresse }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="about-list list-unstyled open-sans-font">

                                    <li> <span class="title">Phone :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $about->telephone }}</span>
                                    </li>
                                    <li> <span class="title">Email :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $about->email }}</span>
                                    </li>
                                    <li> <span class="title">Skype :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $about->skype }}</span>
                                    </li>
                                    <li> <span class="title">Languages :</span> <span
                                            class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{ $about->languages }}</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-12 mt-3">
                                <a class="button" href="https://drive.google.com/uc?export=download&id=1hHk_e2gYvTgnvtqnnrsHIiWxUegyd1BS">
                                    <span class="button-text">Télécharger CV</span>
                                    <span class="button-icon fa fa-download"></span>
                                </a>
                            </div>
                            

                        </div>
                    </div>
                    <!-- Personal Info Ends -->
                    <!-- Boxes Starts -->
                    <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                        <div class="row">
                            <div class="col-6">
                                <div class="box-stats with-margin">
                                    <h3 class="poppins-font position-relative">{{ $about->annee_experience }}</h3>
                                    <p class="open-sans-font m-0 position-relative text-uppercase">ANNÉES DE
                                        <span class="d-block">EXPÉRIENCE</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="box-stats with-margin">
                                    <h3 class="poppins-font position-relative">{{ $about->complet_project }}</h3>
                                    <p class="open-sans-font m-0 position-relative text-uppercase">TERMINÉ
                                        PROJETS <span class="d-block">PROJETS</span></p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="box-stats">
                                    <h3 class="poppins-font position-relative">81</h3>
                                    <p class="open-sans-font m-0 position-relative text-uppercase">CONTENT
                                        <span class="d-block">CLIENTÈLE</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="box-stats">
                                    <h3 class="poppins-font position-relative">{{ $about->prix_remporte }}</h3>
                                    <p class="open-sans-font m-0 position-relative text-uppercase">PRIX <span
                                            class="d-block">REMPORTER</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach
            <hr class="separator">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-uppercase pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">Mes
                        Compétences</h3>
                </div>
                @foreach ($competences as $competence)
                    <div class="col-6 col-md-3 mb-3 mb-sm-5">
                        <div class="c100 p{{ $competence->niveau }}">
                            <span>{{ $competence->niveau }}%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">{{ $competence->titre }}</h6>
                    </div>
                @endforeach
            </div>
            <!-- Skills Ends -->
            <hr class="separator mt-1">
            <!-- Experience & Education Starts -->
            <div class="row">
                <div class="col-12">
                    <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">Education
                        <span>&</span> Experience
                    </h3>
                </div>
                @foreach ($educations as $education)
                    <div class="col-lg-6 m-15px-tb">
                        <div class="resume-box">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <span class="time open-sans-font text-uppercase">{{ $education->annee_debut }} -
                                        {{ $education->annee_fin }}</span>
                                    <h5 class="poppins-font text-uppercase">{{ $education->formation }}<span
                                            class="place open-sans-font">{{ $education->diplome }}</span></h5>
                                    <p class="open-sans-font">{{ $education->ecole }} </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
                @foreach ($experiences as $experience)
                    <div class="col-lg-6 m-15px-tb">
                        <div class="resume-box">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-briefcase"></i>
                                    </div>
                                    <span class="time open-sans-font text-uppercase">{{ $experience->date_debut }} /
                                        {{ $experience->date_fin }}</span>
                                    <h5 class="poppins-font text-uppercase">{{ $experience->poste }} <span
                                            class="place open-sans-font"> {{ $experience->entreprise }}</span></h5>
                                    <p class="open-sans-font">{{ $experience->description }}</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Experience & Education Ends -->
        </div>

    </section>
@endsection
