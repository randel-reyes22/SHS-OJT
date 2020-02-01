<?php
	//Start session
	session_start();
	 
	//Include database connection details
	require_once('connect.php');
	 
	//Array to store validation errors
	$errmsg_arr = array();
	 
	//Validation error flag
	$errflag = false;
	 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}

	//Sanitize the POST values
	$regusername = clean($_POST['username']);
	$regpassword = clean($_POST['regpassword']);
	$adminpass = clean($_POST['adminpass']);

	//Input Validations
	if($regusername == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($regpassword == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../mainPage/index.php");
		exit();
	}
	
	$result = mysql_query("SELECT * FROM admin where pass='".md5($_POST['adminpass'])."'");
	$count=mysql_num_rows($result);

	if($count!=0)
	{
		mysql_query("INSERT INTO  admin (username, pass)
		VALUES ('$regusername', '".($_POST['regpassword'])."')");
		$message = 'Registration Success. You can now login';
		            echo "<script type='text/javascript'>alert('$message'); window.location='../index.php'</script>" ;
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../index.php");
		exit();
	}
	}
	else{
		$message = 'You dont have access to add user pls. contact the administrator';
		            echo "<script type='text/javascript'>alert('$message'); window.location='../mainPage/create.php'</script>" ;
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		exit();
	}
	}
?> 