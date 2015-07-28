@extends('app')

@section('content')
<section>
    <header>
        <h1>Categories</h1>
        <hr>
    </header>
 	{!! Form::model($category, ['method' => 'PATCH', 'action' => ['CategoriesController@update', $category->id]]) !!}
            @include('categories.partials.form', ['submitButtonText' => 'Update Category'])
 	{!! Form::close() !!}
        
        @include('errors.list')
    <footer></footer>
</section> 
@stop