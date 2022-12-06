<!DOCTYPE html>
<?=$headGNRL?>
<body>
  
<?=$header?>
<?=$styleContacto?>

<div class="container">
    <div class="row py-5">
        <div class="col-md-2 mx-auto text-center">
            <img src="img/design/APF_LOGO.png" alt="img-fluid" width="75%">
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 mx-auto text-center" >
            <h1 class="display-2">¡Estamos para apoyarte!</h1>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-md-9 mx-auto">
            <div class="row">
                <div class="col">
                    <table class="table table-responsive-md table-bordered border-secondary table-hover">
                        <thead class="table-secondary border-secondary">
                        <tr>
                            <th>Comisión</th>
                            <th>Nombre</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Presidente</td>
                            <td>Francisco Concha Morin</td>
                            <td class="text-primary">presidente@apf.org.mx</td>
                        </tr>
                        <tr>
                            <td>Vicepresidente</td>
                            <td>Alejandro Oyervides</td>
                            <td class="text-primary">vicepresidente@apf.org.mx</td>
                        </tr>
                        <tr>
                            <td>Secretario</td>
                            <td>Lily Isuna</td>
                            <td class="text-primary">secretario@apf.org.mx</td>
                        </tr>
                        <tr>
                            <td rowspan="4"><br><br><br>Tesoreria</td>
                            <td>Brissa Cardenas</td>
                            <td class="text-primary">brissacardenas@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Adriana Zúñiga</td>
                            <td rowspan="3" class="text-primary"><br><br>tesoreria@apf.org.mx</td>
                        </tr>
                        <tr>
                            <td>Brenda Caro</td>
                        </tr>
                        <tr>
                            <td>Sara Alonso</td>
                        </tr>
                        <tr>
                            <td>Vialidad</td>
                            <td>Alin Moncada</td>
                            <td class="text-primary">vialidad@apf.org.mx</td>
                        </tr>
                        <tr>
                            <td>Transporte</td>
                            <td>David Bordson</td>
                            <td class="text-primary">transporte@apf.org.mx</td>
                        </tr>
                        <tr>
                            <td rowspan="2"><br>Networking & Social Media</td>
                            <td>Jaime Gonzalez Orozco</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Alejandro Zuno</td>
                            <td class="text-primary">networking@apf.org.mx</td>
                        </tr>
                        <tr>
                            <td rowspan="4"><br><br><br>Eventos</td>
                            <td>Maria Fernanda Solbes</td>
                            <td rowspan="4" class="text-primary"><br><br><br>eventos@apf.org.mx</td>
                        </tr>
                        <tr>
                            <td>Corina Schenker</td>
                        </tr>
                        <tr>
                            <td>Fernanda</td>
                        </tr>
                        <tr>
                            <td>Paola Vazquez</td>
                        </tr>
                        <tr>
                            <td>Labor Social y de Valores</td>
                            <td>Maria Cecilia Villegas</td>
                            <td class="text-primary">laborsocialyvalores@apf.org.mx</td>
                        </tr>
                        <tr>
                            <td>Deportes</td>
                            <td>David Sánchez</td>
                            <td class="text-primary">deportes@apf.org.mx</td>
                        </tr>
                        <tr>
                            <td>Consejal</td>
                            <td>Luis David Angulo Aceves</td>
                            <td class="text-primary">consejal@apf.org.mx</td>
                        </tr>
                        <tr>
                            <td>Ciculo de Padres</td>
                            <td>Ma. Elena Pinzón</td>
                            <td class="text-primary">conecta@apf.org.mx</td>
                        </tr>
                        <tr>
                            <td rowspan="2"><br>NeuroDiversidad y Aprendizaje</td>
                            <td>Marc Freudenberg</td>
                            <td class="text-primary">neurodiversidad@apf.org.mx</td>
                        </tr>
                        <tr>
                            <td>Jorge Morones</td>
                        </tr>
                        </tbody>
                    </table>
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
        <form name="formContacto" action="" method="POST">
        <div class="row py-3">
            <div class="col-md-9 mx-auto">
                <div class="row">
                    <div class="col-md-4 px-3 mx-auto">
                        <input type="text" name="nombreC" class="form-control form-control-lg bg-black" placeholder="Nombre: ">
                    </div>
                    <div class="col-md-4 px-3 mx-auto">
                        <input type="email" name="correoC" class="form-control form-control-lg bg-black" placeholder="Correo: ">
                    </div>
                    <div class="col-md-4 px-3 mx-auto">
                        <input type="number" name="whatsappC" class="form-control form-control-lg bg-black" placeholder="whatsapp">
                    </div>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col-md-12 px-3 mx-auto">
                        <div class="form-floating">
                            <textarea class="form-control form-control-lg bg-black text-white" name="mensajeC" id="mensaje" style="height: 100px" placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3 mx-auto py-3">
                        <input type="submit" id="enviarC" class="form-control form-control-lg btn-lg py-3" style="background-color: red; color: black;" placeholder="Mensaje">
                    </div>
                </div>
            </div>
        </div>
        </form>
    -->
</div>

<?=$footer?>
<?=$scriptGNRL?>

</body>
</html>