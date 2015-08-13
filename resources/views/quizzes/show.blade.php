@extends('app')

@section('content')
    <article>
            <head>
                    <h1>Quiz: {{ $quiz->title }}</h1>
                    <hr>
            </head>
            <h5>{!! link_to("cats", 'Categories:') !!}</h5>
                    <ul>
                        <li> Category: {!! link_to("cats/{$quiz->category->id}", $quiz->category->title) !!}</li>
                    </ul>
            <footer></footer>
    </article>

    @unless($quiz->questions->isEmpty())
        <h5>{!! link_to("questions", 'Questions:') !!}</h5>
        <ul>
        @foreach($quiz->questions as $question)
            <li>{!! link_to("questions/{$question->id}", $question->title) !!}</li>
        @endforeach
        </ul>
    @endunless

@stop

