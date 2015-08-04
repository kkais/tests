@extends('app')

@section('content')
<section>
    <header>
        <h1>Quizzes</h1>
        <hr>
    </header>
    {!! Form::model($quiz, ['method' => 'PATCH', 'action' => ['QuizzesController@update', $quiz->id]]) !!}
        @include('quizzes.partials.form', ['submitButtonText' => 'Update Quiz'])
    {!! Form::close() !!}
    
    @include('errors.list')
    <footer></footer>
</section>
@stop