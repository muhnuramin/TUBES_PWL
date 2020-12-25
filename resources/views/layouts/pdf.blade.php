<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman PDF</title>
</head>

<body>
    <header>
        <center>
        <br><br>
        <img src="{{public_path('image/favicon.png')}}">&nbsp;
        <h2>Laporan Data Hotel</h2>
        </center>
        <link rel="stylesheet" href="{{public_path('css/pdf.css')}}">
    </header>
    <center>
        <div class="garis"></div>
    </center>
    <br><br>
@yield('data')
    <br>
    <br>
    <div class="ttd">
        <div class="h3"><b>Admin</b></div>
        <br><br><br>
        <p>{{ Auth::user()->name }}</p>
    </div>
</body>

</html>
