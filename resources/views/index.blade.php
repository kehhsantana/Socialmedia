@extends('template') @section('title', 'Painel - Mídias Sociais ') @section('content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Painel
    </h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    </ul>
</div>

<div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
    <div class="info">
        <h4>Users</h4>
        <p><b>{{count($users)}}</b></p>
    </div>
</div>

@endsection