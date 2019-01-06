<!-- This part deals with the fetching of the XML file. -->

<?php

	$URL = 'http://rss.nytimes.com/services/xml/rss/nyt/Technology.xml';
	$myXMLdata = simplexml_load_file($URL);

foreach ($myXMLdata->channel->item as $item ) {
	 echo $item->title;
	 echo '<br>';
}

  ?>

