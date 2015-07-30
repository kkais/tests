@extends('app')

@section('content')
<section>
	<head>
		<h1>Answers</h1>
		<hr>
	</head>
		<ul>
		@foreach($answers as $answer)
			<li><a href="{{ url('/answers',$answer->id) }}">{{ $answer->title }}</a> <a href="/answers/{{ $answer->id }}/edit"><i class="glyphicon glyphicon-pencil"></i></a></li>
		@endforeach	
		</ul>
	<footer></footer>
</section>
@stop