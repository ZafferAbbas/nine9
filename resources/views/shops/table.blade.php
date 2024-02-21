<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="shops-table">
            <thead>
            <tr>
                <th>Franchisee Id</th>
                <th>Name</th>
                <th>Location</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($shops as $shop)
                <tr>
                    <td>{{ $shop->franchisee_id }}</td>
                    <td>{{ $shop->name }}</td>
                    <td>{{ $shop->location }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['shops.destroy', $shop->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('shops.show', [$shop->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('shops.edit', [$shop->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $shops])
        </div>
    </div>
</div>
