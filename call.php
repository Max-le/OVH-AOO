
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

include('credentials.php');
$ovh = new Api( $appkey,  // Application Key
                $appsecret,  // Application Secret
                'ovh-eu',      // Endpoint of API OVH Europe (List of available endpoints)
                $consumerkey); // Consumer Key

//dns_record contains a list of IDs ( each record is identified by an ID)

$domain_name = 'marielfrancois.be';

$dns_record = $ovh->get('/domain/zone/'.$domain_name.'/record');



echo '<p> Liste des enregistrements pour le domaine <em>'.$domain_name .'</em> : </p>';

for ($i=0; $i < count($dns_record); $i++) { 
	$record_data = $ovh->get('/domain/zone/'.$domain_name.'/record/'.$dns_record[$i]); ;
	$myJSON = json_encode($record_data);
	$json = json_decode($myJSON, true);
	echo $json['target'].'<br>';

	//echo $myJSON .'<br>'; 
	


}


?>