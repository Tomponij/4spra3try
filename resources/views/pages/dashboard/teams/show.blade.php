@extends('base')

@section('content')

    <div class="container">
        <h1>Dashboard</h1>
        <h2 class="text-success">Teams detailpagina</h2>
        <hr>
        <h3>{{$team->name}}</h3>

        <div class="buttons">
            @if($team->creator_id == Auth::user()->id)
                <a href="{{route('teams.edit', $team->id)}}" class="btn btn-info">Aanpassen</a>
            @endif
            <form action="{{route('teams.destroy', $team->id)}}" method="post">
                @csrf
                @if($team->creator_id == Auth::user()->id)
                    @method('DELETE')
                    <input type="submit" value="Verwijderen" class="btn btn-danger">
                @endif
            </form>
        </div>
    </div>

@endsection
