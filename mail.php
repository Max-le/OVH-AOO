<?php
    // Tentative de connexion
$imapLink = imap_open("{ssl0.ovh.net:993/imap/ssl}INBOX", "info@qonnect.fr", "fy3RBkgk78");

    // Test sur le retour de la fonction imap_open()
    if(!$imapLink) // Échec
    {
    	echo "La connexion a échoué.";
    }
    else // Connexion établie
    {
    	echo "Connexion établie.";
    }

     // On récupère les informations
    $mailBoxInfos = imap_check($imapLink);

    print_r($mailBoxInfos);

    ?>