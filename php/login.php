<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['ename']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$ename = validate($_POST['ename']);
	$pass = validate($_POST['password']);

	if (empty($ename)) {
		header("Location: ../index.php?error=Email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: ../index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE email='$ename' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $ename && $row['password'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: ../components/home.php");
		        exit();
            }else{
				header("Location: ../index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: ../index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: ../index.php");
	exit();
}
?>