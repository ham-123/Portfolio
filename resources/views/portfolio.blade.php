@extends('layouts.app')

@section('content')

<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>MON  <span>PORFOLIO</span></h1>
    <span class="title-bg">TRAVAUX</span>
</section>
<section class="main-content text-center revealator-slideup revealator-once revealator-delay1">
    <div id="grid-gallery" class="container grid-gallery">
        <section class="grid-wrap">
            <ul class="row grid">
                @foreach ($portfolios as $portfolio)
                <li>
                    <figure>
                        <img src="{{ asset('img/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="img-fluid rounded" style="width: 100%; height: auto; object-fit: cover;" />
                        <div><span>{{ $portfolio->title }}</span></div>
                    </figure>
                </li>
                @endforeach
            </ul>
        </section>
        <section class="slideshow">
            <ul>
                @foreach ($portfolios as $portfolio)
                <li>
                    <figure>
                        <figcaption>
                            <h3>{{ $portfolio->title }}</h3>
                            <div class="row open-sans-font">
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">{{ $portfolio->project_type }}</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">{{ $portfolio->client }}</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">{{ $portfolio->languages }}</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="{{ $portfolio->preview_link }}" target="_blank">{{ $portfolio->preview_link }}</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <img src="{{ asset('img/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="img-fluid rounded" style="width: 50%; height: auto; object-fit: cover;" />
                    </figure>
                </li>
                @endforeach
            </ul>
            <nav>
                <span class="icon nav-prev"><img src="img/projects/navigation/left-arrow.png" alt="previous"></span>
                <span class="icon nav-next"><img src="img/projects/navigation/right-arrow.png" alt="next"></span>
                <span class="nav-close"><img src="img/projects/navigation/close-button.png" alt="close"> </span>
            </nav>
        </section>
    </div>
</section>

@endsection
