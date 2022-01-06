@extends('layouts/app')
@section('content')


    <div align="center" style="vertical-align:bottom">
        <div align="center" style="vertical-align:bottom">
            <table class=" cont  table align-middle table-light  w-75 table-bordered border-info table-striped table-hover my-5">

                <thead class="table-info centerText ">
                <tr>
                    <th>Questions</th>
                    <th>Your answer</th>
                    <th>Correct answer</th>
                </tr>
                </thead>
                <tbody>
                @if(@isset($questions[0]))
                <tr>
                <td>
                   <div> {{"Q1 ".$questions[0]->question .": "}}</div>
                    <div> 1){{$questions[0]->first}}</div>
                    <div> 2){{$questions[0]->second}}</div>
                    <div> 3){{$questions[0]->third}}</div>
                    <div> 4){{$questions[0]->forth}}</div>
                </td>
                <td style="color:{{(session('firstAnswer') === $questions[0]->correct)? '#8bc34a':'Red'}}">
                    {{session('firstAnswer')}}
                </td>
                <td>
                    {{$questions[0]->correct}}
                </td>
                </tr>
                @endif
                @if(@isset($questions[1]))
                <tr>
                <td>
                   <div> {{"Q2 ".$questions[1]->question .": "}}</div>
                    <div> 1){{$questions[1]->first}}</div>
                    <div> 2){{$questions[1]->second}}</div>
                    <div> 3){{$questions[1]->third}}</div>
                    <div> 4){{$questions[1]->forth}}</div>
                </td>
                <td style="color:{{(session('secondAnswer') === $questions[1]->correct)? '#8bc34a':'Red'}}">
                    {{session('secondAnswer')}}
                </td>
                <td>
                    {{$questions[1]->correct}}
                </td>
                </tr>
                @endif
                @if(@isset($questions[2]))
                <tr>
                <td>
                   <div> {{"Q3 ".$questions[2]->question .": "}}</div>
                    <div> 1){{$questions[2]->first}}</div>
                    <div> 2){{$questions[2]->second}}</div>
                    <div> 3){{$questions[2]->third}}</div>
                    <div> 4){{$questions[2]->forth}}</div>
                </td>
                <td style="color:{{(session('thirdAnswer') === $questions[2]->correct)? '#8bc34a':'Red'}}">
                    {{session('thirdAnswer')}}
                </td>
                <td>
                    {{$questions[2]->correct}}
                </td>
                </tr>
                @endif

                @if(@isset($questions[3]))
                <tr>
                <td>
                   <div> {{"Q4 ".$questions[3]->question .": "}}</div>
                    <div> 1){{$questions[3]->first}}</div>
                    <div> 2){{$questions[3]->second}}</div>
                    <div> 3){{$questions[3]->third}}</div>
                    <div> 4){{$questions[3]->forth}}</div>
                </td>
                <td style="color:{{(session('forthAnswer') === $questions[3]->correct)? '#8bc34a':'Red'}}">
                    {{session('thirdAnswer')}}
                </td>
                <td>
                    {{$questions[3]->correct}}
                </td>
                </tr>
                @endif
                @if(@isset($questions[4]))
                <tr>
                <td>
                   <div> {{"Q5 ".$questions[4]->question .": "}}</div>
                    <div> 1){{$questions[4]->first}}</div>
                    <div> 2){{$questions[4]->second}}</div>
                    <div> 3){{$questions[4]->third}}</div>
                    <div> 4){{$questions[4]->forth}}</div>
                </td>
                <td style="color:{{(session('fifthAnswer') === $questions[4]->correct)? '#8bc34a':'Red'}}">
                    {{session('fifthAnswer')}}
                </td>
                <td>
                    {{$questions[4]->correct}}
                </td>
                </tr>
                @endif
                @if(@isset($questions[5]->question))
                <tr>
                <td>
                   <div> {{"Q6 ".$questions[5]->question .": "}}</div>
                    <div> 1){{$questions[5]->first}}</div>
                    <div> 2){{$questions[5]->second}}</div>
                    <div> 3){{$questions[5]->third}}</div>
                    <div> 4){{$questions[5]->forth}}</div>
                </td>
                <td style="color:{{(session('sixthAnswer') === $questions[5]->correct)? '#8bc34a':'Red'}}">
                    {{session('sixthAnswer')}}
                </td>
                <td>
                    {{$questions[5]->correct}}
                </td>
                </tr>
                @endif
                @if(@isset($questions[6]))
                <tr>
                <td>
                   <div> {{"Q7 ".$questions[6]->question .": "}}</div>
                    <div> 1){{$questions[6]->first}}</div>
                    <div> 2){{$questions[6]->second}}</div>
                    <div> 3){{$questions[6]->third}}</div>
                    <div> 4){{$questions[6]->forth}}</div>
                </td>
                <td style="color:{{(session('seventhAnswer') === $questions[6]->correct)? '#8bc34a':'Red'}}">
                    {{session('seventhAnswer')}}
                </td>
                <td>
                    {{$questions[6]->correct}}
                </td>
                </tr>
                @endif
                @if(@isset($questions[7]))
                <tr>
                <td>
                   <div> {{"Q8 ".$questions[7]->question .": "}}</div>
                    <div> 1){{$questions[7]->first}}</div>
                    <div> 2){{$questions[7]->second}}</div>
                    <div> 3){{$questions[7]->third}}</div>
                    <div> 4){{$questions[7]->forth}}</div>
                </td>
                <td style="color:{{(session('eighthAnswer') === $questions[7]->correct)? '#8bc34a':'Red'}}">
                    {{session('eighthAnswer')}}
                </td>
                <td>
                    {{$questions[7]->correct}}
                </td>
                </tr>
                @endif
                @if(@isset($questions[8]))
                <tr>
                <td>
                   <div> {{"Q9 ".$questions[8]->question .": "}}</div>
                    <div> 1){{$questions[8]->first}}</div>
                    <div> 2){{$questions[8]->second}}</div>
                    <div> 3){{$questions[8]->third}}</div>
                    <div> 4){{$questions[8]->forth}}</div>
                </td>
                <td style="color:{{(session('ninthAnswer') === $questions[8]->correct)? '#8bc34a':'Red'}}">
                    {{session('ninthAnswer')}}
                </td>
                <td>
                    {{$questions[8]->correct}}
                </td>
                </tr>
                @endif
                @if(@isset($questions[9]))
                <tr>
                <td>
                   <div> {{"Q10 ".$questions[9]->question .": "}}</div>
                    <div> 1){{$questions[9]->first}}</div>
                    <div> 2){{$questions[9]->second}}</div>
                    <div> 3){{$questions[9]->third}}</div>
                    <div> 4){{$questions[9]->forth}}</div>
                </td>
                <td style="color:{{(session('tenthAnswer') === $questions[9]->correct)? '#8bc34a':'Red'}}">
                    {{session('tenthAnswer')}}
                </td>
                <td>
                    {{$questions[9]->correct}}
                </td>
                </tr>
                @endif

                </tbody>

            </table>
        </div>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @if($res>(0.5*$questions[0]->exam->exam_mark))
        <script>
            Swal.fire({
                title: 'Nice!',
                text: 'You Are Pass..',
                imageUrl: 'https://cdn.discordapp.com/attachments/899293191960936492/928417613539868713/pass-removebg-preview_1.png',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
            })
        </script>
            @else
            <script>
                Swal.fire({
                    title: 'Sorry',
                    text: 'You Are Failed..',
                    imageUrl: 'https://cdn.discordapp.com/attachments/899293191960936492/928422901462491136/failed-removebg-preview.png',
                    imageWidth: 400,
                    imageHeight: 200,
                    imageAlt: 'Custom image',
                })
            </script>
    @endif
@endsection

