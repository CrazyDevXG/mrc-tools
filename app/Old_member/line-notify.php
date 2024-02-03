<?php
  session_start();
  if($_GET['action'] == "pay"){ 
        $header = "แจ้งการชำระเงิน";
        $Uname = $_SESSION['UName'];
        $Phone = $_SESSION['UPhone'];  
        $UFA = $_SESSION['UFAID'];
        $UCredit = $_GET['CRD'];
        $USlip = $_GET['SLP'];

        $NewMessage = $header.
                    "\n".
                    "\n"."Member ID: ".$UFA.
                    "\n"."ชำระเงิน: ".$UCredit.
                    "\n".
                    "\n"."ชื่อ-นามสกุล: ".$Uname.
                    "\n"."เบอร์โทร: ".$Phone;

        $img = 'https://my.ufagame68.com/'.$USlip;              
        $imageFile = new CURLFILE($img);

        $url        = 'https://notify-api.line.me/api/notify';
        $token      = 'KnveCfN45rqBWZPiRPwXcnx9mC3LegcvNjn6T73c5k2';
        $headers    = ['Method: POST', 'Content-type: multipart/form-data',                        
                        'Authorization: Bearer '.$token
                    ];

        $data     = array ('message' => $NewMessage, 'imageFile' => $imageFile);       
        
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $url);
        curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec( $ch );
        curl_close( $ch );
        
        var_dump($result);
        $result = json_decode($result,TRUE);
        header("location: history");
    }

 if($_GET['action'] == "wit"){ 
        $header = "แจ้งการถอนเงิน";
        $Uname = $_SESSION['UName'];
        $Phone = $_SESSION['UPhone'];  
        $UFA = $_SESSION['UFAID'];
        $amount = $_GET['money'];
        $bank = $_GET['bk'];
        $account = $_GET['acc'];

        $NewMessage = $header.
                    "\n".
                    "\n"."UFA ID: ".$UFA.
                    "\n"."ถอนเงินจำนวน: ".$amount.
                    "\n".
                    "\n"."ธนาคาร: ".$bank.
                    "\n"."เลขบัญชี: ".$account.
                    "\n"."ชื่อ-นามสกุล: ".$Uname.
                    "\n"."เบอร์โทร: ".$Phone;
        
        $url        = 'https://notify-api.line.me/api/notify';
        $token      = 'KnveCfN45rqBWZPiRPwXcnx9mC3LegcvNjn6T73c5k2';
        $headers    = ['Method: POST', 'Content-type: multipart/form-data',                        
                        'Authorization: Bearer '.$token
                    ];

        $data     = array ('message' => $NewMessage);       
        
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $url);
        curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec( $ch );
        curl_close( $ch );
        
        var_dump($result);
        $result = json_decode($result,TRUE);
        header("location: history");
    }


?>