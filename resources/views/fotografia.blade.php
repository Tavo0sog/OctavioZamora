@extends ('welcome')

@section('titulo')
  Octavio Zamora | Fotografía
@endsection

@section('contenido')
    <div class="banner-foto1">
        <p>Categorías</p>
    </div> 

    <div id="galeria-images">
        <div>
            <img src="images/diseño-imagen.jpg" alt="Diseño">
        </div>
        <div class="producto">
            <img src="images/producto.jpg" alt="Producto" >
            <p>Productos</p>
            <button onclick="galeria_productos()">Ver Galería</button>
        </div>
        <div class="alimentos">
        <img src="images/alimentos.jpg" alt="Alimentos">
            <p>Alimentos</p>
            <button onclick="galeria_alimentos()">Ver Galería</button>
        </div>  
        <div class="arquitectura">
        <img src="images/arquitectura.jpg" alt="Arquitectura">
            <p>Arquitectura y Paisajes</p>
            <button onclick="galeria_paisajes()">Ver Galería</button>
        </div>  
    </div>

    <div class="galerias">
        <div class="album" id="container_productos">
            <div class="banner-foto2">
                <p>Galería Productos</p>
            </div> 

            <div class="galeria-container">
                <div class="galeria-item">
                    <img src="/images/prod1.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/prod6.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/prod8.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/prod4.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/prod12.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/prod5.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/prod13.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/prod3.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/prod7.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/prod2.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/prod11.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/prod10.jpg" alt="" class="galeria-img">
                </div>
            </div>
        </div>

        <div class="album" id="container_paisajes">
            <div class="banner-foto2">
                <p> Galería Arquitectura y Paisajes </p>
            </div> 

            <div class="galeria-container">
                <div class="galeria-item">
                    <img src="/images/arq1.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/arq2.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/arq3.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/arq4.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/arq5.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/arq6.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/arq7.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/arq8.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/arq13.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/arq10.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/arq11.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/arq12.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/arq14.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/arq9.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/arquitectura.jpg" alt="" class="galeria-img">
                </div>
            </div>
        </div>

        <div class="album" id="container_alimentos">
            <div class="banner-foto2">
                <p>Galería Alimentos</p>
            </div> 

            <div class="galeria-container">
                <div class="galeria-item">
                    <img src="/images/ali1.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/ali2.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/ali3.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/ali4.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/ali5.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/ali6.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/ali7.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/ali8.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/ali9.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/ali10.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/ali11.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/ali12.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/ali13.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/ali14.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/ali15.jpg" alt="" class="galeria-img">
                </div>
                <div class="galeria-item">
                    <img src="/images/ali16.jpg" alt="" class="galeria-img">
                </div>
            </div>
        </div>
         <!--JS Slider-->
    <script src="{{asset('js/galerias.js')}}"></script>
    </div>
    
    
    
@endsection