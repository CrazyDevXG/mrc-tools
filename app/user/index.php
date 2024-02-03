<?php
session_start();


			if(isset($_SESSION["MyID"])){		
				header('location: page');

			}else{
				header('location: ../login/user');
				
			}
	
	
?>