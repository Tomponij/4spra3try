@extends('base')

@section('content')
    <div class="container">
        <h1>Dashboard</h1>
        <h2>Teams overzicht</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Naam</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teams as $team)
                <tr>
                    <td><a href="{{route('teams.show', $team->id)}}">{{$team->name}}</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{route('teams.create')}}" class="btn btn-primary">Nieuw team aanmaken</a>
    </div>
@endsection
