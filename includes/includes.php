<?php
/* %%%%%%%%%%%%%%%%%%%% MENSAJES               */
	if($mensaje!=''){
		$mensajes='
			<div class="uk-container">
				<div uk-grid>
					<div class="uk-width-1-1 margin-v-20">
						<div class="uk-alert-'.$mensajeClase.'" uk-alert>
							<a class="uk-alert-close" uk-close></a>
							'.$mensaje.'
						</div>					
					</div>
				</div>
			</div>';
	}

/* %%%%%%%%%%%%%%%%%%%% RUTAS AMIGABLES        */
		$rutaHome					=	'Home';
		$rutaNosotros      	 		=   'Nosotros';
		$rutaDirectorioComercial 	= 	'DirectorioComercial';
		$rutaContacto       		= 	'Contacto';
		$rutaEnviarContacto         =   'EnviarContacto';
		$rutaPedido					=	$ruta.'revisar_orden';
		$rutaPedido2				=	$ruta.'revisar_datos_personales';

/* %%%%%%%%%%%%%%%%%%%% MENU                   */
	$menu='
		<li class="'.$nav1.'"><a class="spinnershot" href="'.$rutaHome.'">Home</a></li>
		';

	$menuMovil='
		<li><a class="spinnershot '.$nav1.'" href="'.$ruta.'">Home</a></li>
		';

/* %%%%%%%%%%%%%%%%%%%% HEADER                 */

$header='
	<style>
		@media (min-width: 900px) {
			.slider {
				position: sticky; 
				top: 0; 
				z-index: 999;
			}
		}
	</style>

	<div class="slider container-fluid border border-bottom bg-light py-2" style="">
		<div class="row">
			<div class="col-md-2 col-sm-12 text-center">
				<a class="navbar-brand" href="'. $rutaHome .'"><img src="img/design/APF_LOGO.png" class="img-fluid w-50" alt=""></a>
			</div>
			<div class="col-md-2 col-sm-12 py-3 bg-black text-center">
				<a class="" aria-current="page" href="'. $rutaHome .'"><h4 style="color: white;">Home</h4></a>
			</div>
			<div class="col-md-2 col-sm-12 py-3 bg-black text-center">
				<a class="" aria-current="page" href="'. $rutaNosotros .'"><h4 style="color: white;">Nosotros</h4></a>
			</div>
			<div class="col-md-3 col-sm-12 py-3 bg-black text-center">
				<a class="" aria-current="page" href="'. $rutaDirectorioComercial .'"><h4 style="color: white;">Directorio Comercial</h4></a>
			</div>
			<div class="col-md-2 col-sm-12 py-3 bg-black text-center">
				<a class="" aria-current="page" href="'. $rutaContacto .'"><h4 style="color: white;">Contacto</h4></a>
			</div>
			<!--
			<div class="col-md-1 col-sm-12 py-2 text-center">
				<h5>Telefono 3322332233</h5>
			</div>
			-->
			<div class="col-md-1 col-sm-12 py-3 text-center">
				<!--
				<a href="#" class="btn outline-link p-0 border-0" style="decoration: none;">
					<i class="fa-brands fa-whatsapp fa-xl px-1"></i>
				</a>
				-->
				<a href="https://www.facebook.com/colegioalemanguadalajara" class="btn outline-link px-2 border-0" style="decoration: none;">
					<i class="fa-brands fa-facebook-f fa-2xl px-1"></i>
				</a>
				<a href="https://www.instagram.com/alemangdl/" class="btn outline-link px-2 border-0" style="decoration: none;">
					<i class="fa-brands fa-instagram fa-2xl px-1"></i>
				</a>
			</div>
		</div>
	</div>
';

