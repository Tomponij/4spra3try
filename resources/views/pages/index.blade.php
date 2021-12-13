@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-danger">
                    <thead>
                    <tr>
                        <th scope="col">Plaats</th>
                        <th scope="col">Team</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teams as $team)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{$team->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-7">
                <img src="{{asset("img/dashboardimg.jpg")}}" alt="img">
            </div>
        </div>
        <div class="row">

            <div class="col-7">
                <a href="">Naar wedstrijd schema</a>
            </div>
            <div class="col">
                Mijn team
            </div>
        </div>
    </div>
@endsection
