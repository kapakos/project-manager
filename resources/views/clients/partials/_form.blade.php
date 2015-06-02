<div class="form-group">
    <div class="row">
        <div class="col-xs-2">
            {!! Form::label('name', 'Client Name:') !!}
        </div>
        <div class="col-xs-3">
            {!! Form::text('name', '', ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-xs-2">
            {!! Form::label('slug', 'Slug:') !!}
        </div>
        <div class="col-xs-3">
            {!! Form::text('slug', '', ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-xs-3 col-xs-push-2">
            {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
        </div>
    </div>
</div>