/*
$header='
	<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom" style="position: sticky; top: 0; z-index: 999;">
		<div class="container-fluid text-center">
			<a class="navbar-brand" href="'. $rutaHome .'"><img src="img/design/APF_LOGO.png" alt="" width="30%"></a>
			<button style="text-align: center;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item bg-black px-5">
						<a class="nav-link active" aria-current="page" href="'. $rutaHome .'"><h5 style="color: white;">Home</h5></a>
					</li>
					<li class="nav-item bg-black px-5">
						<a class="nav-link active" aria-current="page" href="'. $rutaNosotros .'"><h5 style="color: white;">Nosotros</h5></a>
					</li>
					<li class="nav-item bg-black px-5">
						<a class="nav-link active" aria-current="page" href="'. $rutaDirectorioComercial .'"><h5 style="color: white;">Directorio Comercial</h5></a>
					</li>
					<li class="nav-item bg-black px-5">
						<a class="nav-link active" aria-current="page" href="'. $rutaContacto .'"><h5 style="color: white;">Contacto</h5></a>
					</li>
					<li class="px-5 py-2">
						<h5>Telefono 3322332233</h5>
					</li>
					<li class="px-5 py-2">
						<a href="#" class="btn outline-link p-0 border-0" style="decoration: none;">
							<i class="fa-brands fa-whatsapp fa-xl px-1"></i>
						</a>
						<a href="#" class="btn outline-link p-0 border-0" style="decoration: none;">
							<i class="fa-brands fa-facebook-f fa-xl px-1"></i>
						</a>
						<a href="#" class="btn outline-link p-0 border-0" style="decoration: none;">
							<i class="fa-brands fa-instagram fa-xl px-1"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
';
*/

/* %%%%%%%%%%%%%%%%%%%% FOOTER                 */
	$footer = '
	<footer class="footer mt-5 bg-black" style="">
	<div class="container-fluid bg-black py-3">
		<div class="row">
			<div class="col-md-11 mt-5 mx-auto border border-white p-1">
				<div class="row mt-5">
					<div class="col-md-6 px-5 text-white text-start">
						<div class="row">
							<div class="col-12">
								<p class="display-6"><a href="'. $rutaHome .'" style="text-decoration: none; color: inherit;">Home</a></p>
							</div>
							<div class="col-12">
								<p class="display-6"><a href="'. $rutaDirectorioComercial .'" style="text-decoration: none; color: inherit;">DIRECTORIO COMERCIAL</a></p>
							</div>
							<div class="col-12">
								<p class="display-6"><a href="'. $rutaContacto .'" style="text-decoration: none; color: inherit;">Contacto</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 text-end text-secondary">
						<div class="row mt-5">
							<div class="col-12 mt-5 px-5">
								Bosque de los Cedros no. 32<br>
								Col. Bosques de San Isidro (Las Cañadas)<br>
								C.P. 45133<br>
								Zapopan, jalisco, México.<br>
								<br>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-2 px-5">
					<div class="col-md-12 mx-auto border border-white"></div>
				</div>
				<div class="row mt-3 mb-3">
					<!--
					<div class="col-md-6 px-5 text-white text-end">
						<a href="#" target="_blank" style="decoration: none; color: white;">aviso de privacidad</a><br>
						<a href="#" target="_blank" style="decoration: none; color: white;">preguntas frecuentes</a>
					</div>
					-->
					<div class="col-md-12 px-5 py-3 text-end">
						<!--
						<a href="#" class="btn outline-link p-0 border-0" style="decoration: none;">
							<i class="fa-brands fa-whatsapp fa-2xl px-1" style="color: red;"></i>
						</a>
						-->
						<a href="https://www.facebook.com/colegioalemanguadalajara" class="btn outline-link p-0 border-0" style="decoration: none;">
							<i class="fa-brands fa-facebook-f fa-2xl px-2" style="color: red;"></i>
						</a>
						<a href="https://www.instagram.com/alemangdl/" class="btn outline-link p-0 border-0" style="decoration: none;">
							<i class="fa-brands fa-instagram fa-2xl px-2" style="color: red;"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 py-2 mx-auto text-secondary">
				deporte y mas 2022 todos los derechos reservados diseño por wozial
			</div>
		</div>
	</div>
