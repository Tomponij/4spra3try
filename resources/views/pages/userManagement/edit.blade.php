@extends('base')
@section('content')
<form method="post" action="{{route('accounts.update',$user->id)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="exampleFormControlInput1">Naam</label>
        <input type="text" value="{{$user->name}}" class="form-control" id="name" name='name' placeholder="henk piet">
    </div>

    @if(Auth::user()->admin == 1)
        <div class="form-group">
            <label for="admin">Admin |
                <input id="admin" type="checkbox" class="" name="admin" @if($user->admin == 1) checked @endif>
                <span class="">Admin</span>
            </label>
        </div>
    @endif

    <div class="form-group">
        <label for="submit">
            <input id="submit" type="submit" class="" name="submit"
        </label>
    </div>
</form>


@endsection
