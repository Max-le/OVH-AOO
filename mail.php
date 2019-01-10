<?php



$flux = imap_open("{ssl0.ovh.net:993/imap/ssl}INBOX", "info@qonnect.fr", "fy3RBkgk78");

$imap_obj = imap_check($flux);

$sucess = imap_mail("max.09@outlook.com", "test ", "THIS IS A TEST MESSAGE.");

echo $sucess;
if ($sucess) {
	echo "Mail OK.";
}
else {
	"A problem occured.";
}
// var_dump($imap_obj);

  ?>