</footer>
	';

/* %%%%%%%%%%%%%%%%%%%% HEAD GENERAL                */
	$headGNRL='
		<html lang="'.$languaje.'">
		<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">

			<meta charset="utf-8">
			<title>'.$title.'</title>
			<meta name="description" content="'.$description.'" />
			<meta property="fb:app_id" content="'.$appID.'" />
			<link rel="image_src" href="'.$ruta.$logoOg.'" />

			<meta property="og:type" content="website" />
			<meta property="og:title" content="'.$title.'" />
			<meta property="og:description" content="'.$description.'" />
			<meta property="og:url" content="'.$rutaEstaPagina.'" />
			<meta property="og:image" content="'.$ruta.$logoOg.'" />

			<meta itemprop="name" content="'.$title.'" />
			<meta itemprop="description" content="'.$description.'" />
			<meta itemprop="url" content="'.$rutaEstaPagina.'" />
			<meta itemprop="thumbnailUrl" content="'.$ruta.$logoOg.'" />
			<meta itemprop="image" content="'.$ruta.$logoOg.'" />

			<meta name="twitter:title" content="'.$title.'" />
			<meta name="twitter:description" content="'.$description.'" />
			<meta name="twitter:url" content="'.$rutaEstaPagina.'" />
			<meta name="twitter:image" content="'.$ruta.$logoOg.'" />
			<meta name="twitter:card" content="summary" />

			<meta name="viewport"       content="width=device-width, initial-scale=1">

			<link rel="icon"            href="'.$ruta.'img/design/APF_LOGO.png" type="image/x-icon">
			<link rel="shortcut icon"   href="img/design/APF_LOGO.png" type="image/x-icon">
			<link rel="stylesheet"      href="https://cdn.jsdelivr.net/npm/uikit@'.$uikitVersion.'/dist/css/uikit.min.css" />
			<link rel="stylesheet" 		href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
			<link rel="stylesheet/less" href="css/general.less" >
			<link rel="stylesheet"      href="https://fonts.googleapis.com/css?family=Lato:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
			<link rel="stylesheet"		href="https://fonts.googleapis.com/css?family=Nunito:200i,400,600,800&display=swap">
			
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

			<!-- 

			!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
			!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
			!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
			
			Quitar bootstrap 3 para que mis diseños se acomoden correctamente
			
			!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
			!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
			!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
			-->
			

			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
			<!-- jQuery is required -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

			<!-- UIkit JS -->
			<script src="https://cdn.jsdelivr.net/npm/uikit@'.$uikitVersion.'/dist/js/uikit.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/uikit@'.$uikitVersion.'/dist/js/uikit-icons.min.js"></script>

			<!-- Font Awesome -->
			<script src="https://kit.fontawesome.com/910783a909.js" crossorigin="anonymous"></script>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

			<link rel="stylesheet" type="text/css" href="library/slick/slick.css"/>
    		<link rel="stylesheet" type="text/css" href="library/slick/slick-theme.css"/>
			<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    		<script type="text/javascript" src="library/slick/slick.min.js"></script>

			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
			
			<!-- Less -->
			<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
		</head>';

/* %%%%%%%%%%%%%%%%%%%% STYLES */
	$styleHome='
		<style>
			.form-control:focus {
				background-color: black;
				color: white;
				outline: 0 !important;
			}

			.form-control::placeholder {
				color: white;
			}

			.form-control {
				color: white;
			}

			.slick-track {
				display: flex !important;
			}

			.slick-slide {
				height: inherit !important;
			}

			.fa-brands {
				outline: none;
				box-shadow: none;
			}

			#enviar:hover {
				background-color: yellow;
			}
		</style>
	';

	$styleContacto = '
		<style>
			.form-control:focus {
				background-color: black;
				color: white;
				outline: 0 !important;
			}

			.form-control::placeholder {
				color: white;
			}

			.form-control {
				color: white;
			}

			#mensaje::placeholder {
				color: white;
			}
		</style>
	';

