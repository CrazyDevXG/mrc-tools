<?php 
    require_once 'default_func.php'; 

    if(isset($_GET['invoice'])){
        $invoice = $_GET['invoice'];
    }

    $myorder = $user->getCheckouts($MyID, $invoice);
    $checkouts = $myorder->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard Controller - MRC </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="My App Controller">
    <meta name="author" content="#">

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/icon/feather/css/feather.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/icofont.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

    <?php include_once "Pre-loader.php"; ?>



    <div id="mrc" class="mrc">
        <div class="mrc-overlay-box"></div>
        <div class="mrc-container navbar-wrapper">

            <?php include_once "top-bar.php"; ?>

            <?php include_once "chat-box.php"; ?>

            <div class="mrc-main-container">
                <div class="mrc-wrapper">
                    <?php include_once "nav-bar.php"; ?>

                    <div class="mrc-content">
                        <div class="mrc-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">

                                        <div class="col-lg-4">
                                        <div class="card">
                                                <div class="card-header">
                                                    <h5>Payment</h5>
                                                    <div class="card-header-right">
                                                        <ul class="list-unstyled card-option">
                                                            <li><i class="feather icon-maximize full-card"></i></li>
                                                            <li><i class="feather icon-minus minimize-card"></i></li>                                                          
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="sub-title">Bank Account</div>                                                        
                                                    <img src="assets/images/banking.jpg" class="img-fluid">
                                                </div>
                                            </div>
                                            </div>

                                            <div class="col-lg-4">
                                        <div class="card">
                                                <div class="card-header">
                                                    <h5>Payment</h5>
                                                    <div class="card-header-right">
                                                        <ul class="list-unstyled card-option">
                                                            <li><i class="feather icon-maximize full-card"></i></li>
                                                            <li><i class="feather icon-minus minimize-card"></i></li>                                                          
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="sub-title">Invoice</div>    
                                                    <div class="dt-responsive table-responsive">                                                    
                                                    <table id="left-right-fix" class="table nowrap">
                                                        <thead>
                                                              <tr>
                                                                  <th>เลขที่บิล</th>                                                                  
                                                                  <th>ยอดค้างชำระ</th>          
                                                            </tr>
                                                          </thead>
                                                             <tbody>                                                            
                                                                 <tr>
                                                                     <td class="small"><?php echo $checkouts['order_id'];?></td>                                                                     
                                                                    <td class="text-danger"><?php echo number_format($checkouts['order_total'],2);?></td>
                                                                     
                                                                </tr>                                                                   
                                                            </tbody>                                                                           
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>

                                            <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>File Upload</h5>
                                                    <div class="card-header-right">
                                                        <ul class="list-unstyled card-option">
                                                            <li><i class="feather icon-maximize full-card"></i></li>
                                                            <li><i class="feather icon-minus minimize-card"></i></li>                                                           
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="sub-title">แจ้งการชำระบริการ</div>
                                                   
                                                <form action="user_action" method="POST" enctype="multipart/form-data">   
                                                    <label for="myfile">Upload_img : </label>                                    
                                                    <input type="file" id="img_payment" name="img_payment" accept="image/jpeg, image/png, image/jpg"> 
                                                    <input type="text" name="invoice" value="<?php echo $_GET['invoice'];?>" hidden>                                   
                                                    <div class="btn-box mt-5">                                    
                                                    <button type="submit" name="btn_upload_payment" id="btn_pay" class="btn btn-success" value="Submit" disabled>
                                                        แจ้งการโอนเงิน
                                                    </button>
                                                </form>
                                                </div>
                                            </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>



    <script type="text/javascript" src="assets/js/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>

    <script src="assets/js/mrc.min.js"></script>
    <script src="assets/js/vartical-layout.min.js"></script>
    <script type="text/javascript" src="components/dashboard/data.js"></script>
    <script type="text/javascript" src="assets/js/script.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script type="text/javascript">    
        $('#img_payment').on("click", function() {   
            $("#btn_pay").prop("disabled", false);
        }
    );
    </script>
</body>

</html>