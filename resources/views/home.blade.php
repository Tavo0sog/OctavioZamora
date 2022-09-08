@extends ('welcome')

@section('titulo')
  Octavio Zamora | Home
@endsection

@section('contenido')
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/desarrollo-web.jpeg"  alt="...">
        <p>Desarrollo Web</p>
      </div>
      <div class="carousel-item">
        <img src="images/branding.jpg"  alt="...">
        <p>Branding</p>
      </div>
      <div class="carousel-item">
        <img src="images/marketing.jpg"  alt="...">
        <p>Mercadotecnia</p>
      </div>
      <div class="carousel-item">
        <img src="images/diseno.jpg"  alt="...">
        <p>Diseño Gráfico</p>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="resumen">
    <h1>¿Quién soy?</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis iure provident dolorum, placeat a tenetur vel cumque in consequatur distinctio, ratione alias tempore sed repellendus quo nihil dolorem eius sapiente! Earum quaerat animi explicabo sequi nobis? Tempore itaque repellat at assumenda, molestias voluptates culpa, eum voluptas pariatur enim animi fugit?</p>
  </div>

  <section id="servicios">
    <div class="container py-5 text-center">
      <div class="row mb-5">
        <div class="col">
          <h1>Servicios</h1>
          <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="card-servicio">
            <div class="card-body">
              <img src="images/disenio.png" id="serv-logo" alt="">
      
              <h3>Diseño Gráfico</h3>
              <button>Ver más</button>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card-servicio">
            <div class="card-body">
              <img src="images/web.png" id="serv-logo" alt="">
              <h3>Desarrollo Web</h3>
              <button>Ver más</button>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card-servicio">
            <div class="card-body">
              <img src="images/foto.png" id="serv-logo" alt="">
              <h3>Fotografía</h3>
              <button>Ver más</button>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card-servicio">
            <div class="card-body">
              <img src="images/branding.png" id="serv-logo" alt="">
              <h3>Branding</h3>
              <button>Ver más</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<div class="container-planes">
  <div class="planes">
  <div class="titulo-planes">
        <h1>Planes de manejo de contenido digital<h1>
          <h5>En plataformas de redes sociales como:</h5>
          <p>Facebook&copy; . Instagram&copy; . YouTube&copy;</p>
    </div> 
  <section class="container-card">
            <div class="card">
                <p>BÁSICO</p>
                <div class="plataformas">
                    <ul>
                        <li>Hasta 10 post por mes</li>
                        <li>Manejo básico de perfil de usuario</li>
                        <li>Monitotero de comunicacíon</li>
                        <li>Resumen mensual de actividad</li>
                    </ul>
                </div>
                <p class="cotizar">Cotizar</p>
            </div>

            <div class="card">
                <p>ESTANDART</p>
                <div class="plataformas">
                    <ul>
                    <li>12 post por mes</li>
                        <li>Manejo de perfil de usuario</li>
                        <li>Monitotero de comunicacíon</li>
                        <li>Diseño de los Post (12 por mes)</li>
                        <li>Resumen quincenal de actividad</li>
                        <p>No incluye producción de videos</p>
                    </ul>
                </div>
                <p class="cotizar">Cotizar</p>
            </div>
            <div class="card">
                <p>PREMIUM</p>
                <div class="plataformas">
                    <ul>
                        <li>12 post por mes</li>
                        <li>Manejo de perfil de usuario para todas las plataformas</li>
                        <li>Monitotero de comunicacíon</li>
                        <li>Diseño de los Post (12 por mes)</li>
                        <li>Resumen quincenal de actividad</li>
                        <li>Incluye 2 videos mensuales con duración de 4 minutos menos post producción y ajuste</li>
                    </ul>
                </div>
                <p class="cotizar">Cotizar</p>
            </div>
  </section>
  </div>

</div>
  


@endsection
 
        	



