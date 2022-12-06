<!DOCTYPE html>
<?=$headGNRL?>
<body>
<?=$header?>
<?=$styleHome?>
    <style>
        .carrusel{
            background-size: cover;
        }
    </style>

    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-md-12 col-sm-12 px-0">
                
                <div id="carrusel" class="carrusel">
                    <div>
                        <img src="img/design/KIDS.jpg" class="img-fluid" alt="img-fluid" width="100%">
                    </div>
                    <div>
                        <img src="img/design/camp2.jpg" class="img-fluid" alt="img-fluid" width="100%">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 mx-auto">
                <div class="row">
                    <div class="col-md-6 mt-2 mb-2 text-center">
                        <img src="img/design/46.jpg" alt="" class="img-fluid w-75">
                    </div>
                    <div class="col-md-6 mt-5 mb-2 px-5 text-start">
                        <h1 class="display-4 py-2">NUESTRA PROPUESTA</h1>
                        <h3 style="text-align: justify;">En la APF buscamos fomentar el Networking con los Padres de Familia con la finalidad de ampliar la red de contactos profesionales y de esta forma
generar oportunidades de negocio y/o empleo dentro de nuestra comunidad.</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5" style="background: #FAFAFA;">
            <div class="col-md-2 col-xs-12 mx-auto text-center">
                <h1 class="display-3">BENEFICIOS</h1>
            </div>
        </div>
        <div class="row" style="background: #FAFAFA;">
            <div class="col-md-9 col-xs-12 mx-auto text-center">
            <h4>                
                Estos son los beneficios que obtendrás al unirte a nuestra comunidad
            </h4>
            </div>
        </div>
        <div class="row" style="background: #FAFAFA;">
            <div class="col-md-2 py-5 mx-auto text-center">
                <img src="img/design/APF_LOGO.png" alt="img-fluid" width="60%">
            </div>
        </div>
        <div class="row mb-5" style="background: #FAFAFA;">
            <div class="col-md-9 py-1 mx-auto text-center">
                <div class="row mb-5">
                    <div class="col-md-4 py-5 mx-auto">
                        <div class="col-12"><img src="img/design/APFpsd_12.png" class="img-fluid rounded-circle w-50 bg-warning py-5 px-5" alt="..."></div>
                        <div class="col-12"><h2>Networking</h2></div>
                        <div class="col-12"><p>Acceso al nuevo proyecto de Networking</p></div> 
                    </div>
                    <div class="col-md-4 py-5 mx-auto">
                        <div class="col-12"><img src="img/design/APFpsd_09.png" class="img-fluid rounded-circle w-50 bg-warning py-5 px-5" alt="..."></div>
                        <div class="col-12"><h2>Eventos</h2></div>
                        <div class="col-12"><p>Contribución a la realización de eventos.</p></div> 
                    </div>
                    <div class="col-md-4 py-5 mx-auto">
                        <div class="col-12"><img src="img/design/APFpsd_06.png" class="img-fluid rounded-circle w-50 bg-warning py-5 px-5" alt="..."></div>
                        <div class="col-12"><h2>Seguro</h2></div>
                        <div class="col-12"><p>Contratación del seguro de vida del padre o tutor con prima preferencial.</p></div> 
                    </div>
                    <div class="col-md-4 py-5 mx-auto">
                        <div class="col-12"><img src="img/design/APFpsd_03.png" class="img-fluid rounded-circle w-50 bg-warning py-5 px-5" alt="..."></div>
                        <div class="col-12"><h2>Precios</h2></div>
                        <div class="col-12"><p>Precios preferenciales para los eventos organizados por la APF.</p></div> 
                    </div>
                    <div class="col-md-4 py-5 mx-auto">
                        <div class="col-12"><img src="img/design/camp.jpg" class="img-fluid rounded-circle w-50 bg-warning py-5 px-5" alt="..."></div>
                        <div class="col-12"><h2>Campamento</h2></div>
                        <div class="col-12"><p>Campamento Papás e Hijos 2023</p></div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <h1 class="display-2 fw-2">Contactanos</h1>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-md-4 mx-auto text-center">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-3">
        <form class='form' action="<?=$rutaEnviarContacto?>" id='contact-form' method='post' data-toggle='validator'>
            <input type='hidden' name='submitform' value='contact-form' />
            <div class="messages"></div>
                <div class="controls">
                    <div class="row">
                        <div class="col-md-9 mx-auto">
                            <div class="row">
                                <div class="col-md-4 py-2 px-1 mx-auto">
                                    <div class="form-group">
                                        <input id="form_name" class="form-control form-control-lg bg-black" type="text" name="nombre" placeholder="Nombre: " required data-error="name is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2 mx-auto">
                                    <div class="form-group">
                                        <input id="form_email" class="form-control form-control-lg bg-black" type="email" name="correo" placeholder="Email: " required data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2 mx-auto">
                                    <div class="form-group">
                                        <input id="form_subject" class="form-control form-control-lg bg-black" type="number" name="whatsapp" placeholder="whatsappp: ">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group py-2 px-2 text-center">
                                    <textarea id="form_message" class="form-control form-control-lg bg-black" name="mensaje" class="form-control" placeholder=" Escribe tu mensaje " rows="4" required data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-lg-12 text-center py-2">
                            <button type="submit" class="btn btn-lg py-3 px-5"  style="background-color: red; color: black;"><b>Enviar</b></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!--
        <form name="formHome" action="" method="POST">
            <div class="row mt-3 p-4">
                <div class="col-md-6 mx-auto">
                    <div class="row">
                        <div class="col-md-4 px-3 mx-auto">
                            <input type="text" name="nombre" class="form-control form-control-lg bg-black py-3" placeholder="Nombre: ">
                        </div>
                        <div class="col-md-4 px-3 mx-auto">
                            <input type="email" name="correo" class="form-control form-control-lg bg-black py-3" placeholder="Correo: ">
                        </div>
                        <div class="col-md-4 px-3 mx-auto">
                            <input type="number" name="whatsapp" class="form-control form-control-lg bg-black py-3" placeholder="whatsapp">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3 mx-auto">
                            <input type="submit" id="enviar" class="form-control form-control-lg btn-lg py-3" style="background-color: red; color: black;">
                             <button type="submit" id="enviar" class="btn btn-lg w-100" style="background-color: red; color: black;">Enviar</button>
                             <a href="#" id="enviar" class="btn btn-lg w-100" style="background-color: red; color: black;">Enviar</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        -->
    </div


<?=$footer?>

<?=$scriptGNRL?>

</body>
</html>