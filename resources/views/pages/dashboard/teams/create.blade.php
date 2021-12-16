@extends('base')

@section('content')
    <form action="{{route('teams.store')}}" method="POST">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1>Team aanmaken</h1>
        <div class="form-group">
            <label for="TeamNameInput">Team Naam:</label>
            <input type="text" class="form-control" name="TeamName" placeholder="Team naam">
        </div>

        <h2>Spelers toevoegen</h2>
        <div class="form-group">
            <label for="PlayerNameInput">Speler Naam:</label>
            <input type="text" class="form-control" name="PlayerName" placeholder="Speler naam">
        </div>
        <button type="submit" class="btn btn-primary">Aanmaken</button>
    </form>
@endsection
