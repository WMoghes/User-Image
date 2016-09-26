@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img src="{{ URL::to('public/uploads/avatars/' . $user->avatar)}}" style="display: inline-block;
width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;">
                <h2>{{ $user->name }} Profile</h2>
                {!! Form::open(['route' => 'profile','enctype' => 'multipart/form-data']) !!}
                {!! Form::label('user-image', 'Upload User Profile') !!}
                {!! Form::file('avatar') !!}
                {!! Form::submit('Upload', ['class' => 'pull-right btn btn-sm btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
