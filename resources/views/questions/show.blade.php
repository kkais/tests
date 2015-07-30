@extends('app')

@section('content')
<article>
	<head>
		<h1>Questions</h1>
		<hr>
	</head>
		<ul>
			<li>{{ $question->title }}</li>
		</ul>
	<footer></footer>
</article>
@stop