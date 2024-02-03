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
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css">
</head>

<body>

    <?php include_once "Pre-loader.php"; ?>



    <div id="mrc" class="mrc">
        <div class="mrc-overlay-box"></div>
        <div class="mrc-container navbar-wrapper">

            <?php include_once "top-bar.php";?>

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
                                                            <a class="nav-link active" data-toggle="tab" href="#team" role="tab">MT4 Account</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <?php if(isset($_SESSION['Add_MT4_success'])){?>
                                                <div class="alert border-success alert-success">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <i class="ti-close"></i>
                                                    </button>
                                                    <p class="text-muted"><strong>[Successfully]</strong> - ทำการเพิ่มบัญชี MT4 ของท่านเรียบร้อยแล้ว</p>
                                                </div>
                                                <?php } unset($_SESSION['Add_MT4_success']);?>

                                                <?php if(isset($_SESSION['Edit_MT4_success'])){?>
                                                <div class="alert border-info alert-info">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <i class="ti-close"></i>
                                                    </button>
                                                    <p class="text-muted"><strong>[Successfully]</strong> - ทำการแก้ไข MT4 ของท่านเรียบร้อยแล้ว</p>
                                                </div>
                                                <?php } unset($_SESSION['Edit_MT4_success']);?>


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
                                                                        <button class="btn btn-block btn-info" data-toggle="modal" data-target="#AddMT4">เพิ่มบัญชี MT4</button>
                                                                    </div>
                                                                </div>    
                                                            </div>

                                            <div class="col-xl-9 col-md-9">
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
                                                                        <th class="text-right"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php     
                                                                     $myMT4 = $user->getMT4($_SESSION['MyID']);                                                                             
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
                                                                        <td class="dropdown text-right">
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-menu"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                            <a class="dropdown-item" data-toggle="modal" data-target="#Edit<?php echo $fetMT4['MT4_account'];?>"><i class="feather icon-edit"></i>Edit</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target="#remove<?php echo $fetMT4['MT4_account'];?>"><i class="feather icon-delete"></i>Delete</a>                  
                                                                            </div>
                                                                        </td>                                                                       
                                                                    </tr>  
                                                                    <?php    }?> 
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

            <div class="modal fade" id="AddMT4" tabindex="-1" role="dialog" aria-labelledby="AddMT4Title" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="AddMT4Title">เพิ่มบัญชี MT4</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="user_action" method="POST">
                <div class="modal-body">  
                    <div class="form-group">
                        <label>MT4 Account</label>
                        <input type="text" class="form-control" name="mt4" placeholder="เลขบัญชี MT4" />
                    </div>
                    <div class="form-group">
                    <label>Account Types</label>                
                        <select class="form-control" name="mt4_type">
                            <option value="" selected>ประเภทบัญชี</option>
                            <option value="Cent">บัญชี Cent</option>
                            <option value="Micro">บัญชี Micro</option>
                            <option value="Mini">บัญชี Mini</option>
                            <option value="Standard">บัญชี Standard</option> 
                            <option value="Real">บัญชี Real</option>   
                            <option value="PRO">บัญชี PRO</option>                              
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Broker</label>
                        <input type="text" class="form-control" name="broker" />
                    </div> 
                    <div class="form-group">
                        <label>Server Broker</label>
                        <input type="text" class="form-control" name="server" />
                    </div>
                    <div class="form-group">
                    <label>Leverage</label>                
                        <select class="form-control" name="mt4_leverage">
                            <option value="1:50">1:50</option>
                            <option value="1:100">1:100</option>
                            <option value="1:200">1:200</option>
                            <option value="1:300">1:300</option>
                            <option value="1:400">1:400</option>
                            <option value="1:500">1:500</option>
                            <option value="1:1000">1:1,000</option>                         
                        </select>
                    </div>                    
                </div>     
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
                    <button type="submit" name="saveFormMT4" class="btn btn-primary" value="Submit">Submit</button>
                </div>
                </form>
                </div>
            </div>
            </div>


            <?php     
                  $moMT4 = $user->getMT4($_SESSION['MyID']);                                                                             
                  while($ModalMT4 = $moMT4->fetch(PDO::FETCH_ASSOC)){                                                                                           
                                                                                                                                                                                   
            ?>  
            <div class="modal fade" id="Edit<?php echo $ModalMT4['MT4_account'];?>" tabindex="-1" role="dialog" aria-labelledby="EditMT4" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="EditMT4">แก้ไขข้อมูล MT4</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="user_action" method="POST">
                <div class="modal-body">  
                    <div class="form-group">
                        <label>MT4 Account</label>
                        <input type="text" class="form-control" value="<?php echo $ModalMT4['MT4_account'];?>" disabled />
                        <input type="text" name="mt4" value="<?php echo $ModalMT4['MT4_account'];?>" hidden />
                    </div>
                    <div class="form-group">
                    <label>Account Types</label>                
                        <select class="form-control" name="mt4_type">
                            <option value="<?php echo $ModalMT4['MT4_type'];?>" selected>บัญชี <?php echo $ModalMT4['MT4_type'];?></option>
                            <option value="Cent">บัญชี Cent</option>
                            <option value="Micro">บัญชี Micro</option>
                            <option value="Mini">บัญชี Mini</option>
                            <option value="Standard">บัญชี Standard</option> 
                            <option value="Real">บัญชี Real</option>   
                            <option value="PRO">บัญชี PRO</option>                              
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Broker</label>
                        <input type="text" class="form-control" name="broker" value="<?php echo $ModalMT4['MT4_broker'];?>" />
                    </div> 
                    <div class="form-group">
                        <label>Server Broker</label>
                        <input type="text" class="form-control" name="server" value="<?php echo $ModalMT4['MT4_server'];?>" />
                    </div>
                    <div class="form-group">
                    <label>Leverage</label>                
                        <select class="form-control" name="mt4_leverage">
                            <option value="<?php echo $ModalMT4['MT4_leverage'];?>"><?php echo $ModalMT4['MT4_leverage'];?></option>
                            <option value="1:50">1:50</option>
                            <option value="1:100">1:100</option>
                            <option value="1:200">1:200</option>
                            <option value="1:300">1:300</option>
                            <option value="1:400">1:400</option>
                            <option value="1:500">1:500</option>
                            <option value="1:1000">1:1,000</option>                         
                        </select>
                    </div>                    
                </div>     
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
                    <button type="submit" name="saveEditMT4" class="btn btn-primary" value="Submit">Submit</button>
                </div>
                </form>
                </div>
            </div>
            </div>
            <?php    }?> 



        </div>
    </div>



    <script type="text/javascript" src="assets/js/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="assets/js/modal.js"></script>
    <script type="text/javascript" src="assets/js/modalEffects.js"></script>
    <script type="text/javascript" src="assets/js/sweetalert.js"></script>
    <script src="assets/js/mrc.min.js"></script>
    <script src="assets/js/vartical-layout.min.js"></script>
    <script type="text/javascript" src="assets/js/script.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>

</html>