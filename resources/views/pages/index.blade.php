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
                <h4>Mijn team</h4>
                <table class="table table-danger">
                    <thead>
                    <tr>
                        <th scope="col">nummer</th>
                        <th scope="col">speler</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>speler</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>speler</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>speler</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>speler</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>speler</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
