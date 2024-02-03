<?php
session_start(); 

require_once 'db_connect.php';


                    class Admin_use extends Config_DB{   

						public function login($uname,$upass) {
							try {
								$stmt = $this->conn->prepare("SELECT * FROM admin_mrc WHERE admin_id=:uname LIMIT 1");
								$stmt->execute([ ':uname'=>$uname ]);
								$fetcRow = $stmt->fetch(PDO::FETCH_ASSOC);
									if($stmt->rowCount() > 0 ) {

											if(password_verify($upass, $fetcRow['admin_password'])) {

												$_SESSION["AdminID"] = $fetcRow["admin_id"];
												$_SESSION["AdminName"] = $fetcRow["admin_name"];
												$_SESSION["AdminRank"] = $fetcRow["admin_ranking"];
											
												return true;
											} 
									}									
							}
							catch(PDOException $e) {
									echo $e->getMessage();
							}
						}


						public function is_loggedin() {
							if(isset($_SESSION['AdminID'])) {
							return true;
							}else{
								header("Location: ../login/admin-mrc");
							}
						}

						public function linkto($url) {
							header("Location: $url");
						}
						
						
						public function logout() {							
							unset($_SESSION['AdminID']);
							session_destroy();

							$this->linkto('../login/admin-mrc');

						}

						//####################################################
						public function getMyAdmin($myID){
							$stmt = $this->conn->prepare("SELECT * FROM admin_mrc WHERE admin_id = :adminID");
							$stmt->execute([ 
								':adminID'=>$myID 
							]);							
					
							return $stmt;
					}

											//####################################################
											public function getAllMT4($limit){
												$stmt = $this->conn->query("SELECT * FROM mt4  LIMIT $limit");
																		
															
												return $stmt;
										}
		
						
}




?>