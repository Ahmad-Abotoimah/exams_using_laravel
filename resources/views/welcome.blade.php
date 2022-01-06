<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Quizer</title>
    <link rel="stylesheet" href={{asset('css/landing-style.css')}} />
    <link rel="stylesheet" href={{asset('css/signin.css')}}>

    <style>
        .person{
            transform: rotate(-4deg);
            margin-top: -14%;
        }
        .right{
            animation-duration: 1s;
        }
    </style>
</head>
<body>

<main>

    <div class="big-wrapper light">
        <img src={{asset('images/landing/shape.png')}} alt="" class="shape" />

        <header>
            <div class="container">
                <div class="logo">
                    <img src={{asset('images/landing/Capture.png')}} alt="Logo" />
                    <!-- <h3>Danvo in a new branch</h3> -->
                </div>
@if(!auth()->user())
                <div class="links">
                    <ul>

                        <li><a href='/login' class="btn">Sign In</a></li>
                        <li><a href="/register"  class="btn">Sign up</a></li>

                    </ul>
                </div>
@endif
                @if(auth()->user())
                @if(auth()->user()->role==='admin')
                <div class="links">
                    <ul>

                        <li><a href='/admooon' class="btn">dashboard</a></li>

                    </ul>
                </div>
@endif
@endif
                <div class="overlay"></div>

                <div class="hamburger-menu">
                    <div class="bar"></div>
                </div>
            </div>
        </header>

        <div class="showcase-area">
            <div class="container">
                <div class="left">
                    <div class="big-title">
                        <h1>FUll Stack Developer</h1>

                    </div>
                    <p class="text">
                        A full-stack web developer or engineer is needed to handle the development work of the ideal
                        candidate should?work with both the front and back ends of a website or application to tackle
                        projects that involve databases, building user-facing websites, or even work with
                        clients during the planning phase of projects.Full-stack web developer should be familiar with HTML, CSS, JavaScript
                    </p>
                    <div class="cta">
                        <a href={{route('cat')}} class="btn">Explore</a>
                    </div>
                </div>

                <div animate__animate animate__backInRight class="right">

                    <img src="{{asset('images/landing/kelwkf;f;ew.png')}}" alt="Person Image" class="person" />
                </div>
            </div>
        </div>

        <div class="bottom-area">
            <div class="container">
                <button class="toggle-btn">
                    <i class="far fa-moon"></i>
                    <i class="far fa-sun"></i>
                </button>
            </div>
        </div>
    </div>
</main>


<!-- JavaScript Files -->
<script>
    ////popUp////
    const registerNow=e=>{
        document.querySelector('.popUpSignUp1').style.display="flex";
        e.preventDefault()

    }
    const removePopup=e=>{
        document.querySelector('.popUpSignUp1').style.display="none";
    }

    ///////////popUp////
</script>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<script src={{asset('js/landing.js')}} ></script>
</body>

</html>
