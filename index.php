<?php


 $domOBJ = new DOMDocument();
 $domOBJ->load("https://exer-xml.herokuapp.com/rss.php");  
 
 $content = $domOBJ->getElementsByTagName("profile");
 
 ?>
  <h1>BTS</h1>

    <?php
 foreach( $content as $data )
 { ?>

<?php
   $realname = $data->getElementsByTagName("realname")->item(0)->nodeValue;
   $stagename = $data->getElementsByTagName("stagename")->item(0)->nodeValue;
   $position = $data->getElementsByTagName("position")->item(0)->nodeValue;
   $btype = $data->getElementsByTagName("btype")->item(0)->nodeValue;
   echo "
   <ul>
            <h2>BTS members</h2>
              <ul>
                  <li>Realname: $realname </li>
                  <li>Stagename: $stagename </li>
                  <li>Position: $position </li>
                  <li>Bloodtype: $btype </li>
              </ul>
    </ul>
            ";
  ?>
<?php
 }
?>
