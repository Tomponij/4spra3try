@extends('base')

@section('content')
    <ul class="list-group list-group-flush">
        @foreach($users as $user)
            <li class="list-group-item"><a href="{{route('accounts.edit',$user->id)}}">{{$user->name}}</a> |

            </li>
        @endforeach
    </ul>
@endsection
