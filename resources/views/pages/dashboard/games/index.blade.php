@extends('base')

@section('content')
    @if(Auth::user()->admin == 1 )
        <a href="{{route('genereer')}}">Wedstrijden Genereren</a><br>
        <a href="{{route('allgames')}}">Overzicht specifiek veld</a>
    @endif
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
            @if (Auth::user()->admin == 1)
                <th scope="col">Wedstrijd wijzigen</th>
            @endif
        </tr>
        </thead>
        <tbody>
        @foreach($matches as $match)
            <tr>
                <td>{{$match->speeltijd}}</td>
                <td>{{$match->field_id}}</td>
                <td>{{\App\Models\Team::where('id','=',$match->team1_id)->get()[0]->name}}</td>
                <td>vs</td>
                <td>{{\App\Models\Team::where('id','=',$match->team2_id)->get()[0]->name}}</td>
                <td>{{\App\Models\User::where('id','=',$match->referee_id)->get()[0]->name}}</td>
{{--                @if(Auth::user()->admin == 1)--}}
                    <td><a href="{{route('games.edit',$match->id)}}">Wedstrijd wijzigen</a></td>
{{--                @endif--}}
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
                <td>{{$match->speeltijd}}</td>
                <td>{{$match->field_id}}</td>
                <td>{{\App\Models\Team::where('id','=',$match->team1_id)->get()[0]->name}}</td>
                <td>vs</td>
                <td>{{\App\Models\Team::where('id','=',$match->team2_id)->get()[0]->name}}</td>
                <td>{{$match->team1_score}} - {{$match->team2_score}}</td>
                <td>{{\App\Models\User::where('id','=',$match->referee_id)->get()[0]->name}}</td>
{{--                @if(Auth::user()->admin == 1)--}}
                    <td><a href="{{route('games.edit',$match->id)}}">Uitslag toevoegen</a></td>
{{--                @endif--}}
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
