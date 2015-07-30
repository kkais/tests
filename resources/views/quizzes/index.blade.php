@extends('app')

@section('content')
<section>
    <header>
        <h1>Quizes</h1>
        <hr>
    </header>
    @if($quizzes)
    <ul>
        @foreach($quizzes as $quiz)
        <li><a href="{{ url('/quizzes',$quiz->id) }}">{{ $quiz->title }}</a> <a href="{{ action('QuizzesController@edit', $quiz->id) }}"><i class=" glyphicon glyphicon-pencil"></i></a></li>
        @endforeach
    </ul>
    
    @endif
    <footer></footer>
</section>
@stop
