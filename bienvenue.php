<?php

$prenom=$_GET['prenom'];
$nom=$_GET['nom'];
$email=$_GET['mail'];
$sujet=$_GET['suj'];
$message=$_GET['mess'];

mail("benoit.fezoulefevre@gmail.com","Contacts du site","$message");

if (isset($_GET['ac_con'])) {
    if (isset($_GET['prenom'])) {
        echo "Bienvenue <strong>$prenom $nom</strong>,";
    }else{
        echo "Veuillez nous renseigner votre prenom. <br>";
    }
    if (isset($_GET['nom'])) {
        echo " votre message à bien été envoyé. <br>";
    }else{
        echo "Veuillez nous renseigner votre nom. <br>";
    }
    if (isset($_GET['mail'])) {
        echo "Merci de votre message,";
    }else{
        echo "Veuillez noue renseigner votre adresse mail. <br>";
    }
    if (isset($_GET['suj'])) {
        echo " nous vous répondrons";
    }else{
        echo "De quoi souhaitez-vous nous parler ?";
    }
    if (isset($_GET['mess'])) {
        echo " bientôt.";
    }else{
        echo "Vous avez oublié de mettre un message.";
    }
}else {
    echo "Merci de bien vouloir cocher les cgu";
}

?>