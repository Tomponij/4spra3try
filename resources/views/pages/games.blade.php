@extends('base')

@section('content')
    <table class="table table-danger">
        <h1>Nog te spelen toernooien</h1>
        <thead>
        <tr>
            <th scope="col">Tijd</th>
            <th scope="col">Thuis team</th>
            <th scope="col">vs</th>
            <th scope="col">Uit team</th>

        </tr>
        </thead>
        <tbody>
        @foreach($teams as $team)
            <tr>
                <th scope="row">{{$team->start_time}}</th>
                <td>{{$team->name}}</td>
                <td>vs</td>
                <td>{{$team->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <table class="table table-danger">
        <h1>Gespeelden toernooien</h1>
        <thead>
        <tr>
            <th scope="col">Tijd</th>
            <th scope="col">Thuis team</th>
            <th scope="col">vs</th>
            <th scope="col">Uit team</th>

        </tr>
        </thead>
        <tbody>
        @foreach($teams as $team)
            <tr>
                <th scope="row">{{$team->start_time}}</th>
                <td>{{$team->name}}</td>
                <td>vs</td>
                <td>{{$team->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
