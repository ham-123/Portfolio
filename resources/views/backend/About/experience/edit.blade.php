@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Modifier l'expérience</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informations sur l'expérience</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('experiences_update', $experiences->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="poste">Poste</label>
                                    <input type="text" class="form-control" id="poste" name="poste" placeholder="Poste" value="{{ $experiences->poste }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="Description">{{ $experiences->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="entreprise">Entreprise</label>
                                    <input type="text" class="form-control" id="entreprise" name="entreprise" placeholder="Entreprise" value="{{ $experiences->entreprise }}">
                                </div>
                                <div class="form-group">
                                    <label for="date_debut">Date début</label>
                                    <input type="date" class="form-control" id="date_debut" name="date_debut" value="{{ $experiences->date_debut }}">
                                </div>
                                <div class="form-group">
                                    <label for="date_fin">Date fin</label>
                                    <input type="date" class="form-control" id="date_fin" name="date_fin" value="{{ $experiences->date_fin }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
