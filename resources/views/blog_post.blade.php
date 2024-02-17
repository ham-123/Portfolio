@extends('layouts.app')

@section('content')


<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>my <span>blog</span></h1>
    <span class="title-bg">posts</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Article Starts -->
            <article class="col-12">
                <!-- Meta Starts -->
                
                <!-- Meta Ends -->
                <!-- Article Content Starts -->
                <div class="card-body">
                    <img src="{{ asset('img/' . $blog->image) }}" class="img-fluid rounded mb-4" alt="Blog Image">
                    <p class="lead">{{ $blog->content }}</p>
                </div>
                
                <div class="card-footer bg-light text-center">
                    <a href="{{ route('blog') }}" class="btn btn-outline-primary">Retour à la liste des blogs</a>
                </div>
                <!-- Article Content Ends -->
            </article>
            <!-- Article Ends -->
        </div>
    </div>
</section>
<!-- Template JS Files -->
@endsection