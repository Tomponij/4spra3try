@extends('base')

@section('content')
    <h1>Users toevoegen voor een team</h1>
    @if(Auth::user()->referee == 0 and Auth::user()->admin == 0)
        <p><input type="checkbox"> {{Auth::user()->name}}</p>
    @endif
@endsection

