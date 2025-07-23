<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skillzy - @yield('title', 'Empower Your Skills')</title>

 
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">

 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    
   
    @yield('content')
    @stack('scripts')

</body>
</html>
