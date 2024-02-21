<!-- Shop Id Field -->
<div class="col-sm-12">
    {!! Form::label('shop_id', 'Shop Id:') !!}
    <p>{{ $expense->shop_id }}</p>
</div>

<!-- Date Field -->
<div class="col-sm-12">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $expense->date }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $expense->amount }}</p>
</div>

<!-- Category Field -->
<div class="col-sm-12">
    {!! Form::label('category', 'Category:') !!}
    <p>{{ $expense->category }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $expense->description }}</p>
</div>

