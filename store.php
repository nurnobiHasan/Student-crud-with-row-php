<?php
	$sqlconnect=mysqli_connect("localhost","root","","student_crud");
	$id=$_POST["id"];
	$name=$_POST["name"];
	$age=$_POST["age"];
	$roll=$_POST["roll"];
	$reg=$_POST["reg"];
	$address=$_POST["address"];
	$insertdata="insert into student_information(name,age,roll,reg,address) values('$name',$age,$roll,$reg,'$address')";
	$query=mysqli_query($sqlconnect,$insertdata);
	if($query==true){
		session_start();
		$_SESSION["success"]=1;
		header("location:index.php");
		
	}else{
		session_start();
		$_SESSION["error"]=1;
		header("location:index.php");
		
	}
	
	

?>