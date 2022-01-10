@extends('base')

@section('content')
    <div class="container">
        <h1 class="text-success">Dashboard</h1>
        <h2 class="text-danger">Velden overzicht</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Naam</th>
            </tr>
            </thead>
            <tbody>
            @foreach($fields as $field)
                <tr>
                    <td><a href="{{route('fields.show', $field->id)}}">{{$field->name}}</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{route('fields.create')}}" class="btn btn-primary">Nieuw veld aanmaken</a>
    </div>

@endsection



