<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        
            html, body {
                background-color:lightcyan;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 15vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                
                top: 18px;
            }

            .content {
                text-align:right;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color:lightslategray;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .mySlides {display:none; margin: 0px auto;}
            .w3-left, .w3-right, .w3-badge {cursor:pointer}
            .w3-badge {height:13px;width:13px;padding:0}
        </style>
    </head>
    <body>

        <div class="card body">
             @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @elseif(Session::has('flash_message'))
                            <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> 
                                {!! session('flash_message') !!}</em></div>

                        @endif
            </div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a> 
                        <a href="{{ url('/books') }}">Go To Library</a>
                    @else
                        <a href="{{ url('login') }}">Login</a>
                        <a href="{{ url('register') }}">Register</a>
                        
                    @endauth
                </div>
            @endif
        </div>
        <div class="w3-content w3-display-container" style="margin: 5px auto; width:1100px; height:500px;text-align:center;">
            <img class="mySlides" src="/images/1.jpg" style="width:668px;height: 476px">
            <img class="mySlides" src="/images/2.jpg" style="width:668px;height: 476px">
            <img class="mySlides" src="/images/3.jpg" style="width:668px;height: 476px">
            <img class="mySlides" src="/images/4.jpg" style="width:668px;height: 476px">
        </div>
        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 1000); // Change image every 1 seconds
            }
        </script>
            
    </body>
</html>
