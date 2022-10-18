<?php
	$sqlconnect=mysqli_connect("localhost","root","","student_crud");	
	$id=$_GET["id"];
	$delete="delete from student_information where id='$id'";
	$deletequert=mysqli_query($sqlconnect,$delete);
	if($deletequert==true){
		header("location:index.php");
	}
	else{
		echo"date deleted failed.";
	}
?>