/* %%%%%%%%%%%%%%%%%%%% SCRIPTS                */
	$scriptGNRL='
		<script src="js/general.js"></script>

		<script>
	     	$(window).scroll(function() {
	     		var top = $(window).scrollTop();
	     		console.log(top);
	        	if ($(window).scrollTop() > 5) {
	            	$(".menu-barra").addClass("shadow-header");
	        	}else {
	            	$(".menu-barra").removeClass("shadow-header");
	        	}
	      	});
		</script>

		<script>
			$(".cantidad").keyup(function() {
				var inventario = $(this).attr("data-inventario");
				var cantidad = $(this).val();
				inventario=1*inventario;
				cantidad=1*cantidad;
				if(inventario<=cantidad){
					$(this).val(inventario);
				}
				console.log(inventario+" - "+cantidad);
			})
			$(".cantidad").focusout(function() {
				var inventario = $(this).attr("data-inventario");
				var cantidad = $(this).val();
				inventario=1*inventario;
				cantidad=1*cantidad;
				if(inventario<=cantidad){
					//console.log(inventario*2+" - "+cantidad);
					$(this).val(inventario);
				}
			})

			// Agregar al carro
			$(".buybutton").click(function(){
				var id=$(this).data("id");
				var cantidad=$("#"+id).val();

				$.ajax({
					method: "POST",
					url: "addtocart",
					data: { 
						id: id,
						cantidad: cantidad,
						addtocart: 1
					}
				})
				.done(function( msg ) {
					datos = JSON.parse(msg);
					UIkit.notification.closeAll();
					UIkit.notification(datos.msg);
					$("#cartcount").html(datos.count);
					$("#cotizacion-fixed").removeClass("uk-hidden");
				});
			})
		</script>

		<script>
			$("#carrusel").slick({
            	dots: true,
            	infinite: true,
            	speed: 300,
            	slidesToShow: 1,
            	adaptiveHeight: true,
            	responsive: [
            	{
                	breakpoint: 1024,
                	settings: {
                	    slidesToShow: 1,
                	    slidesToScroll: 1,
                	    infinite: true,
                    	dots: true
                	}
            	},
            	{
                	breakpoint: 600,
                	settings: {
                    	slidesToShow: 1,
                    	slidesToScroll: 1
                	}
            	},
            	{
                	breakpoint: 480,
                	settings: {
                    	slidesToShow: 1,
                    	slidesToScroll: 1
            	}
            }
            ]
        });
		</script>
		';

	// Script login Facebook
	$scriptGNRL.=(!isset($_SESSION['uid']) AND $dominio != 'localhost' AND isset($facebookLogin))?'
		<script>
			// Esta es la llamada a facebook FB.getLoginStatus()
			function statusChangeCallback(response) {
				if (response.status === "connected") {
					procesarLogin();
				} else {
					console.log("No se pudo identificar");
				}
			}

			// Verificar el estatus del login
			function checkLoginState() {
				FB.getLoginStatus(function(response) {
					statusChangeCallback(response);
				});
			}

			// Definir características de nuestra app
			window.fbAsyncInit = function() {
				FB.init({
					appId      : "'.$appID.'",
					xfbml      : true,
					version    : "v3.2"
				});
				FB.AppEvents.logPageView();
			};

			// Ejecutar el script
			(function(d, s, id){
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) {return;}
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/es_LA/sdk.js";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, \'script\', \'facebook-jssdk\'));
			
			// Procesar Login
			function procesarLogin() {
				FB.api(\'/me?fields=id,name,email\', function(response) {
					console.log(response);
					$.ajax({
						method: "POST",
						url: "includes/acciones.php",
						data: { 
							facebooklogin: 1,
							nombre: response.name,
							email: response.email,
							id: response.id
						}
					})
					.done(function( response ) {
						console.log( response );
						datos = JSON.parse( response );
						UIkit.notification.closeAll();
						UIkit.notification(datos.msj);
						if(datos.estatus==0){
							location.reload();
						}
					});
				});
			}
		</script>

		':'';


