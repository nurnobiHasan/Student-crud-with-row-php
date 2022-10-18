<?php
	$id=$_GET["id"];
	$sqlconnect=mysqli_connect("localhost","root","","student_crud");
	$viewdata="select * from student_information where id='$id'";
	$viewquery=mysqli_query($sqlconnect,$viewdata);
	$result=mysqli_fetch_assoc($viewquery);
	
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
	<link rel="stylesheet" type="text/css" href="css/all.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/new.css" media="all" />
  </head>
  <body>
	<!-- On tables -->
	<div class="container mt-5 bg-primary pb-3" style="width:900px; margin:0 auto; border:2px solid red;border-radius:12px;min-height:450px;box-shadow:8px 6px 12px gray
	">
		<h1 class="text-center text-capitalize text-light py-4">student full information</h1>
		<div class="profile-image" style="text-align:center;" >
			<img src="pngegg.png" style="width:150px;height:auto;object-fit:cover;margin:0 auto;display:inline-block;"  alt="" />
		</div>
		<a class="btn btn-success btn-lg text-capitalize mb-3" href="add.php" style='margin-left:160px'>add student</a>
		<table class="table table-dark table-striped text-center table-hover my-3" style="width:560px;margin:0 auto;">
			<tr class='text-capitalize'>
				<td>student id</td>
				<td><?php echo $result["id"];?></td>
			</tr>
			<tr class='text-capitalize'>
				<td>student name:</td>
				<td><?php echo $result["name"];?></td>
			</tr>
			<tr class='text-capitalize'>
				<td>student age:</td>
				<td><?php echo $result['age'];?></td>
			</tr>
			<tr class='text-capitalize'>
				<td>student roll:</td>
				<td><?php echo $result['roll'];?></td>
			</tr>
			<tr class='text-capitalize'>
				<td>student reg:</td>
				<td><?php echo $result['reg'];?></td>
			</tr>
			<tr class='text-capitalize'>
				<td>student address:</td>
				<td><?php echo $result['address'];?></td>
			</tr>
			
		</table>	
		<a href="delete.php" class="my-3 btn btn-success btn-lg text-capitalize" style="margin-left:158px">go homepage</a>
	</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
  </body>
</html>

	
	
	
	
</body>
</html>