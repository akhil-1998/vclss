<?php
    session_start();
    include 'db.php';
    $message="";
    if(count($_POST)>0) {
        
        $result = mysqli_query($conn,"SELECT * FROM teacher WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
		$count  = mysqli_num_rows($result);
        $row  = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
		$_SESSION["firstname"] = $row['firstname'];
		$_SESSION["lastname"] = $row['lastname'];
        $_SESSION["email"] = $row['email'];
        } 
		
		if($count==0) {
			$message = "Invalid Username or Password!";
			echo "Invalid Username or Password!";
			
		}else {
			$message = "You are successfully authenticated!";
			header('location: ../dashboard/indexteacher.php');
		}
	}	

    
?>