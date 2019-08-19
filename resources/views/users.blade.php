@extends('template') @section('title', 'Usuários - ') @section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Usuários</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->user_id}}</td>
                            <td>{{$user->User}}</td>
                            <td>{{$user->Name}}</td>
                            <td>{{$user->Lastname}}</td>
                            <td>
                                <button class="btn btn-outline-primary" onclick="window.location='{{ route('painel.show', [$user->user_id])}}'">Detalhes
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection