<?php

##Generate an HTML file for the article
$title = $json->title;

#Replace \n by <ln> ( for html)
$body = str_replace("\n", "<br>",$json->body );

echo $body;

// Signature line

$end = "<br><br><br><em>Cet article a été généré par Web2Kindle à ".  date("h:i:sa")."</em>";
echo $end;



  ?>