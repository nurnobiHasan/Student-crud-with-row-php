<?php
	$sqlconnect=mysqli_connect("localhost","root","","student_crud");
	$id=$_GET["id"];
	$name=$_POST["name"];
	$age=$_POST["age"];
	$roll=$_POST["roll"];
	$reg=$_POST["reg"];
	$address=$_POST["address"];
	$updatedata="update student_information set name='$name',age='$age',roll='$roll',reg='$reg',address='$address' where id='$id'";
	$query=mysqli_query($sqlconnect,$updatedata);
	if($query==true){
		header('location:index.php');
	}else{
		echo"failed";
	}
?>
	