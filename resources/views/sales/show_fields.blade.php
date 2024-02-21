<!-- Shop Id Field -->
<div class="col-sm-12">
    {!! Form::label('shop_id', 'Shop Id:') !!}
    <p>{{ $sale->shop_id }}</p>
</div>

<!-- Date Field -->
<div class="col-sm-12">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $sale->date }}</p>
</div>

<!-- Total Sales Field -->
<div class="col-sm-12">
    {!! Form::label('total_sales', 'Total Sales:') !!}
    <p>{{ $sale->total_sales }}</p>
</div>

