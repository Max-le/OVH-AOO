<?php



$flux = imap_open("{ssl0.ovh.net:993/imap/ssl}INBOX", "info@qonnect.fr", "fy3RBkgk78");

$imap_obj = imap_check($flux);
var_dump($imap_obj);

  ?>