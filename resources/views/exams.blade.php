
@extends('layouts/app')
@section('content')
<div class="grid-container">




        <div class="welcomeQuiz">

            <h3>Welcome<b style="font-size: 30px">{{auth()->user() ?"  ". auth()->user()->name:"Our Student please LogIN To Access Exams"}} </b>  {{$category->name}} <br>
            !</h3>

            <p>{{$category->desc}}</p>
        </div>

    <div class="row row-cols-1 row-cols-md-4 g-4 my-5">
@foreach($exams as $exam)
            <!-- first card -->
            <div class="col-3 ">
            <div class="card" style="width: 25rem;">
                <img src={{$exam->img}} alt="exam">
                <div class="card-body">
                    <h5 class="card-title">{{$exam->name}}</h5>
                    <p class="card-text">{{"TIME IN HOURS: ".$exam->time}}</p>
                    <small></small>
                    <a href="{{route('start',$exam->id)}}" id="hyperText" class="btn btn-primary quizBtn startQuiz">Start Quiz</a>

                </div>
            </div>
            </div>
@endforeach


        </div>





@endsection
