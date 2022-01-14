@extends('base')

@section('content')
    <h1>Users toevoegen voor aan team</h1>
    @if(Auth::user()->user = 0 and name)
        <p>{{}}</p>
    @endif
@endsection
