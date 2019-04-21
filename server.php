<?php
	session_start();
	$username = "";
	$email = "";
	$errors = array();

	// connect to the database
	$db = mysqli_connect('localhost', 'root', '', 'userdata');

	// If the registration button is clicked
	if (isset($_POST['register'])) {
		
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
		$type=$_GET['type'];
	

	
	// Ensure that form fields are filled properly
	

	if (empty($email)) {
		array_push($errors, "email is required");
	}

	if (empty($password_1)) {
		array_push($errors, "password_1 is required");
	}

	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}
		

	// If there are no errors, save user to database	
	if (count($errors) == 0) {
		// Encrypt password before storing in database (security)
		$sql = "INSERT INTO table_name (email,pass,type)
			VALUES ('$email','$password_1',$type)";
		mysqli_query($db, $sql);
		$_SESSION['username'] = $email;
		$_SESSION['success'] = "You are now logged in";
	


		header('location: login.php'); // Redirect to index page
	
	}
    }

//log user in from login page
if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);

	
	// Ensure that form fields are filled properly
	if (empty($username)) {
		array_push($errors, "username is required");
	}

	if (empty($password)) {
		array_push($errors, "password is required");
	}

	if(count($errors) == 0 ) {
		// Encrypt password before comparing with that from database
		$query = "SELECT * FROM table_name WHERE email='$username' AND pass='$password'";
		$result = mysqli_query($db, $query);
		if (mysqli_num_rows($result) == 1) {
			while($row=$result->fetch_assoc()){
				$_SESSION['username'] = $username;
				if($row['type']=='user'){

			header('location: user_page.php'); // Redirect to user page
	}
			if($row['type']=='startup'){

			header('location: startup_page.php'); // Redirect to startup page
	}
			if($row['type']=='finance'){

			header('location:finance_page.php'); // Redirect to finance page
	}
}
	     }else{
		  array_push($errors, "Wrong username/password");
		  header('location: login.php');
	     }
      }
}



//logout
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header('location: login.php');
}

?>	














