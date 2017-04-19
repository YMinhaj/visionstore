<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "vision_store";

try
{
	$conn = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	echo "Connected Successfully";
	
/*$sqlquery = "insert into addc (name)Values ('Yousuf')";
$conn->exec($sqlquery);
*/
}
catch(PDOException $e)
{
	echo "Connection Failed".$e->getMessage();
}



?>