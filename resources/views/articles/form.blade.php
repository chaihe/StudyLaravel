<div class="form-group">
    {!! Form::label('title') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('content') !!}
    {!! Form::textarea('content',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at','published_at:') !!}
    {!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control']) !!}
</div>