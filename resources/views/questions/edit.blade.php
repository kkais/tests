@extends('app')

@section('content')
<section>
    <header>
        <h1>Questions</h1>
        <hr>
    </header>
 	{!! Form::model($question, ['method' => 'PATCH', 'action' => ['QuestionsController@update', $question->id]]) !!}
            @include('questions.partials.form', ['submitButtonText' => 'Update Question'])
 	{!! Form::close() !!}
        
        @include('errors.list')
    <footer></footer>
</section> 
@stop