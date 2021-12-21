@extends('base')

@section('content')
    <table class="table table-danger">
        <h1>Aankomende Wedstrijden</h1>
        <thead>
        <tr>
            <th scope="col">Tijd</th>
            <th scope="col">Veld</th>
            <th scope="col">Thuis team</th>
            <th scope="col">vs</th>
            <th scope="col">Uit team</th>
            <th scope="col">Stand</th>
        </tr>
        </thead>
        <tbody>
        @foreach($teams as $team)
            <tr>
                <td>{{$team->start_time}}</td>
                <td>{{$team->field_id}}</td>
                <td>{{$team->name}}</td>
                <td>vs</td>
                <td>{{$team->name}}</td>
                <td>{{$team->team1_score}} - {{$team->team2_score}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <table class="table table-danger">
        <h1>Gespeelden Wedstrijden</h1>
        <thead>
        <tr>
            <th scope="col">Tijd</th>
            <th scope="col">Veld</th>
            <th scope="col">Thuis team</th>
            <th scope="col">vs</th>
            <th scope="col">Uit team</th>
            <th scope="col">Stand</th>
        </tr>
        </thead>
        <tbody>
        @foreach($teams as $team)
            <tr>
                <td>{{$team->start_time}}</td>
                <td>{{$team->field_id}}</td>
                <td>{{$team->name}}</td>
                <td>vs</td>
                <td>{{$team->name}}</td>
                <td>{{$team->team1_score}} - {{$team->team2_score}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
