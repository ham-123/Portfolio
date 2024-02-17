@extends('backend.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
              <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                      <div class="inner">
                          <h3>Home</h3>
                          <p>Visit Home Page</p>
                      </div>
                      <div class="icon">
                          <i class="fas fa-home"></i>
                      </div>
                      <a href="{{ url('admin/home') }}" class="small-box-footer">Go to Home <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>

              <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                      <div class="inner">
                          <h3>About</h3>
                          <p>Learn About Us</p>
                      </div>
                      <div class="icon">
                          <i class="fas fa-info-circle"></i>
                      </div>
                      <a href="{{ url('admin/about') }}" class="small-box-footer">Learn More <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>

              <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                      <div class="inner">
                          <h3>Portfolio</h3>
                          <p>Explore Our Portfolio</p>
                      </div>
                      <div class="icon">
                          <i class="fas fa-folder-open"></i>
                      </div>
                      <a href="{{ route('portfolio_index') }}" class="small-box-footer">View Portfolio <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>

              <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                      <div class="inner">
                          <h3>Blog</h3>
                          <p>Check Out Our Blog</p>
                      </div>
                      <div class="icon">
                          <i class="fas fa-newspaper"></i>
                      </div>
                      <a href="{{ url('admin/blog') }}" class="small-box-footer">Read More <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-secondary">
                      <div class="inner">
                          <h3>Contact</h3>
                          <p>Get In Touch</p>
                      </div>
                      <div class="icon">
                          <i class="fas fa-envelope"></i>
                      </div>
                      <a href="{{ url('admin/contact') }}" class="small-box-footer">Contact Us <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
          </div>
      </div>
  </section>
    </section>

</div>

@endsection
