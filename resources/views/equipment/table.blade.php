<div class="table-responsive">
    <table class="table" id="equipment-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Mark</th>
        <th>Model</th>
        <th>Img</th>
        <th>About</th>
        <th>User Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($equipment as $equipment)
            <tr>
                <td>{{ $equipment->name }}</td>
            <td>{{ $equipment->mark }}</td>
            <td>{{ $equipment->model }}</td>
            <td>{{ $equipment->img }}</td>
            <td>{{ $equipment->about }}</td>
            <td>{{ $equipment->user_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['equipment.destroy', $equipment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('equipment.show', [$equipment->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('equipment.edit', [$equipment->id]) }}"
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
