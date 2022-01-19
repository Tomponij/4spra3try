@extends('base')

@section('content')
    <div class="container">
        <h1 class="text-success">Dashboard</h1>
        <h2 class="text-danger">Teams overzicht</h2>
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
        @if($games->count() == 0)
            <a href="{{route('teams.create')}}" class="btn btn-primary">Nieuw team aanmaken</a>
        @else
            <p>Er zijn al wedstrijden aangemaakt.</p>
        @endif

    </div>
@endsection
