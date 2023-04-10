<?php


$id=$_GET['carid'];

include 'dbconnect.php';
$sql="UPDATE `tbl_login` SET sts = '2' WHERE username = '$id'";
if(mysql_query($sql,$con))
	echo "<script>alert(' Rejected!');location.href='index.php';</script>";
     else
     	{"<script>alert('error!');location.href='index.php';</script>";
		}

?>