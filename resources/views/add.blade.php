@extends('template') @section('title', 'Cadastro - ') @section('content')

<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Cadastro
   </h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                @if(isset($alert))
                <div class="alert alert-primary" role="alert">
                    Dados salvos com sucesso!
                </div>
                @endif
                <form class="form-group" method="post" action="{{route('users.store')}}">

                    @csrf @include('form')
                    </br>
                    <button class="btn btn-outline-primary" type="submit">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection