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
@unless($category->tags->isEmpty())
    <h5>Tags: </h5>
    <ul>
        @foreach($category->tags as $tag)
        <li>{{ $tag->name }}</li>
        @endforeach
    </ul>
@endunless

@stop