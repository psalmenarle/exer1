<?php
 $conn = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234") or die (mysqli_error($conn));
    $db = mysqli_select_db($conn, "db_1820944");

 if(mysqli_connect_errno($conn)){
        echo "Database connection failed!: ". mysqli_connect_errno();
}


 $sql = "SELECT * FROM btsprofile ORDER BY id DESC LIMIT 20";
 $query = mysqli_query($conn,$sql);
    
 header( "Content-type: text/xml");

echo "<?xml version='1.0' encoding='UTF-8'?>
 <rss version='2.0'>
 <channel>";
 
 while($row = mysqli_fetch_array($query)){
   $realname=$row['realname'];
   $stagename=$row['stagename'];
   $position=$row['position'];
   $btype=$row['btype'];
     
   echo "<profile>
   <realname>$realname</realname>
   <stagename>$stagename</stagename>
   <position>$position</position>
   <btype>$btype</btype>
   </profile>";
 }
 echo "</channel></rss>";
?>
