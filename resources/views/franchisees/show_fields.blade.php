<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $franchisee->user_id }}</p>
</div>

<!-- Company Name Field -->
<div class="col-sm-12">
    {!! Form::label('company_name', 'Company Name:') !!}
    <p>{{ $franchisee->company_name }}</p>
</div>

<!-- Contact Info Field -->
<div class="col-sm-12">
    {!! Form::label('contact_info', 'Contact Info:') !!}
    <p>{{ $franchisee->contact_info }}</p>
</div>

