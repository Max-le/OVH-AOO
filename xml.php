<!-- This part deals with the fetching of the XML file. -->

<?php

	$URL = 'http://rss.nytimes.com/services/xml/rss/nyt/Technology.xml';
	$myXMLdata = simplexml_load_file($URL);

	 echo $myXMLdata->channel->item[0]->title;

  ?>