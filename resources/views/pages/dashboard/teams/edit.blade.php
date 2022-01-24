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
        <div class="form-group">
            <label for="PlayerNameInput">Speler Naam:</label>
{{--            <input type="text" value="{{$team->SpelersName}}" class="form-control" name="SpelersName" placeholder="Speler naam">--}}
            <select style="width: 100%;" class="js-example-basic-multiple" multiple="multiple" name="userIds[]">
                @foreach($users as $user)
                    @if($user->referee == 0 and $user->admin == 0)
                        <option name="SpelersName">{{$user->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Updaten</button>
    </form>
@endsection
