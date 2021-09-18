<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $equipment->name }}</p>
</div>

<!-- Mark Field -->
<div class="col-sm-12">
    {!! Form::label('mark', 'Mark:') !!}
    <p>{{ $equipment->mark }}</p>
</div>

<!-- Model Field -->
<div class="col-sm-12">
    {!! Form::label('model', 'Model:') !!}
    <p>{{ $equipment->model }}</p>
</div>

<!-- Img Field -->
<div class="col-sm-12">
    {!! Form::label('img', 'Img:') !!}
    <p>{{ $equipment->img }}</p>
</div>

<!-- About Field -->
<div class="col-sm-12">
    {!! Form::label('about', 'About:') !!}
    <p>{{ $equipment->about }}</p>
</div>

<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $equipment->user_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $equipment->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $equipment->updated_at }}</p>
</div>

