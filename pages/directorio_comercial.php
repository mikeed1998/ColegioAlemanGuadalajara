<!DOCTYPE html>
<?=$headGNRL?>
<body>
  
<?=$header?>

<style>
	#busc {
		display: none;
	}

	#myInput:focus + #busc {
		display: block;
	}
	
	#busc:hover{
		display: block;
	}

</style>


<div class="bg-gris uk-text-center padding-bottom-50" style="min-height: 80vh;">
	<div class="uk-container">
		<div class="servicios-titulo padding-top-50">
			<img src="img/design/APF_LOGO.png" alt="">
		</div>
		<div class="portafolio-subtitulo uk-flex uk-flex-center">
			<div style="max-width: 700px;">
				Directorio Comercial - APF
			</div>
		</div>
		<div class="uk-flex uk-flex-center">
			<div class="linea-roja"></div>
		</div><br>
		<div class="portafolio-contenedor">
			<div uk-filter="target: .js-filter">
				<!-- Cachando los servicos de la BD //-->
				<div id="completo">
				<ul class="uk-subnav uk-subnav-pill uk-flex uk-flex-center" id="ss">
			        <li class="uk-active" uk-filter-control>
						<a href="#">
							Todos
						</a>
					</li>
			        <?php 
		    	    	$CONSULTA = $CONEXION -> query("SELECT * FROM servicios ORDER BY titulo");
							while ($rowCONSULTA = $CONSULTA -> fetch_assoc()) {
								$titulo = $rowCONSULTA['titulo'];
					?>
		        				<li uk-filter-control="[data-servicio='<?=$titulo?>']">
									<a href="#" id="servicios">
										<?=$titulo?>
									</a>
								</li>
					<?php 
							}
	 				?>
			    </ul><br>

				
				<input class="form-control" id="myInput" type="text" placeholder="Ingresa el nombre de la empresa o alguna descripción para filtrar los resultados">
                    
				<div id="busc" class="container">
  
  <br>
  <ul id="myList" style="list-style-type: none;">
  <div class="row">
		
		<?php
            $query = "SELECT * FROM productos";
            $result = mysqli_query($CONEXION, $query);
            
            while ($rowCONSULTA = $result->fetch_assoc()) {
                $id = $rowCONSULTA['id'];
			$idEmpresa = $rowCONSULTA['empresa'];
			$idServicio = $rowCONSULTA['servicio'];
			$whatsapp = $rowCONSULTA['whatsapp'];
			$facebook = $rowCONSULTA['facebook'];
			$instagram = $rowCONSULTA['instagram'];
			$urlTitulo = urlencode(str_replace($caracteres_no_validos, $caracteres_si_validos, html_entity_decode(strtolower($rowCONSULTA['titulo']))));
			$link = $id.'_'.$urlTitulo.'-.html';

			$queryS = "SELECT s.id, s.titulo FROM servicios as s INNER JOIN productos as p ON s.id = p.servicio";
			$serviciosS = mysqli_query($CONEXION, $queryS);

			while($rowS = $serviciosS->fetch_assoc()) {
				if($idServicio == $rowS['id']) {
					$nombreServicio = $rowS['titulo'];
					break;
				}
			}

			
			
				echo '
				<div class="col-md-4">
				
					<li data-servicio="'.$nombreServicio.'" class="card-principal" style="list-style-type: none;">
					<div uk-grid class="uk-grid-collapse" style="padding-top: 80px">
						<div class="uk-width-expand bg-white uk-text-center padding-top-20">
						</div>
						<div class="uk-width-auto uk-position-relative">
							<img src="img/design/testimonios-circulo.png" style="width: 150px;" alt="">
							<div class="uk-position-top-center" style="top:-65px; background: white; border-radius: 50%; height: 124px; width: 124px; overflow: hidden;">
								<img src="img/contenido/productos/'.$rowCONSULTA['imagen'].'" alt="" uk-cover>
							</div>
						</div>
						<div class="uk-width-expand bg-white uk-text-center padding-top-20">
						</div>
					</div>
					<div class="bg-white testimonios-card">
						<div class="testimonios-nombre">
							'.$rowCONSULTA['titulo'].'
						</div>
						<div class="testimonios-ramo uk-text-uppercase">
							'.$rowCONSULTA['empresa'].'
						</div>
						<div class="testimonios-texto">
							'.wordlimit($rowCONSULTA['txt'] ,'20','...').'
						</div>
						<div uk-grid class="padding-bottom-10 padding-top-20">
							<div class="uk-width-expand uk-text-left">
								  	<a target="_blank" href="https://wa.me/521'.$whatsapp.'?text=Me%20gustaría%20saber%20..." class="uk-icon-button" style="height: 20px; width: 20px;" uk-icon="icon:whatsapp; ratio: .8"></a> &nbsp;';
								  		if($facebook != ""){
											echo '<a target="_blank" href="'.$facebook.'" class="facebook" uk-icon="icon: facebook; ratio: 1"></a>  &nbsp;';
										}
										  
										if($instagram != ""){
											echo '<a target="_blank" href="'.$instagram.'" class="uk-icon-button" style="height: 20px; width: 20px;" uk-icon="icon:instagram; ratio: .8"></a>';
										}
								echo '
							</div>
							<div class="uk-width-auto testimonios-proyectos uk-flex uk-flex-middle">
								  <a href="'.$link.'">
									Ver más <span class="color-negro" uk-icon="icon: arrow-right; ratio: .8"></span>
								</a>
							</div>
						  </div>
					</div>
				</li>		
					
					</div>
				';
			

				
		
			
			}
			?>
		</div>
  </ul>  
