@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#CACACA;color:#FFF"><h2>Dashboard de administradores</h2></div>

                <div class="panel-body">
                    <h1>
                        Hola {!! $user->first_name !!}
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
