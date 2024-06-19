<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    @yield('styles') <!--Esto sirve para definir el contenido de la sección styleInicio-->
    <title>
        @yield('title')
    </title>
    <!-- Los yield sirven para definir el contenido de la sección que se repite -->
     
</head>
<body>
    @include('layouts._partials.menu') <!--Esto sirve para incluir el menú de la página-->
    @yield('content')  
    @include('layouts._partials.footer') <!--Esto sirve para incluir el footer de la página-->             
</body>
</html> 