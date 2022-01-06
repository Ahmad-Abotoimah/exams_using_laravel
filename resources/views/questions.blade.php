<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href={{asset('css/quiz.css')}}>
    <title>Quiz</title>
</head>
<body>
<!-- //quiz information ///// -->
<!-- //// -->
<div class="quiz-container">
    <div class="quiz-header" id="quiz">
        @if(!@isset($status)&&count($questions)>0)
            <h1>question1:{{" ".$questions[0]->question." ".$questions[0]->mark}}</h1>
            <form action="{{route('question1')}}" method="post">
                @csrf
                <div class="form-check">
                    <input type="hidden" name="answer" value="" />
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios1" value="{{$questions[0]->first}}" required>
                    <label class="form-check-label" for="exampleRadios1">
                        {{$questions[0]->first}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[0]->second}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[0]->second}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[0]->third}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[0]->third}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[0]->forth}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[0]->forth}}
                    </label>
                </div>

                @if(count($questions)===1)
                    <button type="submit" class="btn btn-danger">Submit</button>
                @else
                    <button type="submit" class="btn btn-primary">Next</button>
                @endif

            </form>
        @endif
        @if(@isset($status)&&$status===1&&count($questions)>1)
            <h1>question2:{{" ".$questions[1]->question." ".$questions[1]->mark}}</h1>
            <form action="{{route('question2')}}" method="post">
                @csrf
                <div class="form-check">
                    <input type="hidden" name="answer" value="" />
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios1" value="{{$questions[1]->first}}" required>
                    <label class="form-check-label" for="exampleRadios1">
                        {{$questions[1]->first}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[1]->second}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[1]->second}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[1]->third}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[1]->third}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[1]->forth}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[1]->forth}}
                    </label>
                </div>

                @if(count($questions)===2)
                    <button type="submit" class="btn btn-danger">Submit</button>
                @else
                    <button type="submit" class="btn btn-primary">Next</button>
                @endif
            </form>
        @endif
        @if(@isset($status)&&$status===2&&count($questions)>2)
            <h1>question1:{{" ".$questions[2]->question." ".$questions[2]->mark}}</h1>
            <form action="{{route('question3')}}" method="post">
                @csrf
                <div class="form-check">
                    <input type="hidden" name="answer" value="" />
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios1" value="{{$questions[2]->first}}" required>
                    <label class="form-check-label" for="exampleRadios1">
                        {{$questions[2]->first}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[2]->second}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[2]->second}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[2]->third}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[2]->third}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[2]->forth}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[2]->forth}}
                    </label>
                </div>

                @if(count($questions)===3)
                    <button type="submit" class="btn btn-danger">Submit</button>
                @else
                    <button type="submit" class="btn btn-primary">Next</button>
                @endif
            </form>
        @endif
        @if(@isset($status)&&$status===3&&count($questions)>3)
            <h1>question1:{{" ".$questions[3]->question." ".$questions[3]->mark}}</h1>
            <form action="{{route('question4')}}" method="post">
                @csrf
                <div class="form-check">
                    <input type="hidden" name="answer" value="" />
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios1" value="{{$questions[3]->first}}" required>
                    <label class="form-check-label" for="exampleRadios1">
                        {{$questions[3]->first}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[3]->second}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[3]->second}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[3]->third}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[3]->third}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[3]->forth}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[3]->forth}}
                    </label>
                </div>

                @if(count($questions)===4)
                    <button type="submit" class="btn btn-danger">Submit</button>
                @else
                    <button type="submit" class="btn btn-primary">Next</button>
                @endif
            </form>
        @endif
        @if(@isset($status)&&$status===4&&count($questions)>4)
            <h1>question1:{{" ".$questions[4]->question." ".$questions[4]->mark}}</h1>
            <form action="{{route('question5')}}" method="post">
                @csrf
                <div class="form-check">
                    <input type="hidden" name="answer" value="" />
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios1" value="{{$questions[4]->first}}" required>
                    <label class="form-check-label" for="exampleRadios1">
                        {{$questions[4]->first}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[4]->second}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[4]->second}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[4]->third}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[4]->third}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[4]->forth}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[4]->forth}}
                    </label>
                </div>

                @if(count($questions)===5)
                    <button type="submit" class="btn btn-danger">Submit</button>
                @else
                    <button type="submit" class="btn btn-primary">Next</button>
                @endif
            </form>
        @endif
        @if(@isset($status)&&$status===5&&count($questions)>5)
            <h1>question1:{{" ".$questions[5]->question." ".$questions[5]->mark}}</h1>
            <form action="{{route('question6')}}" method="post">
                @csrf
                <div class="form-check">
                    <input type="hidden" name="answer" value="" />
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios1" value="{{$questions[5]->first}}" required>
                    <label class="form-check-label" for="exampleRadios1">
                        {{$questions[5]->first}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[5]->second}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[5]->second}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[5]->third}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[5]->third}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[5]->forth}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[5]->forth}}
                    </label>
                </div>

                @if(count($questions)===6)
                    <button type="submit" class="btn btn-danger">Submit</button>
                @else
                    <button type="submit" class="btn btn-primary">Next</button>
                @endif
            </form>
        @endif
        @if(@isset($status)&&$status===6&&count($questions)>6)
            <h1>question1:{{" ".$questions[6]->question." ".$questions[6]->mark}}</h1>
            <form action="{{route('question7')}}" method="post">
                @csrf
                <div class="form-check">
                    <input type="hidden" name="answer" value="" />
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios1" value="{{$questions[6]->first}}" required>
                    <label class="form-check-label" for="exampleRadios1">
                        {{$questions[6]->first}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[6]->second}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[6]->second}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[6]->third}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[6]->third}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[6]->forth}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[6]->forth}}
                    </label>
                </div>

                @if(count($questions)===7)
                    <button type="submit" class="btn btn-danger">Submit</button>
                @else
                    <button type="submit" class="btn btn-primary">Next</button>
                @endif
            </form>
        @endif
        @if(@isset($status)&&$status===7&&count($questions)>7)
            <h1>question1:{{" ".$questions[7]->question." ".$questions[7]->mark}}</h1>
            <form action="{{route('question8')}}" method="post">
                @csrf
                <div class="form-check">
                    <input type="hidden" name="answer" value="" />
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios1" value="{{$questions[7]->first}}" required>
                    <label class="form-check-label" for="exampleRadios1">
                        {{$questions[7]->first}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[7]->second}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[7]->second}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[7]->third}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[7]->third}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[7]->forth}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[7]->forth}}
                    </label>
                </div>

                @if(count($questions)===8)
                    <button type="submit" class="btn btn-danger">Submit</button>
                @else
                    <button type="submit" class="btn btn-primary">Next</button>
                @endif
            </form>
        @endif
        @if(@isset($status)&&$status===8&&count($questions)>8)
            <h1>question1:{{" ".$questions[8]->question." ".$questions[8]->mark}}</h1>
            <form action="{{route('question9')}}" method="post">
                @csrf
                <div class="form-check">
                    <input type="hidden" name="answer" value="" />
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios1" value="{{$questions[8]->first}}" required>
                    <label class="form-check-label" for="exampleRadios1">
                        {{$questions[8]->first}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[8]->second}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[8]->second}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[8]->third}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[8]->third}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[8]->forth}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[8]->forth}}
                    </label>
                </div>

                @if(count($questions)===9)
                    <button type="submit" class="btn btn-danger">Submit</button>
                @else
                    <button type="submit" class="btn btn-primary">Next</button>
                @endif
            </form>
        @endif
        @if(@isset($status)&&$status===9&&count($questions)>9)
            <h1>question1:{{" ".$questions[9]->question." ".$questions[9]->mark}}</h1>
            <form action="{{route('question10')}}" method="post">
                @csrf
                <div class="form-check">
                    <input type="hidden" name="answer" value="" />
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios1" value="{{$questions[9]->first}}" required>
                    <label class="form-check-label" for="exampleRadios1">
                        {{$questions[9]->first}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[9]->second}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[9]->second}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[9]->third}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[9]->third}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$questions[9]->forth}}">
                    <label class="form-check-label" for="exampleRadios2">
                        {{$questions[9]->forth}}
                    </label>
                </div>

                @if(count($questions)===10)
                    <button type="submit" class="btn btn-danger">Submit</button>
                @else
                    <button type="submit" class="btn btn-primary">Next</button>
                @endif
            </form>
        @endif
    </div>
</div>
<!-- //End quiz information ///// -->

<!-- // Start pop up result////// -->
<div onclick="reloadWindow(event)" class="backContainer">
    <div class="quiz-container2">
        <h2 class="correctAnswer1">
            <p> <span style='font-size:50px;'>&#128512;</span> Good Job <mark>
                    Esraa </mark> ! </p>
            You answered correctly 5 out 5 questions.
        </h2>
        <div class="twoBtn">
            <a id="resultPage2" href="result.html"> <button class="resultStyle" id="submit2"
                                                            type="submit">Next</button></a>
            <button id="reload" onclick="reloadPage(event)" class="resultStyle">Reload</button>
        </div>
    </div>
</div>
<!-- //End pop up result////// -->


<script src="js/quiz.js"></script>
</body>

</html>

