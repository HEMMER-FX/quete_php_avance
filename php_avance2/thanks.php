<?php

$email = filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL);

if(isset($_POST['submit_button']))
{
    if(!empty($_POST['user_lastname']) AND !empty($_POST['user_name']) AND !empty($_POST['object']) AND !empty($_POST['user_email']) || filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL) AND
    !empty($_POST['user_message']) AND !empty($_POST['tel']))
    {
        echo 'Merci ' . $_POST['user_lastname'] . ' ' . $_POST['user_name'] . ' de nous avoir contacté à propos de ' . $_POST['object'] . '. <br>';
        echo ' Un de nos conseiller vous contactera soit à l’adresse ' . $_POST['user_email'] . ' ou par téléphone au ' . $_POST['tel'] . ' dans les plus brefs délais pour traiter votre demande : <br><br> ';
        echo $_POST['user_message'];
    } else
    {
        echo "tout les champs ne sont pas remplis";
    }
}



?>