</div>


				</div>

					<ul id="show" class="js-filter uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center" uk-grid>	
					<br>
					
					<?php 

						$aux = true;

						if($aux == true)
						{
							$CONSULTA = $CONEXION -> query("SELECT * FROM productos");
						
							while ($rowCONSULTA = $CONSULTA -> fetch_assoc()) {
								$id = $rowCONSULTA['id'];
								$idEmpresa = $rowCONSULTA['empresa'];
								$idServicio = $rowCONSULTA['servicio'];
								$whatsapp = $rowCONSULTA['whatsapp'];
								$facebook = $rowCONSULTA['facebook'];
								$instagram = $rowCONSULTA['instagram'];
								$urlTitulo = urlencode(str_replace($caracteres_no_validos,$caracteres_si_validos, html_entity_decode(strtolower($rowCONSULTA['titulo']))));
								$link = $id.'_'.$urlTitulo.'-.html';
	
								$queryS = "SELECT s.id, s.titulo FROM servicios as s INNER JOIN productos as p ON s.id = p.servicio";
			                    $serviciosS = mysqli_query($CONEXION, $queryS);

                    			while($rowS = $serviciosS->fetch_assoc()) {
			                     	if($idServicio == $rowS['id']) {
					                    $nombreServicio = $rowS['titulo'];
					                    break;
				                    }
			                    }
	
								$imagen = $rowCONSULTA['imagen'];
								

									echo '
									<li data-servicio="'.$nombreServicio.'" class="card-principal">
										<div uk-grid class="uk-grid-collapse" style="padding-top: 80px">
											<div class="uk-width-expand bg-white uk-text-center padding-top-20">
											</div>
											<div class="uk-width-auto uk-position-relative">
												<img src="img/design/testimonios-circulo.png" style="width: 150px;" alt="">
												<div class="uk-position-top-center" style="top:-65px; background: white; border-radius: 50%; height: 124px; width: 124px; overflow: hidden;">
													<img src="img/contenido/productos/'.$rowCONSULTA['imagen'].'" alt="" uk-cover>
												</div>
											</div>
											<div class="uk-width-expand bg-white uk-text-center padding-top-20">
											</div>
										</div>
										<div class="bg-white testimonios-card">
											<div class="testimonios-nombre">
												'.$rowCONSULTA['titulo'].'
											</div>
											<div class="testimonios-ramo uk-text-uppercase">
												'.$rowCONSULTA['empresa'].'
											</div>
											<div class="testimonios-texto">
												'.wordlimit($rowCONSULTA['txt'] ,'20','...').'
											</div>
											<div uk-grid class="padding-bottom-10 padding-top-20">
												<div class="uk-width-expand uk-text-left">
												  	<a target="_blank" href="https://wa.me/521'.$whatsapp.'?text=Me%20gustaría%20saber%20..." class="uk-icon-button" style="height: 20px; width: 20px;" uk-icon="icon:whatsapp; ratio: .8"></a> &nbsp;';
														if($facebook != ""){
															echo '<a target="_blank" href="'.$facebook.'" class="facebook" uk-icon="icon: facebook; ratio: 1"></a>  &nbsp;';
														}
										
														if($instagram != ""){
															echo '<a target="_blank" href="'.$instagram.'" class="uk-icon-button" style="height: 20px; width: 20px;" uk-icon="icon:instagram; ratio: .8"></a>';
														}
													echo '	
												</div>
												<div class="uk-width-auto testimonios-proyectos uk-flex uk-flex-middle">
												  	<a href="'.$link.'">
														Ver más <span class="color-negro" uk-icon="icon: arrow-right; ratio: .8"></span>
													</a>
												</div>
										  	</div>
										</div>
									</li>';
								
								
							   } 
								 
							echo '
								</ul>';
						}
						else
						{
							echo "Nada";
						}
			       		
			    	?>
				</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="uk-container padding-v-50" id="footer">
	<div uk-grid>
		<div class="uk-width-auto@s uk-flex uk-flex-middle uk-flex-center wozial-logo">
		<!-- 
			<a href="wozial.com">
				<img src="img/design/logo-wozial.png" alt="" style="max-height: 80px;">
			</a>
		//-->
		</div>
		<div class="uk-width-expand@s uk-flex uk-flex-middle uk-flex-center">
		<!--
			<div class="uk-text-center">
				<a href="" class="typewrite footer-texto" data-period="2000" data-type='[ "Todos somos una familia" , "Y queremos apoyarnos" , "Eshot.mx", "Wozial.com", "Brincolinesbambinos.com",":)" ]'>
					<span class="wrap"></span>
				</a>
			</div>
		//-->
		</div>
		<div class="uk-width-auto@s uk-flex uk-flex-middle uk-flex-center">
			<!--
			<a href="https://www.apf.org.mx/proyecto">
				<img src="img/design/APF_LOGO.png" alt="" style="max-height: 60px;">
			</a>
			//-->
		</div>
	</div>
