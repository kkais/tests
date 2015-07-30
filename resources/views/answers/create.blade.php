@extends('app')

@section('content')
<section>
	<header>
		<h1>Answers</h1>
		<hr>
	</header>
 	{!! Form::open(['url' => 'answers']) !!}
            @include('answers.partials.form', ['submitButtonText' => 'Add Answer'])
 	{!! Form::close() !!}
        
        @include('errors.list')
	<footer></footer>
</section> 
@stop