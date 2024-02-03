<?php

require_once '../utility/user_class.php';
require_once '../../PHPmail/send_mail.php';

    if(isset($_POST['SaveForm'])){

        $user = new Member_use;

        $email = $_POST['email'];
        $password = $_POST['pass'];
        $fname = $_POST['f_name'];
        $lname = $_POST['ls_name'];
        $FulName = $fname.' '.$lname;
        $phone = $_POST['phone'];
        $banker = $_POST['banker'];
        $bankacc = $_POST['bank_account'];
        $address = $_POST['address'];
        $refID = $_POST['refID'];

       
        $mt4 = $_POST['mt4'];
        $broker = $_POST['broker'];
        $mt4type = $_POST['mt4_type'];

            
            $user->create_account($email,$password,$FulName,$phone,$banker,$bankacc,$address,$refID);           
            $NewID = $_SESSION["New_ID"];

            if($mt4 !== ''){
                $user->create_mt4($NewID,$mt4,$broker,$mt4type);										

                }
                
            send_mail($email, $FulName, $phone, $address);
            
            $user->linkto('../login/user');

    }





?>