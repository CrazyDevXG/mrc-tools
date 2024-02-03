<?php
require_once '../utility/user_class.php';

$user = new Member_use;


            if(isset($_POST['submitChange'])){
                $oldPass = $_POST['OldPass'];
                $newPass = $_POST['NewPass'];
                $uid = $_SESSION['MyID'];


                $user->change_password($uid,$oldPass,$newPass);
            }


            if(isset($_POST['btn-confirm'])){
                $uid = $_SESSION['MyID'];
                $ordertype = 'เช่า';
                $service = $_POST['package'];    
                $vps = $_POST['vps'];   

                    if($service != ''){
                        $package_list = match($service) {
                            "0" => 'FREE',
                            "999" => 'PRO999',
                            "2900" => 'PRO2900',
                            "6500" => 'PRO6500',
                            "12000" => 'PRO12000',
                            default => '',
                        };
                        $vps_list = match($vps) {
                            "350" => 'VPS350',
                            "1050" => 'VPS1050',
                            "1999" => 'VPS1999',
                            "3999" => 'VPS3999',
                            default => '',
                        };

                        $sumTotal = $service+$vps;

                        $user->create_order($uid,$ordertype,$package_list,$vps_list,$sumTotal);

                        $_SESSION['ORDER_success'] = "Success";
                        $user->linkto('my_service');
                    }else{
                        $user->linkto('nebula');
                    }

            }

            if(isset($_POST['saveFormMT4'])){
                    $id = $_SESSION['MyID'];
                    $mt4 = $_POST['mt4'];
                    $server = $_POST['server'];
                    $broker = $_POST['broker'];
                    $leverage = $_POST['mt4_leverage'];
                    $type = $_POST['mt4_type'];


                    $user->add_mt4($id,$mt4,$broker,$server,$leverage,$type);
                    $_SESSION['Add_MT4_success'] = "Success";
                    $user->linkto('my_mt4');
            }

            if(isset($_POST['saveEditMT4'])){
                $id = $_SESSION['MyID'];
                $mt4 = $_POST['mt4'];
                $server = $_POST['server'];
                $broker = $_POST['broker'];
                $leverage = $_POST['mt4_leverage'];
                $type = $_POST['mt4_type'];


                $user->edit_myMT4($id,$mt4,$broker,$server,$leverage,$type);
                $_SESSION['Edit_MT4_success'] = "Success";
                $user->linkto('my_mt4');
        }




            if (isset($_POST['btn_upload_payment'])) {

                $user = new Member_use();    
               
                $date1 = date("ymd");
             
                $numrand = (mt_rand(10000,99999));
                $img_file = (isset($_POST['img_payment']) ? $_POST['img_payment'] : '');
                $upload = $_FILES['img_payment']['name'];
            
                if ($upload !== '') {        
                    $typefile = strrchr($_FILES['img_payment']['name'], ".");       
                    if ($typefile == '.jpg' || $typefile  == '.jpeg' || $typefile  == '.png') {
            
                        $path = "upload/payment/";      
                        $newname = $numrand.'_'.$date1.$typefile;
                        $save_path = $path.$newname;
                      
                        move_uploaded_file($_FILES['img_payment']['tmp_name'], $save_path);
            
                        $pay_by = $_SESSION['MyID'];
                        $pay_order = $_POST['invoice'];
            
                        $upload = $user->upload_img($pay_order, $pay_by, $save_path);
            
                       
                        if ($upload === true) {
                            $user->linkto('my_service');
            
                        } else{      
                            $user->linkto('my_payment');
            
                         }
                    } 
            
                } else{       
                    $user->linkto('my_payment');
            
                }
            }


?>