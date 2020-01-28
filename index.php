<?php
$host = 'dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com'; //host
$username = 'admin'; //username
$password = 'root1234'; //password
$database = 'db_1820944'; //db


$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


 $sql = "SELECT * FROM btsprofile ORDER BY id DESC LIMIT 20";
 $query = mysqli_query($con,$sql);
    
 header( "Content-type: text/xml");

echo "<?xml version='1.0' encoding='UTF-8'?>
 <rss version='2.0'>
 <channel>
 <realname> Yeontan </realname>
 <stagename> tanie </stagename>
 <position>cutie</position>
 <language>en-us</language>";
 
 while($row = mysqli_fetch_array($con,$query)){
   $realname=$row["realname"];
   $stagename=$row["stagename"];
   $position=$row["position"];
   $btype=$row["btype"];
     
   echo "<profile>
   <realname>$realname</realname>
   <stagename>$stagename</stagename>
   <position>$position</position>
   <btype>$btype</btype>
   </profile>";
 }
 echo "</channel></rss>";
?>
