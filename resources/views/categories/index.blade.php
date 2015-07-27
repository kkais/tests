@extends('app')

@section('content')
<section>
	<head>
		<h1>Categories</h1>
		<hr>
	</head>
		<ul>
		@foreach($categories as $category)
			<li><a href="{{ url('/cats',$category->id) }}">{{ $category->title }}</a> <a href="/cats/{{ $category->id }}/edit"><i class="glyphicon glyphicon-pencil"></i></a></li>
		@endforeach	
		</ul>
	<footer></footer>
</section>
@stop