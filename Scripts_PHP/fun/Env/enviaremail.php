<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/mapasparavida/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception; 
function email($email, $NMC, $locationpdf, $txtbaseemail)
{
	$reciveMail = $email;
	$mailhtml = '<body>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<style type="text/css">
		.txt-25{
			font-size: 25px;
			text-align: justify-all;
		}
		.txt-25-i{
			font-size: 25px;
			text-align: justify-all;
			font-style: italic;
		}
		.text-center{
			font-size: 25px;
			text-align: center;
		}
		.sub-txt{
			text-align: center;
		}
		.txt-itens{
			font-size: 24px;
		}
		.txt-itens1{
			font-size:  23px;
		}
		.txt-19{
			font-size: 19px;
			text-align: justify-all;
		}
		.txt-19-i{
			font-size: 19px;
			text-align: justify-all;
			font-style: italic;
		}
		.title-txt{
		 font-size:25px; 
		 font-weight: bold; 
		 text-align: center;
		}
		</style>
			<div class="section">
				<div class="container">
					<div class="row">
						<div class="col s12">
							'.$txtbaseemail.'
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<a href="https://app.mapaparaavida.com.br/Scripts_PHP/autodownload.php?arquivo='.$locationpdf.'">Clique aqui para baixar</a>
						</div>
					</div>
				</div>
			</div>
		</body>
	</html>';

	function enviar_email($mailhtml, $atachment, $nomecompleto, $email)
	{
		
		$mail = new PHPMailer(true);
		try {
		    //Server settings
		    $mail->CharSet = 'UTF-8';
		    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		    $mail->isSMTP();                                            //Send using SMTP
		    $mail->Host       = 'mail.elderth.com';                     //Set the SMTP server to send through
		    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		    $mail->Username   = 'seumapachegou@mapaparaavida.com.br';      //SMTP username
		    $mail->Password   = 'Relatorio.app@2023!';                     //SMTP password
		   	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   //SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
	    	$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set 465 `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
		  	$mail->setFrom('seumapachegou@mapaparaavida.com.br', 'Seu Mapa Chegou');
		    $mail->addAddress($email, $nomecompleto);     //Add a recipient
		    $mail->addReplyTo('seumapachegou@mapaparaavida.com.br', 'Informações');
		    //Attachments
		    $mail->addAttachment($atachment);         //Add attachments
		    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
		    //Content
		    $mail->isHTML(true);                                  //Set email format to HTML
		    $mail->Subject = 'Seu Mapa Chegou';
		    $mail->Body = $mailhtml;
		    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		    $mail->send();
		    echo "Sucesso";
		    // header('Location:scriptvalidate.php');
		} catch (Exception $e) {
		    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		    // header('Location:scriptvalidate.php');
		}
	}
	enviar_email( $mailhtml, $locationpdf, $NMC, $reciveMail);
}
?>