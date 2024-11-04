<?php
$serverName="localhost";
$userName="root";
$password="";
$dbName="talha"
 $conn= new mysqli ($serverName,$userName,$password,$dbName);
 $sql="select * from admin";
 $res=mysqli_fetch_assoc($res);
 while($r=mysqli_fetch_assoc($res))
 {
 	echo $r["id"];
 	eacho "<br>";
 	eacho $r["name"];
 	eacho"<br>";
 }
 

?>