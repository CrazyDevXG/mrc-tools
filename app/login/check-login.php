<?php
require_once '../utility/user_class.php';
require_once '../utility/admin_class.php';

	

					
					$user = new Member_use;				

					if(isset($_POST['btn-login-user'])) {

							$uname = $_POST['Me_ID'];			
							$upass = $_POST['Me_Pass'];							

							if($user->login($uname,$upass)) {									
									$user->linkto('../user/page');

							}else {

								$_SESSION["Error_log"] = "error_login";
			                	$user->linkto('user');
							} 
						
					}
					



					$admin = new Admin_use;				

					if(isset($_POST['btn-login-admin'])) {

							$uname = $_POST['Adm_ID'];			
							$upass = $_POST['Adm_Pass'];						

							if($admin->login($uname,$upass)) {								
									$admin->linkto('../admin-mrc/page');

							}
							else {

								$_SESSION["Error_log"] = "error_login";
			                	$admin->linkto('admin-mrc');
							} 
						
					}


					

?>