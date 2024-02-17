@extends('layouts.app')

@section('content')
    <section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
        <div class="color-block d-none d-lg-block"></div>
        <div class="row home-details-container align-items-center">
            <div class="col-lg-4 bg position-fixed d-none d-lg-block">
                <img src="{{ url('public/img/' . @$getrecord[0]->profile) }}" 
                     style="object-fit: cover;
                            object-position: top;
                            width: 120%; /* Augmenter légèrement la largeur */
                            height: calc(100vh - 80px);
                            margin-left: -10%; /* Réduire la marge gauche de 10% */
                            margin-right: -10%; /* Réduire la marge droite de 10% */
                            z-index: 111;
                            border-radius: 30px;
                            box-shadow: 0 0 7px rgba(0, 0, 0, 0.9);"
                />
            </div>
            
            
            <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
                <div>
                    <img src="{{ url('public/img/' . @$getrecord[0]->profile) }}" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none"
                        alt="ma photo" />
                        <h1 class="text-uppercase poppins-font" style="font-size: 4rem;">Je suis {{ @$getrecord[0]->your_name }} <span style="font-size: 2rem;">{{ @$getrecord[0]->work_experience }}</span></h1>

                    <p class="open-sans-font">{{ @$getrecord[0]->description }}</p>
                    <a class="button" href="{{route('about')}}">
                        <span class="button-text">En savoir plus sur moi</span>
                        <span class="button-icon fa fa-arrow-right"></span>
                    </a>

                </div>
            </div>
        </div>
    </section>
@endsection
