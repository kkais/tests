@extends('app')

@section('content')
<article>
	<head>
		<h1>Category: {{ $category->title }}</h1>
		<hr>
	</head>
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

@unless($category->quizzes->isEmpty())
    <h5> {!! link_to('quizzes', 'Quizzes:') !!} </h5>
    <ul>
        @foreach($category->quizzes as $quiz)
        <li>{!! link_to("quizzes/{$quiz->id}", $quiz->title) !!}</li>
        @endforeach
    </ul>
@endunless

@stop