// Reportar actividad
	$scriptGNRL.=(!isset($_SESSION['uid']))?'':'
		<script>
			var w;
			function startWorker() {
			  if(typeof(Worker) !== "undefined") {
			    if(typeof(w) == "undefined") {
			      w = new Worker("js/activityClientFront.js");
			    }
			    w.onmessage = function(event) {
					//console.log(event.data);
			    };
			  } else {
			    document.getElementById("result").innerHTML = "Por favor, utiliza un navegador moderno";
			  }
			}
			startWorker();
		</script>
		';

/* %%%%%%%%%%%%%%%%%%%% BUSQUEDA               */
	$scriptGNRL.='
		<script>
			$(document).ready(function(){
				$(".search").keyup(function(e){
					if(e.which==13){
						var consulta=$(this).val();
						var l = consulta.length;
						if(l>2){
							window.location = ("'.$ruta.'"+consulta+"_gdl");
						}else{
							UIkit.notification.closeAll();
							UIkit.notification("<div class=\'bg-danger color-blanco\'>Se requiren al menos 3 caracteres</div>");
						}
					}
				});
				$(".search-button").click(function(){
					var consulta=$(".search-bar-input").val();
					var l = consulta.length;
					if(l>2){
						window.location = ("'.$ruta.'"+consulta+"_gdl");
					}else{
						UIkit.notification.closeAll();
						UIkit.notification("<div class=\'bg-danger color-blanco\'>Se requiren al menos 3 caracteres</div>");
					}
				});
			});
		</script>';

/* %%%%%%%%%%%%%%%%%%%% WHATSAPP PLUGIN               */
	$scriptGNRL.=(isset($_SESSION['whatsappHiden']))?'':'
		<script>
			setTimeout(function(){
				$("#whatsapp-plugin").addClass("uk-animation-slide-bottom-small");
				$("#whatsapp-plugin").removeClass("uk-hidden");
			},1000);
			setTimeout(function(){
				$("#whats-body-1").addClass("uk-hidden");
				$("#whats-body-2").removeClass("uk-hidden");
			},6000);
		</script>
			';

	$scriptGNRL.='
		<script>
			$("#whats-close").click(function(){
				$("#whatsapp-plugin").addClass("uk-hidden");
				$("#whats-show").removeClass("uk-hidden");
				$.ajax({
					method: "POST",
					url: "includes/acciones.php",
					data: { 
						whatsappHiden: 1
					}
				})
				.done(function( msg ) {
					console.log(msg);
				});
			});
			$("#whats-show").click(function(){
				$("#whatsapp-plugin").removeClass("uk-hidden");
				$("#whats-show").addClass("uk-hidden");
				$("#whats-body-1").addClass("uk-hidden");
				$("#whats-body-2").removeClass("uk-hidden");
				$.ajax({
					method: "POST",
					url: "includes/acciones.php",
					data: { 
						whatsappShow: 1
					}
				})
				.done(function( msg ) {
					console.log(msg);
				});
			});
		</script>';

		$scriptGNRL.='
		<script>
		$(document).ready(function(){
			load_data();
			function load_data(query)
			{
				$.ajax({
					url:"fetch.php",
					method:"post",
					data:{query:query},
					success:function(data)
					{
						$("#result").html(data);
					}
				});
			}
			
			$("#search_text").keyup(function(){
				var search = $(this).val();
				if(search != "")
				{
					load_data(search);
				}
				else
				{
					load_data();			
				}
			});
		});
		</script>
		';


