<style>#user_avatar{background: url("/uploads/avatars/{{ $user->avatar }}");}</style>
@extends('master')

<title>Profil</title>

@section('contents')
<div class="panel panel-default">
<div class="panel-heading">Profil użytkownika</div>
    <div class="panel-body">
    @include('error_raports')
    <div class="row">
        
        <div class="col-xs-12 col-sm-3 col-md-9">
            <h2>{{ $user->name }} <small> {{ $user->email }}</small></h2>
            {!! Form::open(['action' => 'UserController@updateAvatar', 'method' => 'POST', 'enctype' => 'multipart/form-data',]) !!}

            
            {!! Form::close() !!}
        </div>
    </div>
    <hr>
    
    @include('profile.updatePasswordForm')

</div>
</div>
@endsection