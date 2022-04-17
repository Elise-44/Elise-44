<?php
ini_set('display_errors',1);
error_reporting(E_ALL); 
header("Content-type: text/plain; charset=utf-8") ;
if(isset($_GET["Votre Prénom"])){
    if($_GET["Votre Prénom"]) {
        $Prenom=$_GET["Votre Prénom"];
        echo($Prenom."         ");

}  else{
    header("location:contact.html");
}
 
 } else {
        header("location:contact.html");
    }

    if(isset($_GET["Votre Nom"])){
        if($_GET["Votre Nom"]) {
            $nom=$_GET["Votre Nom"];
            echo($nom);
    
    }  else{
        header("location:contact.html");
    }
     
     } else {
            header("location:contact.html");
        }


        if(isset($_GET["Votre adresse e-mail"])){
            if($_GET["Votre adresse e-mail"]) {
                $adressemail=$_GET["Votre adresse e-mail"];
                echo($adressemail);
        
        }  else{
            header("location:contact.html");
        }
         
         } else {
                header("location:contact.html");
            }

            if(isset($_GET["Objet de votre message"])){
                if($_GET["Objet de votre message"]) {
                    $objet=$_GET["Objet de votre message"];
                    echo($objet);
            
            }  else{
                header("location:contact.html");
            }
             
             } else {
                    header("location:contact.html");
                }

            if(isset($_GET["Message"])){
                if($_GET["Message"]) {
                    $message=$_GET["Message"];
                    echo($message);
            
            }  else{
                header("location:contact.html");
            }
             
             } else {
                    header("location:contact.html");
                }
        require("vendor/autoload.php");                       // Ajoute et exécute le fichier
$mail = new PHPMailer\PHPMailer\PHPMailer();          
// Configuration du serveur SMTP
$mail->SMTPDebug = 1;                                 // Active/désactive les messages de mise au point
$mail->isSMTP();                                      // Utilise le protocole SMTP
$mail->Host = "smtp.gmail.com";                       // Configure le nom du serveur serveur SMTP
$mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS; // Active le cryptage sécurisé TLS
$mail->Port = 465;                                    // Configure le numéro de port
$mail->SMTPAuth = true;                               // Active le mode authentification
$mail->Username = "i2100549@gmail.com";               // Identifiant du compte SMTP
$mail->Password = "Azerty41.";                         // Mot de passe du compte SMTP
$mail->setFrom("utilisateur", "Mailer");
$mail->addAddress("bouardelise.pro@gmail.com", "Elise Bouard");     // Ajout du destinataire
// Contenu du mail
$mail->isHTML(true);                                  
$mail->Subject = "Le sujet du mail";
$mail->Body    = "Le message au format <b>html!</b>";
$mail->CharSet = PHPMailer\PHPMailer\PHPMailer::CHARSET_UTF8 ;
if($mail->send() != false) {
    echo("Le message électronique a été transmis.\n");
} 
else {
    echo("Le message électronique n'a pas été transmis.\n");
    echo("Mailer Error: "  . $mail->ErrorInfo);
}
