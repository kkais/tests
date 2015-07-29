@extends('app')

@section('content')
    <header><h1>Login</h1></header>
    {!! Form::open(['url'=>'auth/login']) !!}
    {!! csrf_field() !!}
    <div class="form-group">
        {!! Form::label('email','Email:') !!}
        {!! Form::text('email',null,['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('password','Password:') !!}
        {!! Form::password('password',['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('Login',['class' => 'form-control btn btn-primary']) !!}
    </div>
    
    {!! Form::close() !!}
    
    @include('errors.list');
    <footer></footer>
@stop