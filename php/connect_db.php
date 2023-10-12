<?php
$server = "sql300.epizy.com";
$username = "epiz_24911520";
$pass = "8aJXVLdeZx";

$con = new mysqli($server,$username,$pass);
if($con->connect_error){
	echo "Unable to connect.<br/>";
}

$con->select_db("epiz_24911520_cores");
?>