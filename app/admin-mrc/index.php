<?php
session_start();


			if(isset($_SESSION["AdminID"])){		
				header('location: page');

			}else{
				header('location: ../login/admin-mrc');
				
			}
	
	
?>