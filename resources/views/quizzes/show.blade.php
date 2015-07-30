@extends('app')

@section('content')
<article>
	<head>
		<h1>Quizzes</h1>
		<hr>
	</head>
		<ul>
			<li>{{ $quiz->title }}</li>
		</ul>
	<footer></footer>
</article>
@stop

