<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Company Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_name', 'Company Name:') !!}
    {!! Form::text('company_name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Contact Info Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('contact_info', 'Contact Info:') !!}
    {!! Form::textarea('contact_info', null, ['class' => 'form-control', 'required', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>