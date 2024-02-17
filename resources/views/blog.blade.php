@extends('layouts.app')

@section('content')

<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>Mon <span>blog</span></h1>
    <span class="title-bg">posts</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <!-- Articles Starts -->
        <div class="row">
            @foreach($blogs as $blog)
            <!-- Article Starts -->
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                <article class="post-container">
                    <div class="post-thumb">
                        <a href="#" class="d-block position-relative overflow-hidden">

                            <img src="{{ asset('img/' . $blog->image_path) }}" class="img-fluid" alt="Blog Post">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="entry-header">
                            <h3><a href="#">{{ $blog->title }}</a></h3>
                        </div>
                        <div class="entry-content open-sans-font">
                            <p>{{ $blog->content }}</p>
                        </div>
                    </div>
                </article>
            </div>
            <!-- Article Ends -->
            @endforeach
        </div>
        <!-- Articles Ends -->
    </div>

</section>

@endsection
