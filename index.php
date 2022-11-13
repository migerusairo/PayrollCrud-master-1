<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/create.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Employee's Registration</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="name">Name : </label>
		     <input type="name" 
		           class="form-control" 
		           id="name" 
		           name="name" 
		           value="<?php if(isset($_GET['name']))
		                           echo($_GET['name']); ?>" 
		           placeholder="Enter name">
		   </div>

		   <div class="form-group">
		     <label for="position">Position : </label>
		     <input type="position" 
		           class="form-control" 
		           id="position" 
		           name="position" 
		           value="<?php if(isset($_GET['position']))
		                           echo($_GET['position']); ?>"
		           placeholder="Enter Position">
		   </div>

		   <div class="form-group">
		     <label for="contact">Contact No. : </label>
		     <input type="contact" 
		           class="form-control" 
		           id="contact" 
		           name="contact" 
		           value="<?php if(isset($_GET['contact']))
		                           echo($_GET['contact']); ?>" 
		           placeholder="Enter Contact No.">
		   </div>

		     <div class="form-group">
		     <label for="salary">Monthly Salary : </label>
		     <input type="salary" 
		           class="form-control" 
		           id="salary" 
		           name="salary" 
		           value="<?php if(isset($_GET['salary']))
		                           echo($_GET['salary']); ?>" 
		           placeholder="Monthly Salary">
		   </div>

		    <div class="form-group">
		     <label for="overtime">Overtime (PHP) : </label>
		     <input type="overtime" 
		           class="form-control" 
		           id="overtime" 
		           name="overtime" 
		           value="<?php if(isset($_GET['overtime']))
		                           echo($_GET['overtime']); ?>" 
		           placeholder="Overtime Amount">
		   </div>

		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Create</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>