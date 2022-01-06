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
        @foreach($matches as $match)
            <tr>
                <td></td>
                <td>{{$match->field_id}}</td>
                <td>{{\App\Models\Team::where('id','=',$match->team1_id)->get()[0]->name}}</td>
                <td>vs</td>
                <td>{{\App\Models\Team::where('id','=',$match->team2_id)->get()[0]->name}}</td>
                <td></td>
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
        @foreach($matches as $match)
            <tr>
                <td></td>
                <td>{{$match->field_id}}</td>
                <td>{{\App\Models\Team::where('id','=',$match->team1_id)->get()[0]->name}}</td>
                <td>vs</td>
                <td>{{\App\Models\Team::where('id','=',$match->team2_id)->get()[0]->name}}</td>
                <td>{{$match->team1_score}} - {{$match->team2_score}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
