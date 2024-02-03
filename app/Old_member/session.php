<?php
		session_start();
			if($_SESSION['MyID'] == '')
			{
				header("location: ../login");
				exit();
			}
			require_once('connect.php');
	
?>