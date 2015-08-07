{!! csrf_field() !!}
<div class="form-group">
    {!! Form::label('title','Title:') !!}
    {!! Form::text('title',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at','Publish On:') !!}
    {!! Form::input('date','published_at',date('Y-m-d'),['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('cat_list','Category:') !!}
    {!! Form::select('cat_list', $cats, null, ['id' => 'cat_list', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>