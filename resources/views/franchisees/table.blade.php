<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="franchisees-table">
            <thead>
            <tr>
                <th>User Id</th>
                <th>Company Name</th>
                <th>Contact Info</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($franchisees as $franchisee)
                <tr>
                    <td>{{ $franchisee->user_id }}</td>
                    <td>{{ $franchisee->company_name }}</td>
                    <td>{{ $franchisee->contact_info }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['franchisees.destroy', $franchisee->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('franchisees.show', [$franchisee->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('franchisees.edit', [$franchisee->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $franchisees])
        </div>
    </div>
</div>
