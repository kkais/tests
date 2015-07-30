@extends('app')

@section('content')
<section>
	<head>
		<h1>Questions</h1>
		<hr>
	</head>
		<ul>
		@foreach($questions as $question)
			<li><a href="{{ url('/questions',$question->id) }}">{{ $question->title }}</a> <a href="/questions/{{ $question->id }}/edit"><i class="glyphicon glyphicon-pencil"></i></a></li>
		@endforeach	
		</ul>
	<footer></footer>
</section>
@stop