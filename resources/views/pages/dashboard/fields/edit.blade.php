@extends('base')

@section('content')

@endsection()

<form action="{{route('fields.update', $field->id)}}" method="POST">
    @csrf
    @method("PUT")
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>Veld aanpassen</h1>
    <div class="form-group">
        <label for="Veld">Veld naam:</label>
        <input type="number" value="{{$field->field_name}}" class="form-control" name="fieldName" placeholder="Veld naam">

    <button type="submit" class="btn btn-primary">Update</button>
</form>
