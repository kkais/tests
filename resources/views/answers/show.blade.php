@extends('app')

@section('content')
<article>
	<head>
		<h1>Answers</h1>
		<hr>
	</head>
		<ul>
			<li>{{ $answer->title }}</li>
		</ul>
	<footer></footer>
</article>
@stop