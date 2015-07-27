@extends('app')

@section('content')
<section>
	<head>
		<h1>Categories</h1>
		<hr>
	</head>
		<ul>
			<li>{{ $category->title }}</li>
		</ul>
	<footer></footer>
</section>
@stop