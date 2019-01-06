<!-- This part deals with the fetching of the XML file. -->

<?php

	echo 'hey !';
	$URL = 'http://rss.nytimes.com/services/xml/rss/nyt/Technology.xml';
	$myXMLdata = simplexml_load_file($URL);

	 print_r($myXMLdata);

  ?>