@extends('backend.layouts.app')

@section('content')

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Page de Portfolio</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Porfolio</a></li>
                        <li class="breadcrumb-item active">Liste des Projets</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
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
                <div class="col-md-12">
                    <a href="{{ route('portfolio_create') }}" class="btn btn-primary mb-2">Nouveau projet</a>
                    <ul class="list-group">
                        @foreach ($portfolios as $portfolio)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="{{ route('portfolio_show', ['id' => $portfolio->id]) }}">{{ $portfolio->title }}</a>
                                <img src="/img/{{$portfolio->image}}" alt="rien" width="80px">
                                <div class="form-group">
                                  <a href="{{ route('portfolio_edit', ['id' => $portfolio->id]) }}" class="btn btn-primary">Modifier</a>
                                  <form action="{{ route('portfolio_destroy', $portfolio->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce projet ?')">Supprimer</button>
                                </form>
                                
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
