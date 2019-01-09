<?php

##Generate an HTML file for the article
$title = $json->title;

#Replace \n by <ln> ( for html)
$body = str_replace("\n", "<br>",$json->body );

echo $body;

// Signature line

$end = "<br><br><br><em>Cet article a été généré par Web2Kindle à ".  date("h:i:sa")."</em>";
echo $end;

$htmlstring = "<!DOCTYPE html>\n <html> \n <head> <meta charset=\"UTF-8\"> \n<title>".$title."</title> \n</head> \n<body> \n <h1>".$title."</h1> \n <p>".$body.$end. "</p> \n</body>";

// Create a file 
$htmlfile = fopen("article.html", "w");

// Write in file 
fwrite($htmlfile, $htmlstring);


  ?>