<?php 
    require_once 'default_func.php'; 

    $bill = $user->getReceipt($MyID, $_GET['bill']);
    $fetcbill = $bill->fetch(PDO::FETCH_ASSOC);
    
    $myOrder = $fetcbill['order_service'];

    $service_list = match ($myOrder) {
        'PRO999' => 'Nebula Dashboard : 1 เดือน',
        'PRO2900' => 'Nebula Dashboard : 3 เดือน',
        'PRO6500' => 'Nebula Dashboard : 6 เดือน',
        'PRO12000' => 'Nebula Dashboard : 12 เดือน',
    };

    $service_amount = match ($myOrder) {
        'PRO999' => '3,500',
        'PRO2900' => '5,900',
        'PRO6500' => '10,900',
        'PRO12000' => '17,900',
    };

    $service_discount = match ($myOrder) {
        'PRO999' => '-2,501',
        'PRO2900' => '-3,000',
        'PRO6500' => '-4,400',
        'PRO12000' => '-5,900',
    };
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

            <?php include_once "top-bar.php";             

            ?>

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
                                        <div class="col-lg-2"></div>
                                            <div class="col-lg-8">
                                            <div class="card">
                                                <div class="row invoice-contact">
                                                    <div class="col-md-8">
                                                        <div class="invoice-box row">
                                                            <div class="col-sm-12">
                                                                <table class="table table-responsive invoice-table table-borderless">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><img src="assets/images/logo-black.png" class="m-b-10" alt></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Miracle Group</td>
                                                                        </tr>      
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row invoive-info">
                                                        <div class="col-md-4   invoice-client-info">
                                                            <h6>Client Information :</h6>
                                                            <h6 class="m-0">คุณ <?php echo $fetcRow['M_name'];?></h6>
                                                            <p class="m-0 m-t-10"><?php echo $fetcRow['M_address'];?></p>
                                                            <p class="m-0"><?php echo $fetcRow['M_phone'];?></p>
                                                            <p><?php echo $fetcRow['M_email'];?></p>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6">
                                                            <h6>Order Information :</h6>
                                                            <table class="table table-responsive invoice-table invoice-order table-borderless">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Date :</th>
                                                                        <td><?php echo $fetcbill['order_time'];?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Status :</th>
                                                                        <td>
                                                                            <span class="label label-success"><?php echo $fetcbill['order_status'];?></span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Pay Id :</th>
                                                                        <td>
                                                                            #<?php echo $fetcbill['order_id'];?>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6">
                                                            <h6 class="m-b-20">Invoice Number : 
                                                                <span>#<?php echo $fetcbill['order_id'];?></span>
                                                            </h6>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="table-responsive">
                                                                <table class="table  invoice-detail-table">
                                                                    <thead>
                                                                        <tr class="thead-default">
                                                                            <th>Description</th>
                                                                            <th>Quantity</th>
                                                                            <th>Amount</th>                                                                            
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <h6><?php echo $service_list;?></h6>
                                                                                <p class="text-danger"><?php echo $fetcbill['order_service'];?></p>
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td><?php echo $service_amount;?> ฿</td>                                                                            
                                                                        </tr>                                                                        
                                                                      
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table class="table table-responsive invoice-table invoice-total">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Sub Total :</th>
                                                                        <td><?php echo $service_amount;?> ฿</td>
                                                                    </tr>                                                                   
                                                                    <tr>
                                                                        <th>Discount :</th>
                                                                        <td class="text-danger"><?php echo $service_discount;?> ฿</td>
                                                                    </tr>
                                                                    <tr class="text-info">
                                                                        <td>
                                                                            <hr />
                                                                            <h5 class="text-primary">Total :</h5>
                                                                        </td>
                                                                        <td>
                                                                            <hr />
                                                                            <h5 class="text-primary"><?php echo number_format($fetcbill['order_total'],2);?> ฿</h5>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h6>Terms And Condition :</h6>
                                                            <p>เมื่อทำการชำระค่าสินค้าบริการแล้วจะไม่สามารถทำการขอคืนเงินหรือเปลี่ยนแปลงเป็นเงินสดได้ทุกกรณี หากมีข้อสงใสกรุณาติดต่อเจ้าหน้าที่ผู้ให้บริการ</p>                                          

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