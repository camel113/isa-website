<?php

require_once('PHPMailer/class.phpmailer.php');

$mail = new PHPMailer(); // defaults to using php "mail()"

$mail->From = 'votre@adresse.com';
$mail->AddAddress('adrienbigler@gmail.com');
$mail->AddReplyTo('noreply@adresse.com');
$mail->AddAttachment('img/affiche.pdf');
$mail->Subject = 'Exemple trouvé sur DVP';
$mail->Body = 'Voici un exemple d\'e-mail au format Texte';
if (!$mail->Send()) { //Teste le return code de la fonction
    echo $mail->ErrorInfo; //Affiche le message d'erreur (ATTENTION:voir section 7)
} else {
    echo 'Mail envoyé avec succès';
}

unset($mail);


