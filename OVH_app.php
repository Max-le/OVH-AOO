
<!DOCTYPE html>
<html>
<head>
	<title>APPLI OVH </title>
</head>
<body>
<?php 

$appkey = '9WKB1PtG17IQGkHy'; 
$appsecret = '8Mh7TWtlEBszINr8nblFhQy1wTtfZB4O' ; 
$consumerkey = 'JGHsZ56VPMtqKerGx11a2yP5ipHBswOf' ;

?> 

<?php
/**
 * First, download the latest release of PHP wrapper on github ( DONE )
 * And include this script into the folder with extracted files ( DONE )
 */
require __DIR__ . '/vendor/autoload.php';
use \Ovh\Api;

/**
 * Instanciate an OVH Client.
 * You can generate new credentials with full access to your account on
 * the token creation page
 */
$ovh = new Api( $appkey,  // Application Key
                $appsecret,  // Application Secret
                'ovh-eu',      // Endpoint of API OVH Europe (List of available endpoints)
                $consumerkey); // Consumer Key

//dns_record contains a list of IDs ( each record is identified by an ID)
$dns_record = $ovh->get('/domain/zone/qonnect.fr/record');


for ($i=0; $i < count($dns_record); $i++) { 
	$record_data = $ovh->get('/domain/zone/qonnect.fr/record/'.$dns_record[$i]); ;
	$myJSON = json_encode($record_data);
	$json = json_decode($myJSON, true);
	echo $json['target'].'<br>';

	//echo $myJSON .'<br>'; 
	k


}


?>



 




 


<h1 >Bonjour.</h1>
<h2>Nous sommes le  <?php  echo date(DATE_RSS); ?></h2>

</body>
</html>