</div>
<!--
<div class="uk-container padding-v-50" id="footer">
	<div uk-grid>
		<div class="uk-width-auto@s uk-flex uk-flex-middle uk-flex-center wozial-logo">
	
			<a href="wozial.com">
				<img src="img/design/logo-wozial.png" alt="" style="max-height: 80px;">
			</a>
		
		</div>
		<div class="uk-width-expand@s uk-flex uk-flex-middle uk-flex-center">
		
			<div class="uk-text-center">
				<a href="" class="typewrite footer-texto" data-period="2000" data-type='[ "Todos somos una familia" , "Y queremos apoyarnos" , "Eshot.mx", "Wozial.com", "Brincolinesbambinos.com",":)" ]'>
					<span class="wrap"></span>
				</a>
			</div>
		
		</div>
		<div class="uk-width-auto@s uk-flex uk-flex-middle uk-flex-center">
			<a href="https://www.apf.org.mx">
				<img src="img/design/APF_LOGO.png" alt="" style="max-height: 60px;">
			</a>
		</div>
	</div>
</div>
//-->

<?=$footer?>
<?=$scriptGNRL?>

<script>
	var TxtType = function(t, e, i) {
    	this.toRotate = e, this.el = t, this.loopNum = 0, this.period = parseInt(i, 10) || 2e3, this.txt = "", this.tick(), this.isDeleting = !1
	};
	
	TxtType.prototype.tick = function() {
	    var t = this.loopNum % this.toRotate.length,
	        e = this.toRotate[t];
	    this.isDeleting ? this.txt = e.substring(0, this.txt.length - 1) : this.txt = e.substring(0, this.txt.length + 1), this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";
	    var i = this,
	        s = 200 - 100 * Math.random();
	    this.isDeleting && (s /= 2), this.isDeleting || this.txt !== e ? this.isDeleting && "" === this.txt && (this.isDeleting = !1, this.loopNum++, s = 500) : (s = this.period, this.isDeleting = !0), setTimeout(function() {
	        i.tick()
	    }, s)
	}, window.onload = function() {
	    for (var t = document.getElementsByClassName("typewrite"), e = 0; e < t.length; e++) {
	        var i = t[e].getAttribute("data-type"),
	            s = t[e].getAttribute("data-period");
	        i && new TxtType(t[e], JSON.parse(i), s)
	    }
	    var n = document.createElement("style");
	    n.type = "text/css", n.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}", document.body.appendChild(n)
	};
</script>

<script>
	$(document).ready(function(){
  		$("#myInput").on("keyup", function() {
    		var value = $(this).val().toLowerCase();
    		$("#myList li").filter(function() {
      			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    		});
  		});
	});
</script>

</body>
</html>