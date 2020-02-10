<?php


 $domOBJ = new DOMDocument();
 $domOBJ->load("https://www.nasa.gov/rss/dyn/breaking_news.rss");  
 
 $content = $domOBJ->getElementsByTagName("item");
 
 ?>
  <h1>BTS</h1>

    <?php
 foreach( $content as $data )
 { 


   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
   $description = $data->getElementsByTagName("description")->item(0)->nodeValue
   echo "
   <ul>
            <h2><a href = '$link'>$title </a></h2>
              <ul>
                  <li> $link </li>
                  <li> $description </li>
              </ul>
    </ul>
            ";
 }
?>
