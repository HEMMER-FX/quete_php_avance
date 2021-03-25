<?php


    echo 'Merci ' . $_POST['user_lastname'] . ' ' . $_POST['user_name'] . ' de nous avoir contacté à propos de ' . $_POST['object'] . '. <br>';
    echo ' Un de nos conseiller vous contactera soit à l’adresse ' . $_POST['user_email'] . ' ou par téléphone au ' . $_POST['tel'] . ' dans les plus brefs délais pour traiter votre demande : <br><br> ';

    echo $_POST['user_message'];


?>
