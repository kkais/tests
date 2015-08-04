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
    {!! Form::label('tag_list', 'Tags') !!}
    {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

@section('footer')
<script>
$('#tag_list').select2({
    placeholder: 'Choose a tag' /*,
    tags: true,
    ajax: {
        dataType: 'json',
        url: 'api/tags',
        delay: 250,
        data: function(params) {
            return {
                q: params.term
            }
        },
        processResults: function(data){
            
            return {results:data}
        }
    }*/
    /*data: [
        {id:1, text:'one'},
        {id:2, text:'two'}
    ]*/
});
</script>
@stop