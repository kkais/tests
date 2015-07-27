@extends('app')

@section('content')
@unles
@endless
@foreach
@foreelse
@endforeach
@if ($first == 'Khurrams') 
	<h1>About {{ $first }} {{ $last }}</h1>
@else
	<h1>Bio of {{ $first }} {{ $last }}</h1>
@endif
<br>
<p>Here it is printed as an unescaped variable {!! $last !!}.</p>
@stop
