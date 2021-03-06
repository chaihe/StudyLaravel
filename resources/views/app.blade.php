<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PHP</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
        #main{ margin:0 auto; width:80%; }
    </style>
</head>
<body>
    <div id="main">
        @yield('content')
        @yield('footer')
    </div>
</body>
</html>
