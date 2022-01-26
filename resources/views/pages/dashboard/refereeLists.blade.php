@extends('base')

@section('content')
<h1>Rooster overzicht</h1>

@foreach($matches as $match)
    @if(Auth::user()->id == $match->referee_id)
        <table class="table table-danger">
            <h1>Opkomende Wedstrijden</h1>
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
            @if(Auth::user()->id == $match->referee_id)
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
            @endif
        @endforeach
        </tbody>
        </table>
    @endif
@endforeach
@endsection