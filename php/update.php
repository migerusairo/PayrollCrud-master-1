<?php 
if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
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
	$id = validate($_POST['id']);

	if (empty($name)) {
		header("Location: ../update.php?id=$id&error=Name is required");
	}else if (empty($position)) {
		header("Location: ../update.php?id=$id&error=Position is required");
    }else if (empty($contact)) {
		header("Location: ../update.php?id=$id&error=Contact is required");
	}else if (empty($salary)) {
		header("Location: ../update.php?id=$id&error=Salary is required");
	}else if (empty($overtime)) {
		header("Location: ../update.php?id=$id&error=Overtime is required");
	}else {

       $sql = "UPDATE users
               SET name='$name', position='$position' , contact='$contact' , salary='$salary',  overtime='$overtime' , total='$total'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: read.php");
}