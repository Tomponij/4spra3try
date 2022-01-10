@extends('base')

@section('content')

    <form action="{{route('games.update', $game->id)}}" method="POST">
        @csrf
        @method("PUT")
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1>Score aanpassen</h1>
        <div class="form-group">
            <label for="Team1scoreInput">Score team 1:</label>
            <input type="number" value="{{$game->team1_score}}" class="form-control" name="team1Score" placeholder="team1Score">
        </div>
        <div class="form-group">
            <label for="Team2scoreInput">Score team 2:</label>
            <input type="number" value="{{$game->team2_score}}" class="form-control" name="team2Score" placeholder="team2Score">
        </div>

        <div class="form-group">
            <label for="field input">Veld aanpassen:</label>
            <input type="number" value="{{$game->field_name}}" class="form-control" name="fieldInput" placeholder="field input">
        </div>
        <button type="submit" class="btn btn-primary">Invullen</button>
    </form>


@endsection
