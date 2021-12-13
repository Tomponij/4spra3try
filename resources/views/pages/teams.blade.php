@extends('base')

@section('content')
    <h1>Teams overzicht</h1>
    <div class="list-group">
        @foreach($teams as $team)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a class="text-dark" href="">{{$team->name}}</a>
                <span class="badge badge-primary badge-pill"><a class="text-light p-3" href={{"delete/".$team['id']}}>Delete</a></span>
                <span class="badge badge-primary badge-pill"><a class="text-light p-3" href={{"s.update"}}>Update</a></span>
            </li>
        @endforeach
    </div>
@endsection
