<?php
	$sqlconnect=mysqli_connect("localhost","root","","student_crud");
	$id=$_GET["id"];
	$viewdata="select * from student_information where id='$id'";
	$viewquery=mysqli_query($sqlconnect,$viewdata);
	$result=mysqli_fetch_assoc($viewquery);
	
	
	
?>
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
	<div class="container mt-5 bg-primary pb-5" style="width:650px;margin:0 auto">
		<h1 class="text-center text-capitalize text-light py-4">edit student</h1>
		<a class="btn btn-success btn-lg text-capitalize c-btn" href="index.php">student list</a>
		<form action="update.php?id=<?php echo $id;?>" method="post" style="width:85%;background:gray;margin:0 auto;padding:12px;box-sizing:border-box; border-radius:6px;box-shadow:0px 0px 12px red;">
		
			<label for="name" class="text-light text-uppercase my-3">name:</label>
			<input class="form-control" style="padding
			:4px; color:gray; padding-left:12px;box-sizing:border-box; width:100%" type="text" id="name" required name="name" value="<?php echo $result['name'];?>" placeholder="write your name...." />
			
			<label for="age" class="d-block text-light text-uppercase my-3">age:</label>
			
			<input type="int" style="padding
			:4px; color:gray; padding-left:12px;box-sizing:border-box;width:100%" id="age" name="age" value="<?php echo $result['age'];?>" placeholder="write your age...." />
			
			<label for="roll" class="d-block text-light text-uppercase my-3">roll:</label>
			
			<input type="number" style="padding
			:4px; color:gray; padding-left:12px;box-sizing:border-box; width:100%" id="roll" name="roll"  value="<?php echo $result['roll'];?>" required placeholder="write your roll...." />
			
			<label for="reg" class="d-block text-light text-uppercase my-3">reg:</label>
			
			<input type="number" style="padding
			:4px; color:gray; padding-left:12px;box-sizing:border-box; width:100%" id="reg" name="reg"  value="<?php echo $result['reg'];?>" required placeholder="write your reg...." />
			
			<label for="address" class="d-block text-light text-uppercase my-3">address</label>
			
			<input type="text" style="padding
			:4px; color:gray; padding-left:12px;box-sizing:border-box; width:100%" id="address" name="address"  value="<?php echo $result['address'];?>" placeholder="write your address..." />
			<input class="btn btn-primary mt-2 text-uppercase" type="submit" value="submit" />
		</form>
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