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
            <th scope="col">Scheidsrechter</th>
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
                <td>{{\App\Models\User::where('id','=',$match->referee_id)->get()[0]->name}}</td>
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
            <th scope="col">Scheidsrechter</th>
            @if(Auth::user()->admin == 1)
                <th scope="col">Uitslag invullen</th>
            @endif


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
                <td>{{\App\Models\User::where('id','=',$match->referee_id)->get()[0]->name}}</td>
                <td><a href="{{route('games.edit',$match->id)}}">Uitslag toevoegen</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
