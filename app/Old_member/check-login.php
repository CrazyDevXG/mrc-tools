<?php
session_start(); 
require_once 'connect.php';
include_once 'class_iquery.php';
$user = new MyUser;

					

					if(isset($_POST['btn-login'])) {

							$uname = $_POST['userLOG'];			
							$upass = $_POST['passLOG'];
							$hour = time() + (3600 * 24 * 60);

							if($user->login($uname,$upass)) {

									if(!empty($_POST["remember_user"])) {
										
										setcookie('User_log', $uname, $hour);
										setcookie('Upass_log', $upass, $hour);
										setcookie('URemember', 'checked', $hour);
									}
									else {

										setcookie('User_log', '');
										setcookie('Upass_log', '');
										setcookie('URemember', '');	
									}
									$user->redirect('dashboard');
							}
							else {

								$_SESSION["Error_log"] = "error_login";
			                	header('location: login');
							} 
						
					}

?>