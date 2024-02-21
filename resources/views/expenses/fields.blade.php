<!-- Shop Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shop_id', 'Shop Id:') !!}
    {!! Form::number('shop_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control','id'=>'date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date').datepicker()
    </script>
@endpush

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category', 'Category:') !!}
    {!! Form::text('category', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>