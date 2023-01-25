<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    
    <!-- My Style -->
    <link href="logo_m.png" rel="shortcut icon">
    
    <title>PPDB SMK Ma'arif Wonosari Admin</title>
</head>
<body>
    
    @include('partials.navbarAdmin')
    
    @yield('konten')
      
</body>
</html>