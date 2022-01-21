@extends('base')

@section('content')

    <div class="container">
        <h1>Dashboard</h1>
        <h2 class="text-success">Teams detailpagina</h2>
        <hr>
        <h3>Team naam: {{$team->name}}</h3>
        <hr>
        <h3>Speler namen:</h3>
        <h4>{{$team->PlayerName}}</h4>

        <div class="buttons">
            @if(Auth::user()->admin == 1 or Auth::user()->id == $team->creator_id)
                <a href="{{route('teams.edit', $team->id)}}" class="btn btn-info">Aanpassen</a>
            @endif
            <form action="{{route('teams.destroy', $team->id)}}" method="post">
                @csrf
                @if($team->creator_id == Auth::user()->id)
                    @method('DELETE')
                    <input type="submit" value="Verwijderen" class="btn btn-danger">
                @endif
                @foreach($users as $user)
                    @if($user->referee == 0 and $user->admin == 0)
                        <p><input type="checkbox"> {{ $user->name }}</p>
                    @endif
                @endforeach
            </form>
        </div>
    </div>

@endsection
