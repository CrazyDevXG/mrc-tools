<?php 
    require_once 'default_func.php'; 

                
    $invoice = $user->getOrder($MyID,'รอชำระเงิน');                                                                                
    $countInvoice = $invoice->rowCount();

    $receipt = $user->getOrder($MyID,'ชำระเงินแล้ว');
    $countReceipt = $receipt->rowCount();
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
                                            <div class="col-lg-12">

                                                <div class="tab-header card">
                                                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#team" role="tab">My Service</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <?php if(isset($_SESSION['ORDER_success'])){?>
                                                <div class="alert border-success alert-success">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <i class="ti-close"></i>
                                                    </button>
                                                    <p class="text-muted"><strong>[Successfully]</strong> - ทำการสั่งซื้อสำเร็จ กรุณาชำระค่าบริการเพื่อเปิดใช้งาน</p>
                                                </div>
                                                <?php } unset($_SESSION['ORDER_success']);?>


                                                <div class="tab-content">

                                                    <div class="tab-pane active" id="team" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-xl-3">
                                                                <div class="card">
                                                                    <div class="card-header contact-user">
                                                                        <img class="img-radius img-40" src="assets/images/<?php echo $fetcRow['M_img_path'];?>" alt="user">
                                                                        <h5 class="m-l-10"><?php echo $fetcRow['M_name'];?></h5>
                                                                    </div>                                                                    
                                                                    <div class="card-block groups-contact">
                                                                        <h4>บริการของฉัน</h4>
                                                                        <ul class="list-group">
                                                                            <li class="list-group-item justify-content-between">
                                                                                พร้อมใช้งาน
                                                                                <span class="badge badge-success badge-pill"><?php echo $countReceipt;?></span>
                                                                            </li>
                                                                            <li class="list-group-item justify-content-between">
                                                                                รอการชำระ
                                                                                <span class="badge badge-warning badge-pill"><?php echo $countInvoice;?></span>
                                                                            </li>
                                                                            <li class="list-group-item justify-content-between">
                                                                                หมดอายุ
                                                                                <span class="badge badge-danger badge-pill">0</span>
                                                                            </li>                                                                            
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                </div>

                                                                <div class="col-xl-5">
                                                                <div class="card">
                                                                    <div class="card-header">                                                                       
                                                                        <h5 class="m-l-10">รอการชำระเงิน</h5>
                                                                    </div>   
                                                                    <div class="card-block"> 
                                                                    <div class="dt-responsive table-responsive">
                                                                        <table id="left-right-fix" class="table nowrap">
                                                                        <thead>
                                                                             <tr>
                                                                                 <th>เลขที่บิล</th>
                                                                                 <th>รายการ</th>
                                                                                 <th>ยอดค้างชำระ</th>
                                                                                 <th></th>
                                                                                                
                                                                            </tr>
                                                                         </thead>
                                                                            <tbody>
                                                                            <?php                                                                                 
                                                                                while($fetOrder = $invoice->fetch(PDO::FETCH_ASSOC)){                                                                                           
                                                                                                                                                                                   
                                                                            ?>  
                                                                                <tr>
                                                                                    <td class="small"><?php echo $fetOrder['order_id'];?></td>
                                                                                    <td ><?php echo $fetOrder['order_service'];?></td>
                                                                                    <td class="text-danger"><?php echo number_format($fetOrder['order_total']);?></td>
                                                                                    <?php if($fetOrder['order_service'] == 'FREE'){?>
                                                                                        <td> <button type="button" class="btn btn-outline-warning" disabled><i class="icofont-baht"></i>รอดำเนินการ</button></td>
                                                                                        <?php }else{?>
                                                                                    <td><a href="my_payment?invoice=<?php echo $fetOrder['order_id'];?>"><button type="button" class="btn btn-outline-warning"><i class="icofont-baht"></i>ชำระเงิน</button></a></td>
                                                                                </tr>  
                                                                                <?php    }}?>   
                                                                            </tbody>                                                                           
                                                                        </table>
                                                                    </div>   
                                                                    
                                                                    </div>
                                                                </div>
                                                                </div> 
                                                                
                                                                <div class="col-xl-4">
                                                                <div class="card">
                                                                    <div class="card-header">                                                                       
                                                                        <h5 class="m-l-10">ใบเสร็จการชำระ</h5>
                                                                    </div>   
                                                                    <div class="card-block">  
                                                                    <div class="dt-responsive table-responsive">
                                                                        <table id="left-right-fix" class="table nowrap">
                                                                        <thead>
                                                                             <tr>
                                                                                 <th>เลขที่บิล</th>
                                                                                 <th>รายการ</th>
                                                                                 <th>ชำระแล้ว</th>
                                                                                 <th></th>
                                                                                                
                                                                            </tr>
                                                                         </thead>
                                                                            <tbody>
                                                                            <?php 
                                                                                
                                                                                while($fetcReceipt = $receipt->fetch(PDO::FETCH_ASSOC)){                                                                                           
                                                                                                                                                                                   
                                                                            ?>  
                                                                                <tr>
                                                                                    <td class="small"><?php echo $fetcReceipt['order_id'];?></td>
                                                                                    <td ><?php echo $fetcReceipt['order_service'];?></td>
                                                                                    <td class="text-primary"><?php echo number_format($fetcReceipt['order_total']);?></td>
                                                                                    <td> 
                                                                                     <a href="receipt?bill=<?php echo $fetcReceipt['order_id'];?>"><button type="button" class="btn btn-outline-success"><i class="icofont-ui-file"></i>ใบเสร็จ</button></a>                                                                                      
                                                                                    </td>
                                                                                </tr>  
                                                                                <?php    } ?>   
                                                                            </tbody>                                                                           
                                                                        </table>
                                                                    </div>                                                               
                                                                    </div>
                                                                </div>
                                                                </div> 
                                                            

                                            <div class="col-md-12">
                                                <div class="card table-card">
                                                    <div class="card-header">
                                                        <h5>Service Control</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i></li>                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover  table-borderless">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Product</th>
                                                                        <th>Package</th>
                                                                        <th>Connect MT4</th>
                                                                        <th>Status</th>
                                                                        <th>Start</th>
                                                                        <th>Expire</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <img src="assets/images/nebula-box.png" width="64px">
                                                                            <div class="d-inline-block align-middle">
                                                                                <h6>Nebula Dashboard</h6>
                                                                                <p class="text-muted m-b-0">Powerful Admin Theme</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>0.00 / </td>
                                                                        <td></td>                                                                       
                                                                        <td class="text-c-blue">Pending</td>
                                                                        <td class="text-c-green">----/--/--</td>
                                                                        <td class="text-c-yellow">----/--/--</td>
                                                                        <td><a href=""><i class="feather icon-more-vertical"></i></a></td>
                                                                    </tr>                                                                 
                                                                  
                                                                </tbody>
                                                            </table>
                                                           
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
   
</body>

</html>