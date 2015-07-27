@extends('app')

@section('content')
<section>
	<header>
		<h1>Categories</h1>
		<hr>
	</header>
 	{!! Form::model($category, ['method' => 'PATCH', 'action' => ['CategoriesController@update', $category->id]]) !!}
 		<div class="form-group">
			{!! Form::label('title','Title:') !!}
	 		{!! Form::text('title',null,['class' => 'form-control']) !!}
 		</div>
 		<div class="form-group">
	 		{!! Form::submit('Update Category',['class' => 'btn btn-primary form-control']) !!}
 		</div>
 	{!! Form::close() !!}
	<footer></footer>
</section> 
@stop