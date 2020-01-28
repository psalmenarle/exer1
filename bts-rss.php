<?php


 $domOBJ = new DOMDocument();
 $domOBJ->load("btsprofile.xml");  
 
 $content = $domOBJ->getElementsByTagName("profile");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $realname = $data->getElementsByTagName("realname")->item(0)->nodeValue;
   $stagename = $data->getElementsByTagName("stagename")->item(0)->nodeValue;
   $position = $data->getElementsByTagName("position")->item(0)->nodeValue;
   $btype = $data->getElementsByTagName("btype")->item(0)->nodeValue;
   echo "
          $realname:$stagename:$position:$btype
   ";
 }
?>
</ul>
