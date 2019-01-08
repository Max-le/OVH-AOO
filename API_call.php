<?php 
        // create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, "https://newsapi.org/v2/top-headlines?country=be&apiKey=fc48327c5dd6468c9c80f74d205727c7"); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
         $output = curl_exec($ch);
         $json = json_decode($output);

         //GOT AN ARRAY AT THIS POINT
         $array = $json->articles;

         echo $text = $array[1]->description;

         

        // close curl resource to free up system resources 
        curl_close($ch);      
?>