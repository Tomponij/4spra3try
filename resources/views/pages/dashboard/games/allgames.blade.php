@extends('base')

@section('content')
    <form action="" method="get">
    <label for="field">Veld veranderen:</label>
    <select name="field" id="field">
        <option> - Kies je veld - </option>
        @foreach($fields as $field)
            <option value="field_id">{{$field->name}}</option>
        @endforeach
    </select><br><br>
    <button type="submit" value="filter" class="btn btn-primary">Veld veranderen</button>
    </form><br>

{{--    @foreach($matches as $match)--}}
        <table class="table table-danger">
            <thead>
            <tr>
                <th scope="col">Tijd</th>
                <th scope="col">Thuis team</th>
                <th scope="col">vs</th>
                <th scope="col">Uit team</th>
            </tr>
            </thead>
            <tbody>
            @foreach($matches as $match)
                <tr>
                    <td>{{$match->speeltijd}}</td>
                    <td>{{\App\Models\Team::where('id','=',$match->team1_id)->get()[0]->name}}</td>
                    <td>vs</td>
                    <td>{{\App\Models\Team::where('id','=',$match->team2_id)->get()[0]->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
{{--    @endforeach--}}

@endsection
