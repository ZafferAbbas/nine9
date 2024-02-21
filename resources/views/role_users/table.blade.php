<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="role-users-table">
            <thead>
            <tr>
                <th>Role Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roleUsers as $roleUser)
                <tr>
                    <td>{{ $roleUser->role_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['roleUsers.destroy', $roleUser->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('roleUsers.show', [$roleUser->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('roleUsers.edit', [$roleUser->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $roleUsers])
        </div>
    </div>
</div>
