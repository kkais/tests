@extends('app')

@section('content')
<section>
	<header>
		<h1>Categories</h1>
		<hr>
	</header>
 	{!! Form::open(['url' => 'cats']) !!}
            @include('categories.partials.form', ['submitButtonText' => 'Add Category'])
 	{!! Form::close() !!}
        
        @include('errors.list')
	<footer></footer>
</section> 
@stop