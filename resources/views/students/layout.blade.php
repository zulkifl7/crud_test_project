<!DOCTYPE html>
<html>

<head>
    <title>AJ's Tutorials</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">


</head>

<body background="{{ asset('img/stu.jpg') }}">

    <div class="container">
        @yield('content')
    </div>

</body>

</html>
