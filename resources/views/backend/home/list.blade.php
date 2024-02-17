@extends('backend.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Page D'accueil</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @include('_message')
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-12">

                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Page D'accueil</h3>
                            </div>

                            <form class="form-horizontale" action="{{ url('admin/home/post') }}"
                                method="POST"enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Profile Image
                                        </label>
                                        <div class="col-sm-10">
                                            <!-- Afficher l'image préchargée -->

                                            <br>
                                            <!-- Champ d'entrée de fichier pour télécharger une nouvelle image -->
                                            <input class="form-control" type="file" name="profile" id="profile"
                                                accept=".jpg,.png,.jpeg" />
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="from-group row">
                                        <label class="col-sm-2 col-form-lable">
                                            Nom
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="your_name" id="your_name"
                                                placeholder="Votre nom" value="{{ @$getrecord[0]->your_name }}" />
                                            @if (isset($getrecord[0]->profile))
                                                <img src="{{ url('public/img/' . $getrecord[0]->profile) }}"
                                                    alt="Profile Image" style="max-width: 100px;">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="from-group row">
                                        <label class="col-sm-2 col-form-lable">
                                            Experiences
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="work_experience" id="exprience"
                                                placeholder="Entre un exprerience"
                                                value="{{ @$getrecord[0]->work_experience }}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">
                                            Description
                                        </label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="description" id="description" placeholder="Entrez une description" rows="5">{{ @$getrecord[0]->description }}</textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" id="id" value="{{ @$getrecord[0]->id }}">
                                </div>

                                
                                <div class="card-footer">
                                  <button type="submit" name="add_an_update" class="btn btn-info" value="@if(count($getrecord) > 0) Edit @else Add @endif">
                                      @if(count($getrecord) > 0)
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

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
