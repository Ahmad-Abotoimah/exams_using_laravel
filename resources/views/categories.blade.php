
        @extends('layouts/app')
        @section('content')


            <div class="welcomeQuiz">

                <h3>Welcome<b style="font-size: 30px"> {{auth()->user()?auth()->user()->name:'Our Student'}} </b></h3>

            </div>


            <div class="grid-container">
                <div class="row row-cols-1 row-cols-md-4 g-4">

                @foreach($categories as $category)
                    <!-- first card -->
                        <div class="col-3">
                        <div class="card">
                            <img src='{{$category->img}}' alt="exam">
                            <div class="card-body">
                                <h5 class="card-title">{{$category->name}}</h5>
                                <a href='{{route('exams' , $category->id,$category->name)}}' class="btn btn-primary">Show Exams</a>

                            </div>
                        </div>
                        </div>
                    @endforeach


                </div>






@endsection
