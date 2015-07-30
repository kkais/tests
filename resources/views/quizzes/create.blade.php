@extends('app')

@section('content')
<section>
    <header>
        <h1>Quizzes</h1>
        <hr>
    </header>
    {!! Form::open([ 'url' => 'quizzes' ]) !!}
        @include('quizzes.partials.form', ['submitButtonText' => 'Add Quiz'])
    {!! Form::close() !!}
    
    @include('errors.list')
    <footer></footer>
</section>
@stop