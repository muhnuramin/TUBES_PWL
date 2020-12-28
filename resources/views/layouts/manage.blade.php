<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>admin</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/manage.css') }}">
</head>

<body>
    <div class="wrapper d-flex">
        <nav class="navbar navbar-default ">
            <div class="navbar-header bg-secondary">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand " href="/home"><img src="{{ asset('image/logo.png') }}" alt=""></a>
                
                <a class="navbar-brand login" href="#"><p>{{ Auth::user()->name }}</p></a>
                
            </div>
        </nav>
        
        <aside class="sidebar">
            <menu>
                <ul class="menu-content">
                    <li><a href="/manage"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="/manageuser"><i class="fa fa-user-plus"></i> <span>Manage User (Employee)</span></a>
                    </li>
                    <li><a href="/managehotel"><i class="fa fa-hotel"></i> <span>Manage Hotel</span></a></li>
                    <li><a href="/pesanan"><i class="fa fa-shopping-basket"></i> <span>History Pesanan</span></a></li>
                    <li><a href="/manage/testimoni"><i class="fa fa-comments" aria-hidden="true"></i> <span>testimoni</span></a></li>
                    {{-- <li><a href="#"><i class="fa fa-door-open"></i> <span>Pembelian</span></a></li> --}}
                    
                    <li class="nav-item">
                        <a class="logout nav-link js-scroll-trigger" href="{{route('logout')}}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                    <form id="logout-form" action="{{route("logout")}}" method="POST" style='display:none;'>
                        @csrf
                    </form>
                </ul>
            </menu>
        </aside>
        <section class="content">
            @yield('content')
            <div class="content2">@yield('content2')</div>
        </section>
    </div>
</body>

</html>
