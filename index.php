<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Blackmail List</title>
	<link rel="stylesheet" type="text/css" href="css/all.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/new.css" media="all" />
  </head>
  <body>
	<!-- On tables -->
	<div class="container mt-5 bg-primary pb-3" style="width:900px; margin:0 auto; border:2px solid red;border-radius:12px;min-height:450px;box-shadow:8px 6px 12px gray">
		<h1 class="text-center text-capitalize text-light py-4">student management system</h1>
		<div class="profile-image" style="text-align:center;" >
			<img src="pngegg.png" style="width:150px;height:auto;object-fit:cover;margin:0 auto;display:inline-block;"  alt="" />
		</div>
		<?php
			session_start();
			if(isset($_SESSION["success"])){?>
				<div class="alert alert-success my-3" role="alert">
					<p>data insert successfully.ENJOY !</p>
				</div>
			<?php
			session_destroy();
			}
		?>
		
		<?php 
		
		if(isset($_SESSION["error"])){?>
			<div class="alert alert-danger custom-alert" role="alert">
				<p>data insert failed!</p>
			</div>
		<?php
		session_destroy();
		}
		?>
		
		
		<a class="btn btn-success btn-lg text-capitalize mb-3" href="add.php">add student</a>
		<table class="table table-success table-striped text-center">
			<tr class='text-capitalize'>
				<td>student id</td>
				<td>student name</td>
				<td>age</td>
				<td>roll</td>
				<td>action</td>
			</tr>
			<?php	
				$sqlconnect=mysqli_connect("localhost","root","","student_crud");
				if($sqlconnect==true){
					$sqliselect="select * from student_information";
					$result=mysqli_query($sqlconnect,$sqliselect);
				}
				else{
					echo"false";
				}
						
				while($row=mysqli_fetch_assoc($result)){?>
					<tr>
						<td class="text-capitalize"><?php echo $row["id"];?></td>
						<td class="text-capitalize"><?php echo $row["name"];?></td>
						<td><?php echo $row["age"];?></td>
						<td><?php echo $row["roll"]?></td>
						<td><a href="view.php?id=<?php echo $row["id"]?>" class="btn btn-primary btn-small mx-2"><i class="fas fa-eye"></i> </a><a href="edit.php?id=<?php echo $row["id"]?>" class="btn btn-primary btn-small"><i class="fas fa-user-edit"></i></a><a class="btn btn-primary btn-small mx-2" onclick="return confirm('are you sure?')" href="delete.php?id=<?php echo $row['id'];?>"><i class="fas fa-trash-alt"></i></a></td>
					</tr>
				<?php		
				}
			?>
			
				
			
		</table>
	</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
  </body>
</html>
