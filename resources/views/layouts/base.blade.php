<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Laravel Comics</title>
</head>
<body>
    @include('partials.header')
    <main>
        @yield('mainContent')
    </main>
    @include('partials.footer')
</body>
</html>