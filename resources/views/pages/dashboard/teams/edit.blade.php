@extends('base')

@section('content')
    <form action="{{route('teams.update', $team->id)}}" method="POST">
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
        <h1>Team aanmaken</h1>
        <div class="form-group">
            <label for="TeamNameInput">Team Naam:</label>
            <input type="text" value="{{$team->name}}" class="form-control" name="TeamName" placeholder="Team naam">
        </div>
        <button type="submit" class="btn btn-primary">Aanmaken</button>
    </form>
@endsection
