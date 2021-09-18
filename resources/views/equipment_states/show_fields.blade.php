<!-- State Id Field -->
<div class="col-sm-12">
    {!! Form::label('state_id', 'State Id:') !!}
    <p>{{ $equipmentStates->state_id }}</p>
</div>

<!-- Equipment Id Field -->
<div class="col-sm-12">
    {!! Form::label('equipment_id', 'Equipment Id:') !!}
    <p>{{ $equipmentStates->equipment_id }}</p>
</div>

<!-- Note Field -->
<div class="col-sm-12">
    {!! Form::label('note', 'Note:') !!}
    <p>{{ $equipmentStates->note }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $equipmentStates->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $equipmentStates->updated_at }}</p>
</div>

