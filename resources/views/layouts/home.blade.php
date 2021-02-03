<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeKeeper</title>
 @include('includes.home.style')
</head>

<body>
@include('includes.home.header')
@yield('content')
@include('includes.home.footer')
@include('includes.home.script')
</body>

</html>
