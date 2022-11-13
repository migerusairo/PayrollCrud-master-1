<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$name = validate($_POST['name']);
	$position = validate($_POST['position']);
	$contact = validate($_POST['contact']);
	$salary = validate($_POST['salary']);
	$overtime = validate($_POST['overtime']);

	$user_data = 'name='.$name. '&position='.$position. '&contact='.$contact. '&salary='.$salary. '&overtime='.$overtime ;

	if (empty($name)) {
		header("Location: ../index.php?error=Name is required&$user_data");
	}else if (empty($position)) {
		header("Location: ../index.php?error=Position is required&$user_data");
	}else if (empty($contact)) {
		header("Location: ../index.php?error=Contact is required&$user_data");
	}else if (empty($salary)) {
		header("Location: ../index.php?error=Salary is required&$user_data");
	}else if (empty($overtime)) {
		header("Location: ../index.php?error=Overtime is required&$user_data");
	}else {

       $sql = "INSERT INTO users(name, position, contact, salary, overtime) 
               VALUES('$name', '$position', '$contact', '$salary', '$overtime')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}