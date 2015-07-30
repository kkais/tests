@extends('app')

@section('content')
<section>
	<header>
		<h1>Questions</h1>
		<hr>
	</header>
 	{!! Form::open(['url' => 'questions']) !!}
            @include('questions.partials.form', ['submitButtonText' => 'Add Question'])
 	{!! Form::close() !!}
        
        @include('errors.list')
	<footer></footer>
</section> 
@stop