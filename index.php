<?php
$host = 'dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com'; //host
$username = 'admin'; //username
$password = 'root1234'; //password
$database = 'db_1820944'; //db


$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<body onload="loadXMLDoc()">

<h2>Using the XMLHttpRequest Object</h2>

<div id="demo">
</div>

<script>
function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "btsprofile.xml", true);
  xhttp.send();
}
</script>
</body>
</html>
