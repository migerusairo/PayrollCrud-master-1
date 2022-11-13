<?php include "php/read.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center">Employee's Info</h4><br>
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">ID No.</th>
			      <th scope="col">Name</th>
			      <th scope="col">Position</th>
				  <th scope="col">Contact no.</th>
				  <th scope="col">Monthly Salary</th>
				  <th scope="col">Overtime PHP</th>
				  <th scope="col">Total Income</th>
			      <th scope="col"> Update/Delete</th>
			    </tr>
			  </thead>

			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
			      <td><?=$rows['name']?></td>
			      <td><?=$rows['position']?></td>
				  <td><?=$rows['contact']?></td>
				  <td><?=$rows['salary']. " PHP"?></td>
				   <td><?=$rows['overtime']. " PHP"?></td>
				  <td><?php echo $rows['total']. " PHP";?></td>

			      <td><a href="update.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-success">Update</a>

			      	  <a href="php/delete.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			<div class="link-right">
				<a href="index.php" class="link-primary">New Payroll Registration</a>
			</div>
		</div>
	</div>
</body>
</html>