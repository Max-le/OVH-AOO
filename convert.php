<?php

##Generate an HTML file for the article
$title = $json->title;

#Replace \n by <ln> ( for html)
$body = str_replace("\n", "<br>",$json->body );

echo $body;




  ?>