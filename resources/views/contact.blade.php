@extends('layouts.app')

@section('content')

<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>Contactez <span>nous</span></h1>
    <span class="title-bg">Contact</span>
</section>
<!-- Page Title Ends -->

<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            @foreach ($abouts as $about)
            <div class="col-12 col-lg-4">
                <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">NE SOYEZ PAS TIMIDE !</h3>
                <p class="open-sans-font mb-3">
                    N’hésitez pas à me contacter. Je suis toujours ouvert à discuter de nouveaux projets, d’idées créatives ou d’opportunités de faire partie de vos visions.</p>
                <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fa fa-envelope-open position-absolute"></i>
                    <span class="d-block">Mon mail</span>{{ $about->email }}
                </p>
                <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fa fa-phone-square position-absolute"></i>
                    <span class="d-block">Call me</span>{{ $about->telephone }}
                </p>
                <ul class="social list-unstyled pt-1 mb-5">
                    <li class="facebook"><a title="Facebook" href="https://web.facebook.com/hamid.tchemoko"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="linkedin"><a title="LinkedIn" href="linkedin.com/in/hamid-tchemoko-a-509075227/"><i class="fa fa-linkedin"></i></a></li>
                    <li class="dribbble"><a title="Dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
            @endforeach
            <div class="col-12 col-lg-8">
                <form method="post" action="{{ route('message_send') }}" class="contactform">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <input type="text" name="name" placeholder="votre Nom">
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="email" name="email" placeholder="Votre Email">
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="text" name="subject" placeholder="Votre Sujet">
                        </div>
                        <div class="col-12">
                            <textarea name="message" placeholder="Votre Message"></textarea>
                            <button type="submit" class="button">
                                <span class="button-text">Envoyez</span>
                                <span class="button-icon fa fa-send"></span>
                            </button>
                        </div>
                        <div class="col-12 form-message">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
            <!-- Contact Form Ends -->
        </div>
    </div>
</section>
<!-- Main Content Ends -->

@endsection
