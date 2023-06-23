<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    @vite('resources/css/app.css')
</head>
<body class="bg-[#94D2BD]">

 @include('layout.navbar.user')

 <div class="body">
@yield('container')

 </div>

@include('layout.footer.user')
\
</body>
</html>
