@extends('template') @section('title', 'Usuário - ') @section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Olá, {{'@'.$users->User}}
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
                <form class="form-group" method="post" action="{{('TwitterController@update')}}">

                    @csrf @include('form')
                    </br>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection