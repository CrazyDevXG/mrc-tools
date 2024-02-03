<?php 

    require_once 'default_func.php'; 

    $myMT4 = $user->getMT4($MyID);
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

                                                                                            
            $countMt4 = $myMT4->rowCount();
            
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
                                            <?php include_once 'components/running-price/FxRates-API.php'; ?>

                                            <div class="col-xl-6 col-md-12">
                                                <div class="card user-card-full">
                                                    <div class="row m-l-0 m-r-0">
                                                        <div class="col-sm-4 bg-c-bk-gold user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <div class="m-b-25">
                                                                    <div class="border-gold"></div>
                                                                    <img src="assets/images/<?php echo $fetcRow['M_img_path']; ?>" class="img-radius-border-gold" width="108px" alt="User-Profile">
                                                                </div>
                                                                <h5 class="f-w-600"><?php echo $fetcRow['M_name']; ?></h5>
                                                                <p><?php echo $fetcRow['M_ranking']; ?></p>
                                                                <a href="my_profile" class="text-default"><i class="feather icon-edit m-t-10 f-16"></i> Edit</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="card-block">
                                                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">
                                                                    Information
                                                                </h6>
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <p class="m-b-10 f-w-600">Email</p>
                                                                        <h6 class="text-muted f-w-400">
                                                                            <?php echo $fetcRow['M_email']; ?>
                                                                        </h6>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <p class="m-b-10 f-w-600">Phone</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $fetcRow['M_phone']; ?>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">
                                                                    Link แนะนำขาย
                                                                </h6>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text text-white"  onclick="copy_link('mylink_shop')">Copy &nbsp<i class="feather icon-link"></i></span>
                                                                        <span class="input-group-text text-white"  onclick="goto_shop('<?php echo $_SESSION['MyID']; ?>')"><i class="feather icon-globe"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="mylink_shop" value="https://www.mrcmiracle.io/services/shop?ref=<?php echo $_SESSION['MyID']; ?>" disabled>
                                                                </div>

                                                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">
                                                                    Link แนะนำสมัคร
                                                                </h6>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text text-white"  onclick="copy_link('mylink_register')">Copy &nbsp<i class="feather icon-link"></i></span>
                                                                        <span class="input-group-text text-white"  onclick="goto_register('<?php echo $_SESSION['MyID']; ?>')"><i class="feather icon-globe"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="mylink_register" value="https://app.mrcmiracle.io/user/register?ref=<?php echo $_SESSION['MyID']; ?>" disabled>
                                                                </div>

                                                                <ul class="social-link list-unstyled m-t-40 m-b-10">

                                                                </ul>
                                                            </div>
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
                                                                      while($fetMT4 = $myMT4->fetch(PDO::FETCH_ASSOC)){                                                                                           
                                                                                                                                                                                   
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
                                                                                <p class="text-muted m-b-0">1 เดือน (Promotion)</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>999 / 1เดือน</td>
                                                                        <td><?php if(isset($mt4)){echo 2045678;}else{echo '<a href="my_mt4">เลือกบัญชี</a>';}?></td>
                                                                        <td class="text-c-blue">Pending</td>
                                                                        <td class="text-c-green">----/--/--</td>
                                                                        <td class="text-c-yellow">----/--/--</td>
                                                                        <td><i class="fa fa-ellipsis-v"></i></td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                            <div class="text-center">
                                                                <a href="my_service" class=" b-b-primary text-primary">View all</a>
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

    <script type="text/javascript" src="assets/widget/chart.js/dist/Chart.js"></script>
    <script src="assets/widget/amchart/amcharts.js"></script>
    <script src="assets/widget/amchart/serial.js"></script>
    <script src="assets/widget/amchart/light.js"></script>
    <script src="assets/js/mrc.min.js"></script>
    <script src="assets/js/vartical-layout.min.js"></script>
    <script type="text/javascript" src="components/dashboard/data.js"></script>
    <script type="text/javascript" src="assets/js/script.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script>
        function copy_link(element) {

            var copyText = document.getElementById(element);

            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
        }

        
        function goto_shop(ref){
            window.open('https://www.mrcmiracle.io/services/shop?ref='+ref, '_blank');
        };

        function goto_register(ref){
            window.open('https://app.mrcmiracle.io/user/register?ref='+ref, '_blank');
        };
    </script>
</body>

</html>