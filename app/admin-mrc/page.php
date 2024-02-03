<?php
require_once 'default_func.php';

$allMT4 = $admin->getAllMT4(5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Controller</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin Controller">
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

            <div class="mrc-main-container">
                <div class="mrc-wrapper">
                    <?php include_once "nav-bar.php"; ?>

                    <div class="mrc-content">
                        <div class="mrc-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">

                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="feather icon-users bg-c-yellow card1-icon"></i>
                                                        <span class="text-c-yellow f-w-600">สมาชิก</span>
                                                        <h4>0 </h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-yellow f-16 feather icon-user m-r-10"></i>Membership
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="feather icon-layout bg-c-blue card1-icon"></i>
                                                        <span class="text-c-blue f-w-600">MT4</span>
                                                        <h4>0</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-blue f-16 feather icon-monitor m-r-10"></i>Forex Account
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="feather icon-server bg-c-green card1-icon"></i>
                                                        <span class="text-c-green f-w-600">พร้อมใช้งาน</span>
                                                        <h4>0</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-green f-16 feather icon-calendar m-r-10"></i>last update
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="feather icon-clock bg-c-pink card1-icon"></i>
                                                        <span class="text-c-pink f-w-600">หมดอายุ</span>
                                                        <h4>0</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-pink f-16 feather icon-calendar m-r-10"></i>last update
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-xl-6 col-md-6">
                                                <div class="card table-card">
                                                    <div class="card-header">
                                                        <h5>MT4 Account</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-borderless">
                                                                <thead>
                                                                    <tr>                                                                        
                                                                        <th>Account</th>
                                                                        <th>Type</th>
                                                                        <th>Broker</th>
                                                                        <th>Server</th>                                                                       
                                                                        <th>Average</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php                                                                                 
                                                                      while($fetMT4 = $allMT4->fetch(PDO::FETCH_ASSOC)){                                                                                           
                                                                                                                                                                                   
                                                                ?> 
                                                                    <tr>
                                                                        <td>
                                                                            <img src="assets/images/broker/metatrader.png" alt="" class="img-fluid img-30">&nbsp;
                                                                            <?php echo $fetMT4['MT4_account'];?>
                                                                        </td>
                                                                        <td>บัญชี <?php echo $fetMT4['MT4_type'];?></td>
                                                                        <td><?php echo $fetMT4['MT4_broker'];?></td>
                                                                        <td><?php echo $fetMT4['MT4_server'];?></td>                                                                       
                                                                        <td><?php echo $fetMT4['MT4_leverage'];?></td>
                                                                    </tr> 
                                                                    <?php    }?>                                                                      
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="text-right  m-r-20">
                                                            <a href="my_mt4" class="b-b-primary text-primary">View all</a>
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

    <script type="text/javascript" src="assets/widget/chart.js/dist/Chart.js"></script>
    <script src="assets/widget/amchart/amcharts.js"></script>
    <script src="assets/widget/amchart/serial.js"></script>
    <script src="assets/widget/amchart/light.js"></script>
    <script src="assets/js/mrc.min.js"></script>
    <script src="assets/js/vartical-layout.min.js"></script>
    <script type="text/javascript" src="components/dashboard/data.js"></script>
    <script type="text/javascript" src="assets/js/script.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>

</html>