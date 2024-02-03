<?php
session_start();

	
		if(isset($_SESSION["MyID"])){
			header('location: ../user/page');
		}

		else{
			header("location: user");
		
	}
	
	
?>