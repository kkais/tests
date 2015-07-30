@extends('app')

@section('content')
<section>
    <header>
        <h1>Answers</h1>
        <hr>
    </header>
 	{!! Form::model($answer, ['method' => 'PATCH', 'action' => ['AnswersController@update', $answer->id]]) !!}
            @include('answers.partials.form', ['submitButtonText' => 'Update Answer'])
 	{!! Form::close() !!}
        
        @include('errors.list')
    <footer></footer>
</section> 
@stop