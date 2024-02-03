<?php
session_start(); 

require_once 'db_connect.php';

				class Member_use extends Config_DB{   

						public function login($uname,$upass) {
							try {
								$stmt = $this->conn->prepare("SELECT * FROM members WHERE M_email=:uname LIMIT 1");
								$stmt->execute([ ':uname'=>$uname ]);
								$fetcRow = $stmt->fetch(PDO::FETCH_ASSOC);
									if($stmt->rowCount() > 0 ) {

											if(password_verify($upass, $fetcRow['M_password'])) {

												$_SESSION["MyID"] = $fetcRow["M_id"];
												$_SESSION["MyName"] = $fetcRow["M_name"];
												$_SESSION["MyEmail"] = $fetcRow["M_email"];
												$_SESSION["MyRank"] = $fetcRow["M_ranking"];
											
												return true;
											}  
									}									
							}
							catch(PDOException $e) {
									echo $e->getMessage();
							}
						}


						//####################################################
						public function linkto($url) {
							header("Location: $url");
						}											


						//####################################################
						public function is_loggedin(){
							if(isset($_SESSION['MyID'])) {
							return true;
							
							}else{
								$this->linkto('../login/user');
							}
						}
						

						//####################################################
						public function logout() {							
							unset($_SESSION['MyID']);
							session_destroy();

							$this->linkto('../login/user');

						}


						//####################################################
						public function getMyUser($myID){
								$stmt = $this->conn->prepare("SELECT * FROM members WHERE M_id = :userID");
								$stmt->execute([ 
									':userID'=>$myID 
								]);							

								return $stmt;
						}

						//####################################################
						public function getOrder($myID, $Qstatus){
							$stmt = $this->conn->prepare("SELECT * FROM orders WHERE order_by=:userID AND order_status=:Qstatus");
							$stmt->execute([ 
								':userID'=> $myID,
								':Qstatus'=> $Qstatus
							]);							
					
							return $stmt;
					}

						//####################################################
						public function getCheckouts($myID, $myOrder){
							$stmt = $this->conn->prepare("SELECT * FROM orders WHERE order_by=:userID AND order_id=:myOrder");
							$stmt->execute([ 
								':userID'=> $myID,
								':myOrder'=> $myOrder
							]);							
										
							return $stmt;
					}

					
						//####################################################
						public function getReceipt($myID, $orderID){
							$stmt = $this->conn->prepare("SELECT * FROM orders WHERE order_by=:userID AND order_id=:orderID AND order_status=:Qstatus");
							$stmt->execute([ 
								':userID'=> $myID,
								':orderID'=> $orderID,
								':Qstatus'=> 'ชำระเงินแล้ว'
							]);							
					
							return $stmt;
					}

						//####################################################
						public function getInvoice($myID, $orderID){
							$stmt = $this->conn->prepare("SELECT * FROM orders WHERE order_by=:userID AND order_id=:orderID AND order_status=:Qstatus");
							$stmt->execute([ 
								':userID'=> $myID,
								':orderID'=> $orderID,
								':Qstatus'=> 'รอชำระเงิน'
							]);							
					
							return $stmt;
					}

						//####################################################
						public function getMT4($myID){
							$stmt = $this->conn->prepare("SELECT * FROM mt4 WHERE MT4_owner=:userID");
							$stmt->execute([ 
								':userID'=> $myID
							]);							
										
							return $stmt;
					}

						//####################################################
						public function getTeam1($myID){
							$stmt = $this->conn->prepare("SELECT * FROM members WHERE M_ref_id = :refID");
							$stmt->execute([ 
								':refID'=>$myID 
							]);							

							return $stmt;
					}

						//####################################################
						public function create_account($email, $password,  $FulName, $phone, $banker, $bankacc, $address, $refID){													

							$checkst = $this->conn->prepare("SELECT M_email FROM members WHERE M_email = :mail");							
							$checkst->execute([':mail' => $email]);
													
							if($checkst->rowCount() > 0){
								$_SESSION["Error_log"] = "error_register";
								$this->linkto('register');
						
							} 
							else {		
								$last = $this->conn->prepare("SELECT M_id,SUBSTRING(M_id,-5)+1 AS LastID FROM members ORDER BY M_id DESC");							
								$last->execute();	
								$row = $last->fetch(PDO::FETCH_ASSOC);
						
								$Last_ID = $row['LastID'];               
								$NewID = "mrc".sprintf("%03d",$Last_ID);
								$_SESSION["New_ID"] = $NewID;
						
								$HASHpass = password_hash($password, PASSWORD_DEFAULT);								
						
								$sql = "INSERT INTO members (M_id, M_name, M_email, M_password, M_phone, M_address, M_banker, M_bank_account, M_ranking, M_ref_id, M_status, M_date_register, M_img_path )
								VALUES(:Myid, :Mname, :Mmail, :Mpass, :Mphone, :Maddress, :Mbanker, :Mbankacc, 'Member', :MrefID, 'Active', NOW(), 'user-profile/customer.jpg' )";
								$stmt = $this->conn->prepare($sql);
								$stmt->execute([
									':Myid' => $NewID, 
									':Mname' => $FulName,
									':Mmail' => $email,
									':Mpass' => $HASHpass,
									':Mphone' => $phone,
									':Maddress' => $address,									
									':Mbanker' => $banker,
									':Mbankacc' => $bankacc,									
									':MrefID' => $refID									
								]);						
														
														
							}						
							
						}

						//###############################################################
						public function create_mt4($myID, $mt4, $broker, $type){

							$sql2 = "INSERT INTO mt4 (MT4_owner, MT4_account, MT4_broker, MT4_type, MT4_update) VALUES (:MT4owner, :MT4acc, :MT4broker, :MT4type, NOW())";
							$stmt2 = $this->conn->prepare($sql2);
							$stmt2->execute([
								':MT4owner' => $myID,
								':MT4acc' => $mt4,
								':MT4broker' => $broker,
								':MT4type' => $type
							]);	

						}

						//###############################################################
						public function add_mt4($myID, $mt4, $broker, $server, $leverage, $type){

							$sql2 = "INSERT INTO mt4 (MT4_owner, MT4_account, MT4_broker, MT4_server, MT4_leverage, MT4_type, MT4_update) VALUES (:MT4owner, :MT4acc, :MT4broker, :MT4server, :MT4leverage, :MT4type, NOW())";
							$stmt2 = $this->conn->prepare($sql2);
							$stmt2->execute([
								':MT4owner' => $myID,
								':MT4acc' => $mt4,
								':MT4broker' => $broker,
								':MT4server' => $server,
								':MT4leverage' => $leverage,
								':MT4type' => $type
							]);	
						
						}

						//###############################################################
						public function edit_myMT4($myID, $mt4, $broker, $server, $leverage, $type){

							$sql2 = "UPDATE mt4 SET MT4_broker=:MT4broker, MT4_server=:MT4server, MT4_leverage=:MT4leverage, MT4_type=:MT4type, MT4_update=NOW() WHERE MT4_owner=:MT4owner AND MT4_account=:MT4acc";
							$stmt2 = $this->conn->prepare($sql2);
							$stmt2->execute([
								':MT4owner' => $myID,
								':MT4acc' => $mt4,
								':MT4broker' => $broker,
								':MT4server' => $server,
								':MT4leverage' => $leverage,
								':MT4type' => $type
							]);	
						
						}

						//###############################################################
						public function remove_myMT4($myID, $mt4){

							$sql2 = "DELETE FROM mt4 WHERE MT4_owner=:MT4owner AND MT4_account=:MT4acc";
							$stmt2 = $this->conn->prepare($sql2);
							$stmt2->execute([
								':MT4owner' => $myID,
								':MT4acc' => $mt4								
							]);	
												
						}

						//###############################################################
						public function create_order($user, $type, $service, $vps, $amount){

							$lastOrder = $this->conn->prepare("SELECT order_id,SUBSTRING(order_id,-5)+1 AS LastID FROM orders ORDER BY order_id DESC");							
							$lastOrder->execute();	
							$row = $lastOrder->fetch(PDO::FETCH_ASSOC);
							$Last_Order = $row['LastID'];               
							$NewOID = "INV23/".sprintf("%05d",$Last_Order);	
							$_SESSION["New_Order"] = $NewOID;					
					
								$sql = "INSERT INTO orders (order_id, order_by, order_type, order_service, order_vps, order_total, order_status, order_time )
								VALUES(:ORid, :ORby, :ORtype, :ORservice, :ORvps, :ORtotal,  'รอชำระเงิน', NOW() )";
								$stmt = $this->conn->prepare($sql);
								$stmt->execute([
										':ORid' => $NewOID,
										':ORby' => $user,
										':ORtype' => $type,
										':ORservice' => $service,
										':ORvps' => $vps,
										':ORtotal' => $amount
															
								]);
						}

							//###############################################################
							public function change_password($id, $oldPass, $newPass){
								
								$stmt = $this->conn->prepare("SELECT * FROM members WHERE M_id=:myid LIMIT 1");
								$stmt->execute([ ':myid'=>$id ]);
								$fetcRow = $stmt->fetch(PDO::FETCH_ASSOC);
									if($stmt->rowCount() > 0 ) {

											if(password_verify($oldPass, $fetcRow['M_password'])) {
											
											$HASHpass = password_hash($newPass, PASSWORD_DEFAULT);	
											
											$sql = "UPDATE members SET M_password = :newpass WHERE M_id = :id";
											$stmt = $this->conn->prepare($sql);
											$stmt->execute([
													':newpass' => $HASHpass,
													':id' => $id						
											]);

											$this->linkto('logout');
										}else{
											$_SESSION['ERROR_changePass'] = "Password is wrong";
											$this->linkto('my_profile');
										}
									}
					}

							//###############################################################
							public function edit_profile($id, $EDname, $EDaddress, $EDbanker, $EDaccount){
								
								$stmt = $this->conn->prepare("SELECT * FROM members WHERE M_id=:myid LIMIT 1");
								$stmt->execute([ ':myid'=>$id ]);								
									if($stmt->rowCount() > 0 ) {				
																	
									$sql = "UPDATE members SET M_name = :Ename, M_address = :Eaddress, M_banker = :Ebanker, M_bank_account = :Eaccount WHERE M_id = :id";
									$stmt = $this->conn->prepare($sql);
									$stmt->execute([
											':Ename' => $EDname,
											':Eaddress' => $EDaddress,
											':Ebanker' => $EDbanker,
											':Eaccount' => $EDaccount,
											':id' => $id						
									]);
						
									$_SESSION['SAVE_Edit'] = "Success";
									$this->linkto('my_profile');
								}
								
							}


							//###############################################################
							public function edit_mt4($id, $EDaccount, $EDbroker, $EDserver, $EDleverage, $EDtype ){
								
								$stmt = $this->conn->prepare("SELECT * FROM mt4 WHERE MT4_owner =:IDowner LIMIT 1");
								$stmt->execute([ ':IDowner' => $id ]);								
									if($stmt->rowCount() > 0 ) {				
																	
									$sql = "UPDATE mt4 SET MT4_account=:EMaccount, MT4_broker=:EMbroker, MT4_server=:EMserver, MT4_leverage=:EMleverage, MT4_type=:EMtype, WHERE MT4_owner=:IDowner";
									$stmt = $this->conn->prepare($sql);
									$stmt->execute([
											':EMaccount' => $EDaccount,
											':EMbroker' => $EDbroker,
											':EMserver' => $EDserver,
											':EMleverage' => $EDleverage,
											':EMtype' => $EDtype,
											':IDowner' => $id						
									]);
						
									$_SESSION['SAVE_Edit'] = "Success";
									$this->linkto('my_mt4');
								}
								
							}


						//##############################################################
						public function upload_img($pay_order, $pay_by, $save_path){

							$stmt = $this->conn->prepare("INSERT INTO payment (pay_order, pay_by, pay_time, pay_img_file)VALUES (:pay_order, :pay_id,  NOW(), :pay_path)");							
							$stmt->execute([
								':pay_order' => $pay_order,
								':pay_id' => $pay_by,
								':pay_path' => $save_path

							]);

							if($stmt){
								unset($_SESSION['New_ID']);
								unset($_SESSION['New_Order']);
								return true;
							}else{
								return false;
							}							
						}


					



	}

?>