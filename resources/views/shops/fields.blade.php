<!-- Franchisee Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('franchisee_id', 'Franchisee Id:') !!}
    {!! Form::number('franchisee_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>