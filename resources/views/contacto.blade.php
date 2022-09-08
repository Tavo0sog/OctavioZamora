@extends ('welcome')

@section('titulo')
  Octavio Zamora | Home
@endsection


@section('contenido')

<div class="container-contacto">
    <div class="row" id="contacto" onload=cambioBg()>
        <div class="col-sm-6 ">
            <form action="">
                <div class="row input">
                    <div class="col-sm-12">
                        <label>Nombre:</label>
                        <input type="text" name="nombre" id="emailFormName" class="form-control" autocomplete="off" placeholder="Nombre">
                    </div>
                </div>
                <div class="row input">
                    <div class="col-sm-12">
                        <label>Correo electrónico:</label>
                        <input type="text" name="telefono" id="emailFormEmail" class="form-control" autocomplete="off" placeholder="Correo">
                    </div>
                </div>
                <div class="row input">
                    <div class="col-sm-12">
                        <textarea type="text" name="comentarios" id="emailFormMes" class="form-control" autocomplete="off" placeholder="Mensaje"></textarea>
                    </div>
                </div>
                <div class="row input">
                    <div class="col-sm-9">
                        <p class="textMsg"></p>
                    </div>
                    <div class="col-sm-3 d-flex justify-content-end">
                        <input type="button" name="" value="ENVIAR" class="btnEnviarMsj">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-sm-6">
            <div class="contacto">
                <h1>CONTACTÁNOS</h1>
                <div class="info">
                    <p>Nos encantaría saber de ti.</p>
                    <p>Estaremos pendientes de revisar y contestar los correos en todo momento.</p>
                </div>
                <div class="info">
                    <p><a href="">informes@octaviozamora.com</a></p>
                </div>
                <div class="info-qr">
                    <img src="images/octavio-qr.png" alt="QR" > 
                </div>
            </div>
        </div>
    </div>
</div>


        


@endsection