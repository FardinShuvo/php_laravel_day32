<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/all.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}"/>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark shadow sticky-top" style="background: linear-gradient(to right, #4259FD, #EC42FD);">
        <div class="container">
            <a href="" class="navbar-brand">Fardin Shuvo</a>
            <ul class="navbar-nav">
                <li><a href="{{route('home')}}" class="nav-link">Home</a> </li>
                <li><a href="" class="nav-link">All Courses</a> </li>
                <li><a href="{{route('user-login')}}" class="nav-link">Login</a> </li>
                <li><a href="{{route('user-register')}}" class="nav-link">Registration</a> </li>
            </ul>
        </div>
    </nav>
    @yield('body')
    <footer class="pt-5 pb-4 mb-0 bg-dark">
        <div class="container ">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card card-body rounded-0">
                        <h3>About Institute</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto asperiores assumenda deserunt distinctio esse exercitationem facere fuga, inventore molestiae quod saepe, unde, veniam voluptatibus! Commodi expedita labore mollitia sapiente veniam.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-body rounded-0">
                        <h3>Popular Link</h3>
                        <hr/>
                        <ul>
                            <li><a href="">Popular Course One</a></li>
                            <li><a href="">Popular Course Two</a></li>
                            <li><a href="">Popular Course Three</a></li>
                            <li><a href="">Popular Course Four</a></li>
                            <li><a href="">Popular Course Five</a></li>
                            <li><a href="">Popular Course Six</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-body rounded-0">
                        <h3>Follow Us On</h3>
                        <hr/>
                        <ul class="nav">
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-facebook-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-twitter-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-youtube-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-linkedin-in"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-discord"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-instagram-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-tiktok"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-viber"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-github-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-twitch"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-behance"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-google-plus-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="bg-white mt-5"/>
            <div class="row">
                <div class="col-12">
                    <p class="text-white text-center">Copyright@2022.All right recived by BASIS SEIP Project</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="{{asset('/js/jquery.3.6.0.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.js')}}"></script>
</body>
</html>
