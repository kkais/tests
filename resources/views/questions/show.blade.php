@extends('app')

@section('content')
<article>
    <head>
        <h1>Question: {{ $question->title }}</h1>
        <hr>
    </head>
    <footer></footer>
</article>
<ul>
    <li>Quiz: {!! link_to("quizzes/{$question->quiz->id}",$question->quiz->title) !!}</li>
</ul>

@stop