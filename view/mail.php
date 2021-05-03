<?php
/*##########Script Information#########
  # Purpose: Send mail Using PHPMailer#
  #          & Gmail SMTP Server 	  #
  # Created: 24-11-2019 			  #
  #	Author : Hafiz Haider			  #
  # Version: 1.0					  #
  # Website: www.BroExperts.com 	  #
  #####################################*/

//Include required PHPMailer files

include "../controller/livraisonsC.php";

$livraisonsC=new livraisonsC();
$listelivraisons=$livraisonsC->afficher_livraison();



	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "nature.pet1@gmail.com";
//Set gmail password
	$mail->Password = "191JMT2413";
//Email subject
	$mail->Subject = "Livraison";
//Set sender email
	$mail->setFrom('nature.pet1@gmail.com','Nature PET');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	$mail->addAttachment('img/attachment.png');
//Email body
	$mail->Body = "<h1>Madame,Monsieur</h1>
	<p>Bonjour $nom <br>
	Vous avez passé commande de $produit et nous vous en remercions </br>Votre commande a bien été prise en compte.<br>
	Elle sera acheminée par voie postale à l’adresse suivante : $adresse <br>
	Votre colis devrait vous parvenir sous un délai de 3 jours <br>
	Vous remerciant de votre confiance,</p>";
//Add recipient
	$mail->addAddress('mohamedskander.zouaoui@esprit.tn');
//Finally send email
	if ( $mail->send() ) {
		echo "Email Sent..!";
	}else{
		echo "Message could not be sent. Mailer Error: "{$mail->ErrorInfo};
	}
//Closing smtp connection
	$mail->smtpClose();
