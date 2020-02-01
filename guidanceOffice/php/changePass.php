<?php
session_start();
require_once('connect.php');

	if(isset($_POST['change']))
	{
		$sql="UPDATE admin SET pass ='".$_POST['conpassword']."' WHERE id ='".$_SESSION['SESS_MEMBER_ID']."'";
 		 mysql_query($sql);
			$message = "Your password had been updated! Please log in again.";
	 		echo "<script type='text/javascript'>alert('$message'); window.location='../index.php';</script>";
            return;
	}

?>