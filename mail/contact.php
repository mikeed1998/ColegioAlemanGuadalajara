<?php
	use PHPMailer\PHPMailer\PHPMailer;

	require 'src/Exception.php';
	require 'src/PHPMailer.php';
	require 'src/SMTP.php';

	if(isset($_POST['submitform'])) {
		if (empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['whatsapp']) || empty($_POST['mensaje']) || !filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL) ) {
			echo "No arguments Provided!";
			return false;
		}

		$nombre = strip_tags(htmlspecialchars($_POST['nombre']));
		$email = strip_tags(htmlspecialchars($_POST['correo']));
		$whatsapp = strip_tags(htmlspecialchars($_POST['whatsapp']));
		$mensaje = strip_tags(htmlspecialchars($_POST['mensaje']));

		// echo'holi';
		// echo $nombre;
		// echo $email;
		// echo $tema;
		// echo $mensaje;

		$mail = new PHPMailer(true);


		//Server settings
		$mail->SMTPDebug = 0;                      //Enable verbose debug output
		//$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'mail.wozial.com';                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = 'alexis@wozial.com';                     //SMTP username  {{{  networking@apf.org.mx }}}
		$mail->Password   = '2P2lYvtSAZX9';                               //SMTP password
		$mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
		$mail->Port       = 465;                                       //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
	
		//Recipients
		$mail->setFrom($email, $nombre);
		$mail->addAddress('alexis@wozial.com', 'alex');     //Add a recipient
		// $mail->addAddress('ellen@example.com');               //Name is optional
	
		//Attachments
		// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
	
		//Content
		                              //Set email format to HTML
		$bodyHtml = '
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
			
			<title>Document</title>
		</head>
		<body style="margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif;">
			<style>
				.cont-correo-body{
					width: 50%;
					min-width: 370px;
					max-width: 600px;
					height: 800px;
					background: rebeccapurple;
					margin: 6% auto;
					display: flex;
					justify-content: center;
					align-items: center;
					flex-direction: column;
					box-shadow: 1px 1px 15px 10px rgba(0, 0, 0, 0.2);
					border-radius: 15px;
				}

				.cont-correo-body-header{
					width: 100%;
					height: 300px;
					border-top-left-radius: 15px;
					border-top-right-radius: 15px;
					background:linear-gradient(to bottom, rgba(171, 47, 82, 0.82) 0%, #ffaf53 100%);
				}

				.cont-i{
					width: 100%;
					height: 100%;
					display: flex;
					text-align: center;
					align-items: center;
					justify-content: center;
					flex-direction: column;
				}

				.fa-envelope-open{
					width: 100%;
					font-size: 220px;
					color: #ffffff;
					/* color:linear-gradient(to bottom, rgba(171, 47, 82, 0.82) 0%, #ffaf53 100%); */
				}

				.cont-i P{
					color: #ffffff;
					font-weight: bold;
					margin-top: 15PX;
					font-size: 40PX;
					border-radius: none;
					border-bottom: solid 3px rgba(0, 0, 0, 0.2) ; 
				}

				.cont-correo-body-medium{
					width: 100%;
					height: 500px;
					background: white;
				}

				.cont-mail-txt{
					width: 100%;
					height: 100%;
					display: flex;
					align-items: center;
					flex-direction: column;
				}
				
				.cont-mail-txt h2{
					width: 95%;
					padding-left: 10px;
					padding-right: 10px;
					display: flex;
					text-align: center;
					justify-content: center;
					margin-top: 20px;
				}

				::-webkit-scrollbar {
					display: none;
				}

				.cont-text-message{
					margin-top: 20px;
					width: 80%;
					height: 60%;
					background: rgb(246, 246, 246);
					overflow-y: scroll;
					scroll-behavior: auto;
					display: flex;
					justify-content: center;
					border-radius: 10px;
					padding-top: 20px;
					padding-left: 20px;
					padding-right: 20px;
					text-align: justify;
				}

				.cont-nombres-correos{
					font-weight: bold;
					text-align: center;
				}

				.cont-nombres-correos p{
					margin: 10px auto;
				}

			</style>
			<div class="cont-correo-display" style="width: 100%; height: 100%;
            										background: rgb(243, 243, 243);
            										display: flex;
            										align-items: center;
            										justify-content: center;">
				<div class="cont-correo-body" style="
													width: 50%;
													min-width: 370px;
													max-width: 600px;
													height: 800px;
													background: rgb(255, 255, 255);
													margin: 6% auto;
													display: flex;
													justify-content: center;
													align-items: center;
													flex-direction: column;
													box-shadow: 1px 1px 15px 10px rgba(0, 0, 0, 0.3);
													border-radius: 15px;">
					<div class="cont-correo-body-header" style="
																width: 100%;
																height: 300px;
																border-top-left-radius: 15px;
																border-top-right-radius: 15px;
																background:linear-gradient(to bottom,rgba(218, 167, 28, 0.986) 35%, rgb(209, 126, 1) 85%);">
						<div class="cont-i" style="
													width: 100%;
													height: 100%;
													display: flex;
													text-align: center;
													align-items: center;
													justify-content: center;
													flex-direction: column;">
							<span style="font-size: 80px; color: #000000;"><b>APF</b></span>
							<p style="
									color: #ffffff;
									font-weight: bold;
									margin-top: 15PX;
									font-size: 30px;
									border-radius: none;
									border-bottom: solid 5px rgba(255, 0, 0, 0.6) ; ">Colegio Aleman de Guadalajara</p>
						</div>
					</div>
					<div class="cont-correo-body-medium" style="            
																width: 100%;
																height: 500px;
																background: white;">
						<div class="cont-mail-txt" style="            
														width: 100%;
														height: 100%;
														display: flex;
														align-items: center;
														flex-direction: column;">
							<h2 style="            width: 95%;
									padding-left: 10px;
									padding-right: 10px;
									display: flex;
									text-align: center;
									justify-content: center;
									margin-top: 20px;">'.$whatsapp.'</h2>
							<div class="cont-nombres-correos" style="            
																	font-weight: bold;
																	text-align: center;">
								<P class="nombreT" style="margin: 10px auto;">'.$nombre.'</P>
								<P class="correoT" style="margin: 10px auto;">'.$email.'</P>
							</div>
							<div class="cont-text-message" style="            
																margin-top: 20px;
																width: 80%;
																height: 60%;
																background: rgb(246, 246, 246);
																overflow-y: scroll;
																scroll-behavior: auto;
																display: flex;
																justify-content: center;
																border-radius: 10px;
																padding-top: 20px;
																padding-left: 20px;
																padding-right: 20px;
																text-align: justify;">
								<p style="">'.$mensaje.'</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</body>
		</html>' ;


		$mail->isHTML(true);
		$mail->msgHTML($bodyHtml);
		$mail->Subject = "Formulario Contacto";
		$mail->Body =  $bodyHtml;    
		$mail->charset = "UTF-8";    
		// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
		$mail->send();
		// echo 'Message has been sent';
		header('Location: '. $rutaHome .'');

}

?>