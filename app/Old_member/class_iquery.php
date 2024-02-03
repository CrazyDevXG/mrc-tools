<?php     
require_once"connect.php";

                class MyUser extends Config_DB{      
                                        
                    public function login($uname,$upass) {
                        try {
                            $stmt = $this->db->prepare("SELECT * FROM members WHERE M_email=:uname LIMIT 1");
                            $stmt->execute([ ':uname'=>$uname ]);
                            $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
                                if($stmt->rowCount() > 0 AND $userRow["M_status"] == 'Active') {

                                        if(password_verify($upass, $userRow['M_password'])) {

                                            $_SESSION["MyID"] = $userRow["M_id"];
                                            $_SESSION["MyUser"] = $userRow["M_username"];
                                            $_SESSION["MyName"] = $userRow["M_name"];
                                            $_SESSION["MyPhone"] = $userRow["M_phone"];
                                            $_SESSION["MyRank"] = $userRow["M_ranking"];
                                        
                                            return true;
                                        }                                           
                                        else {                                               
                                            return false;
                                        }
                                }
                                if($stmt->rowCount() > 0 AND $userRow["M_status"] == 'Blocked') {

                                        $_SESSION["Blocked_log"] = "Blocked_log";
                                        header('location: login');
                                }
                        }
                        catch(PDOException $e) {
                                echo $e->getMessage();
                            }
                    }

                        public function is_loggedin() {
                                if(isset($_SESSION['MyID'])) {
                                return true;
                                }
                            }

                        public function redirect($url) {
                                header("Location: $url");
                            }
                            
                        public function logout() {
                                
                                unset($_SESSION['AdminID']);
                                session_destroy();
                                return true;
                        }


                        public function MyProfile($MyiD){                                   

                            $ProfileSQL = "SELECT * FROM members WHERE M_id = :MyID  ";
                            $result = $this->db->prepare($ProfileSQL);
                            $result->execute([ ':MyID'=>$MyiD ]);   

                            return $result;                         

                        }

                        public function EditProfile($MyName,$MyStatus,$MyiD){   

                            $EdSql = "UPDATE members SET M_name=:MyName, M_status=:MyStatus WHERE M_id = :MyID ";
                            $stm = $this->db->prepare($EdSql);
                            $stm->execute([ 
                                            ':MyName'=>$MyName, 
                                            ':MyStatus'=>$MyStatus, 
                                            ':MyID'=>$MyiD 
                                        ]);
                            
                            return true;
                                                                
                        }

                        public function ChangePassword($OldPass,$NewPass,$MyiD){

                            $HASHpass = password_hash($NewPass, PASSWORD_DEFAULT);

                            $MEsql = "SELECT * FROM members WHERE M_id=:MyID";
                            $stm = $this->db->prepare($MEsql); 
                            $stm->execute([ ':MyID'=>$MyiD ]);  
                            $userPass = $stm->fetch(PDO::FETCH_ASSOC);

                            $DATApass = $userPass["M_password"];

                            if(password_verify($OldPass, $DATApass)) {                   

                                        $ChangeSQL = "UPDATE members SET M_password=:HashPass WHERE M_id=:MyID ";    
                                        $UpdatePass = $this->db->prepare($ChangeSQL);
                                        $UpdatePass->execute([ ':HashPass'=>$HASHpass, ':MyID'=>$MyiD ]);  

                                        return true;
                                        
                                }else{                            
                                    $_SESSION["Error_Edit"] = "Error_Pass";
                                
                                }

                        }

                }



                class IQuery extends Config_DB {

                    public function ShowUser($UID){

                        $sql = "SELECT * FROM members WHERE M_id = :MemID ";
                        $stm = $this->db->prepare($sql); 
                        $stm->execute([ ':MemID'=>$UID ]);                         

                        return $stm;
                    }

                    public function ShowDataUser(){

                        $sql = "SELECT * FROM members ";
                        $result = $this->db->query($sql); 
                        $arr = $result->fetchAll(PDO::FETCH_ASSOC);  
                    
                            foreach ($arr as $row){                             

                               echo "<tr>                                    
                                        <td><a href='#'><i class='far fa-user-circle fa-lg'></i></a></td>
                                        <td>". $row['mem_id'] ."</td>                                                                                                 
                                        <td>". $row['mem_name'] ."</td>
                                        <td>". $row['mem_email'] ."</td> 
                                        <td>". $row['mem_tel'] ."</td> 
                                        <td>". number_format($row['mem_wallet'],2) ."</td>";                                                                                     
                                        
                                if($row['mem_status'] == 'Active'){
                                            echo "<td><span class='badge bg-success'>Active</span></td>";

                                            echo "<td>                                           
                                                    <span class='dropdown-toggle' id='dropdownMenuButton' data-bs-toggle='dropdown'>
                                                        <i class='ti-more-alt'></i>
                                                    </span>
                                                    <div class='dropdown-menu dropdown-menu-right' aria-labelledby='dropdownMenuButton'>               
                                                        <a class='dropdown-item' href='#'> <i class='far fa-user'></i> ดูช้อมูล</a>                                 
                                                        <a class='dropdown-item' href='#'> <i class='fas fa-user-edit'></i> แก้ไข</a>                                               
                                                        <a class='dropdown-item' href='#'> <i class='fas fa-ban'></i> ระงับบัญชี</a>
                                                    </div>                                           
                                                  </td>";
                                        
                                        }
                                else if($row['mem_status'] == 'Blocked'){
                                            echo "<td><span class='badge bg-danger'>Blocked</span></td>";
                                        
                                            echo "<td>                                           
                                                    <span class='dropdown-toggle' id='dropdownMenuButton' data-bs-toggle='dropdown'>
                                                        <i class='ti-more-alt'></i>
                                                    </span>
                                                    <div class='dropdown-menu dropdown-menu-right' aria-labelledby='dropdownMenuButton'>
                                                        <a class='dropdown-item' href='#'> <i class='far fa-user'></i> ดูช้อมูล</a>                                                 
                                                        <a class='dropdown-item' href='#'> <i class='fas fa-user-edit'></i> แก้ไข</a>                                               
                                                        <a class='dropdown-item' href='#'> <i class='far fa-check-circle'></i> ปลดบล็อค</a>
                                                    </div>                                           
                                                </td>";
                                        }                                

                                            echo   "</tr>";
                            }
                        
                    }   
                    
                    public function CountUser(){

                        $sql = "SELECT COUNT(*) AS CountAll FROM members ";
                        $result = $this->db->query($sql); 
                        $row = $result->fetch(PDO::FETCH_ASSOC);

                        echo $row['CountAll'];
                    }

                    public function NewUser(){
                       
                        $date = date_create('NOW');
                        date_add($date,date_interval_create_from_date_string("-7 days"));
                        $lastWeek = date_format($date,"Y-m-d");
                        

                        $sql = "SELECT COUNT(*) AS CountNew FROM members WHERE mem_regist_date >= :LastWeek  ";
                        $stmt = $this->db->prepare($sql); 
                        $stmt->execute([ 'LastWeek'=>$lastWeek ]);
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);

                        echo $row['CountNew'];
                    }


                    public function BanUser(){

                        $sql = "SELECT COUNT(*) AS CountBan FROM members WHERE mem_status = 'Blocked' ";
                        $result = $this->db->query($sql); 
                        $row = $result->fetch(PDO::FETCH_ASSOC);

                        echo $row['CountBan'];
                    }

                    public function ShowBalanceUser(){
                        
                        $sql = "SELECT * FROM members ";
                        $result = $this->db->query($sql); 
                        $arr = $result->fetchAll(PDO::FETCH_ASSOC);  
                    
                            foreach ($arr as $row){                             

                               echo "<tr>                                    
                                        <td><a href='#'><i class='far fa-user-circle fa-lg'></i></a></td>
                                        <td>". $row['mem_id'] ."</td>                                                                                                 
                                        <td>". $row['mem_name'] ."</td>                                       
                                        <td>". number_format($row['mem_wallet'],2) ."</td>";  

                               echo   "</tr>";
                            }

                        
                    }

                    public function AddMoney($amount,$UID){
                       
                        $selectSQL = "SELECT mem_wallet FROM members WHERE mem_id = :MemID ";
                        $selectSTM = $this->db->prepare($selectSQL); 
                        $selectSTM->execute([ ':MemID'=>$UID ]);
                        $row = $selectSTM->fetch(PDO::FETCH_ASSOC);

                        $sumCash = $row['mem_wallet']+$amount;

                        $updateSQL = "UPDATE members SET mem_wallet = :amount WHERE mem_id = :MemID ";
                        $updateSTM = $this->db->prepare($updateSQL);                         
                        $updateSTM->execute([ ':amount'=>$sumCash, ':MemID'=>$UID ]);
                        
                        
                        $_SESSION['Balance'] = $sumCash;
                                                
                    }                  

                    public function Deposit(){

                        $sql = "SELECT * FROM deposit";
                        $stm = $this->db->prepare($sql); 
                        $stm->execute();                         

                        return $stm;

                    }

                    public function Withdraw(){

                        $sql = "SELECT * FROM withdraw";
                        $stm = $this->db->prepare($sql); 
                        $stm->execute();                         

                        return $stm;
                    }

                    

                }





?>