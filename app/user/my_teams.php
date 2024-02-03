<?php 
    require_once 'default_func.php'; 
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
                                                            <a class="nav-link active" data-toggle="tab" href="#team" role="tab">My Team</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                    </ul>
                                                </div>


                                                <div class="tab-content">

                                                    <div class="tab-pane active" id="team" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-xl-3">

                                                                <div class="card">
                                                                    <div class="card-header contact-user">
                                                                        <img class="img-radius img-40" src="assets/images/<?php echo $fetcRow['M_img_path'];?>" alt="user">
                                                                        <h5 class="m-l-10"><?php echo $fetcRow['M_name'];?></h5>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <ul class="list-group list-contacts">
                                                                            <li class="list-group-item active"><a href="#">Group Lv1</a></li>
                                                                            <li class="list-group-item"><a href="#">Group Lv2</a></li>
                                                                            <li class="list-group-item"><a href="#">Group Lv3</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="card-block groups-contact">
                                                                        <h4>Group sales</h4>
                                                                        <ul class="list-group">
                                                                            <li class="list-group-item justify-content-between">
                                                                                ยอดขายกลุ่ม 1
                                                                                <span class="badge badge-primary badge-pill">0</span>
                                                                            </li>
                                                                            <li class="list-group-item justify-content-between">
                                                                                ยอดขายกลุ่ม 2
                                                                                <span class="badge badge-success badge-pill">0</span>
                                                                            </li>
                                                                            <li class="list-group-item justify-content-between">
                                                                                ยอดขายกลุ่ม 3
                                                                                <span class="badge badge-info badge-pill">0</span>
                                                                            </li>
                                                                            
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h4 class="card-title"><span class="f-15"> </span></h4>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="connection-list">
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-xl-9">
                                                                <div class="row">
                                                                    <div class="col-sm-12">

                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h5 class="card-header-text">Group Lv1</h5>
                                                                            </div>
                                                                            <div class="card-block contact-details">
                                                                                <div class="data_table_main table-responsive dt-responsive">
                                                                                    <table id="simpletable" class="table  table-striped table-bordered nowrap">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>Name</th>
                                                                                                <th>Email</th>
                                                                                                <th>Ranking</th>
                                                                                                <th>Status</th>
                                                                                                <th>Action</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>      
                                                                                        <?php 
                                                                                            $Team1 = $user->getTeam1($_SESSION['MyID']);
                                                                                            while($fetcAll = $Team1->fetch(PDO::FETCH_ASSOC)){                                                                                           
                                                                                                                                                                                   
                                                                                        ?>  
                                                                                            <tr>
                                                                                                <td>คุณ <?php echo $fetcAll['M_name'];?></td>
                                                                                                <td><?php echo $fetcAll['M_email'];?></td>
                                                                                                <td><?php echo $fetcAll['M_ranking'];?></td>
                                                                                                <td><?php echo $fetcAll['M_status'];?></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont-navigation-menu"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                       
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                           <?php    }
                                                                                           ?>
                                                                                        </tbody>
                                                                                        <tfoot>
                                                                                            <tr>
                                                                                                <th></th>
                                                                                                <th></th>
                                                                                                <th></th>
                                                                                                <th></th>
                                                                                                <th></th>
                                                                                            </tr>
                                                                                        </tfoot>
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
        </div>
    </div>



    <script type="text/javascript" src="assets/js/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>

    <script src="assets/js/mrc.min.js"></script>
    <script src="assets/js/vartical-layout.min.js"></script>
    <script type="text/javascript" src="assets/js/script.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script>
        function copy_link(element) {

            var copyText = document.getElementById("mylink");

            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
        }
    </script>
</body>

</html>