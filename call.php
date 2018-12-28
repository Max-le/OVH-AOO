
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
	


}


?>