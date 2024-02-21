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

<!-- Total Sales Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_sales', 'Total Sales:') !!}
    {!! Form::number('total_sales', null, ['class' => 'form-control', 'required']) !!}
</div>