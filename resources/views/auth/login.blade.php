@extends('app')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <section>
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

            @include('errors.list')
            <footer></footer>
        </section>
    </div>
</div>
@stop