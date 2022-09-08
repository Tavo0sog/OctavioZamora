<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>   
    <!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>  
     <!--JS-BOOSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>


<body>
    <header>
        <nav class="navbar navbar-expand-lg text-center navbar-light py-0">
            <a class="navbar-brand p-0" href="{{route('hom')}}">
            <img src="images/octavioZ.svg" alt="Octavio Zamora logo">
            </a>
                    
            <button class="navbar-toggler bg-light mx-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav me-4">
                    <a class="nav-item nav-link" href="{{route('hom')}}">Home</a>
                    <a class="nav-item nav-link" href="{{route('foto')}}">Fotografía</a>
                    <a class="nav-item nav-link" href="{{route('cli')}}">Clientes</a>
                    <a class="nav-item nav-link" href="{{route('con')}}">Contacto</a>
                    <a class="nav-icon" href="" target="_Blank" >
                        <img src="images/face.png" alt="logoFacebook"> 
                    </a>
                    <a class="nav-icon" href="" target="_Blank" >
                        <img src="images/instagram.png" alt="logoFacebook"> 
                    </a>
                    <a class="nav-icon" href="" target="_Blank" >
                        <img src="images/whats.png" alt="logo_WhatsApp"> 
                    </a>
                </div>
            </div>
        </nav>
    </header>
    @yield('contenido')
</body>
<footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="#">
                    <img src="images/octavioZ.svg" alt="logo-octavio">
                </a>
                <a href="#">
                    <img src="images/octavio-qr.png " class="qr pt-4" alt="Qr-octavio" > 
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>SOBRE NOSOTROS</h2>
            <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, nihil?</P>
            <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, nihil?</P>
        </div>
        <div class="box">
            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href=""> <img src="images/face.png" alt="logoFacebook"> </a>
                <a href=""> <img src="images/whats.png" alt="logoFacebook"> </a>
                <a href=""> <img src="images/instagram.png" alt="logoFacebook"> </a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small>&copy; 2022 <b>Octavio Zamora</b> - Todos los derechos Reservados.</small>
    </div>
</footer>
</html>

