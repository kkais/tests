@extends('app')

@section('content')
<article>
	<head>
		<h1>Categories</h1>
		<hr>
	</head>
		<ul>
			<li>{{ $category->title }}</li>
		</ul>
	<footer></footer>
</article>
@stop