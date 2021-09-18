<div class="table-responsive">
    <table class="table" id="equipmentStates-table">
        <thead>
        <tr>
            <th>State Id</th>
        <th>Equipment Id</th>
        <th>Note</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($equipmentStates as $equipmentStates)
            <tr>
                <td>{{ $equipmentStates->state_id }}</td>
            <td>{{ $equipmentStates->equipment_id }}</td>
            <td>{{ $equipmentStates->note }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['equipmentStates.destroy', $equipmentStates->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('equipmentStates.show', [$equipmentStates->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('equipmentStates.edit', [$equipmentStates->id]) }}"
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
