@extends('base')

@section('content')
    <form action="{{route('fields.store')}}" method="POST">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1>veld aanmaken</h1>
        <div class="form-group">
            <label for="fieldNameInput">veld Naam:</label>
            <input type="text" class="form-control" name="fieldName" placeholder="Veld naam">
        </div>

        <button type="submit" class="btn btn-primary">Aanmaken</button>
    </form>
@endsection()


