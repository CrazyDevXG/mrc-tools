<?php require_once 'default_func.php'; ?>

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
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v1.1">
    <link rel="stylesheet" type="text/css" href="assets/datatables.net/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/pages/advance-elements/css/bootstrap-datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/datedropper/datedropper.min.css" />
</head>

<body>

   <?php include_once"Pre-loader.php";?> 
  
   

    <div id="mrc" class="mrc">
        <div class="mrc-overlay-box"></div>
        <div class="mrc-container navbar-wrapper">  

        <?php include_once"top-bar.php";?>

        <?php include_once"chat-box.php";?>

            <div class="mrc-main-container">
                <div class="mrc-wrapper">
                <?php include_once"nav-bar.php";?> 

                    <div class="mrc-content">
                        <div class="mrc-inner-content">
                            <div class="main-body">
                            <div class="page-wrapper">

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>User Profile</h4>                    
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item" style="float: left;">
                        <a href="index"> <i class="feather icon-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item" style="float: left;"><a
                            href="#!">Edit Profile</a>
                    </li>                    
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="page-body">

    <div class="row">
        <div class="col-lg-12">
            <div class="cover-profile">
                <div class="profile-bg-img">
                    <img class="profile-bg-img img-fluid"
                        src="assets/images/user-profile/bg-img1.jpg" alt="bg-img">
                    <div class="card-block user-info">
                        <div class="col-md-12">
                            <div class="media-left">
                                <a href="#" class="profile-image">
                                    <img class="user-img img-radius" src="assets/images/<?php echo $fetcRow['M_img_path'];?>" width="128px" alt="user-img">
                                </a>
                            </div>
                            <div class="media-body row">
                                <div class="col-lg-12">
                                    <div class="user-title">
                                        <h2><?php echo $fetcRow['M_name'];?></h2>
                                        <span class="text-white"><?php echo $fetcRow['M_ranking'];?></span>
                                    </div>
                                </div>
                                <div>
                                    <div class="pull-right cover-btn">
                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600 text-white">Link แนะนำขาย</h6>
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-white"  onclick="copy_link('mylink_shop')">Copy &nbsp<i class="feather icon-link"></i></span>                                                
                                                <span class="input-group-text text-white"  onclick="goto_shop('<?php echo $_SESSION['MyID']; ?>')"><i class="feather icon-globe"></i></span>
                                             </div>
                                            <input type="text" class="form-control" id="mylink_shop" value="https://www.mrcmiracle.io/services/shop?ref=<?php echo $_SESSION['MyID']; ?>" disabled>                                           
                                        </div>
                                        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600 text-white">Link แนะนำสมัคร</h6>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-white"  onclick="copy_link('mylink_register')">Copy &nbsp<i class="feather icon-link"></i></span>
                                                <span class="input-group-text text-white"  onclick="goto_register('<?php echo $_SESSION['MyID']; ?>')"><i class="feather icon-globe"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="mylink_register" value="https://app.mrcmiracle.io/user/register?ref=<?php echo $_SESSION['MyID']; ?>" disabled>
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

    <div class="row">
        <div class="col-lg-12">

            <div class="tab-header card">
                <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab"
                            href="#personal" role="tab">Personal Info</a>
                        <div class="slide"></div>
                    </li>  
                    <li class="nav-item">
                        <a class="nav-link " data-toggle="tab"
                            href="#change_pass" role="tab">Change Password</a>
                        <div class="slide"></div>
                    </li>                    
                </ul>
            </div>
                <?php if(isset($_SESSION['ERROR_changePass'])){?>
                <div class="alert alert-warning icons-alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="ti-close"></i>
                    </button>
                    <p><strong>Cannot Change Password ! </strong> 
                    <code>รหัสผ่านเก่าไม่ถูกต้อง</code></p>
                </div>
                <?php } unset($_SESSION['ERROR_changePass']);?>
            <div class="tab-content">
                <div class="tab-pane active" id="personal" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">ข้อมูลส่วนตัวของฉัน</h5>
                            <button id="edit-btnrr" type="button"
                                class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                <i class="ti-pencil-alt"></i> แก้ไข
                            </button>
                        </div>
                        <div class="card-block">
                            <div class="view-info">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="general-info">
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-6">
                                                    <div class="table-responsive">
                                                        <table class="table m-0">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">User ID:</th>
                                                                    <td><?php echo $fetcRow['M_id'];?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Full Name:</th>
                                                                    <td><?php echo $fetcRow['M_name'];?></td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <th scope="row">Address</th>
                                                                    <td><?php echo $fetcRow['M_address'];?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Bank:</th>
                                                                    <td><?php echo $fetcRow['M_banker'];?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Account:</th>
                                                                    <td><?php echo $fetcRow['M_bank_account'];?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-xl-6">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">Email:</th>
                                                                    <td><?php echo $fetcRow['M_email'];?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Phone Number:</th>
                                                                    <td><?php echo $fetcRow['M_phone'];?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Date Registered:</th>
                                                                    <td><?php echo $fetcRow['M_date_register'];?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Status:</th>
                                                                    <td><?php echo $fetcRow['M_status'];?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Referral ID:</th>
                                                                    <td><?php echo $fetcRow['M_ref_id'];?></td>
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

                            <div class="edit-info">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="general-info">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="input-group">
                                                                        <span
                                                                            class="input-group-addon"><i
                                                                                class="icofont icofont-user"></i></span>
                                                                        <input
                                                                            type="text"
                                                                            class="form-control"
                                                                            placeholder="Full Name">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="form-radio">
                                                                        <div
                                                                            class="group-add-on">
                                                                            <div
                                                                                class="radio radiofill radio-inline">
                                                                                <label>
                                                                                    <input type="radio" name="radio" checked>
                                                                                    <i class="helper"></i>
                                                                                    Male
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="radio radiofill radio-inline">
                                                                                <label>
                                                                                    <input type="radio" name="radio">
                                                                                    <i class="helper"></i>Female
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input id="dropper-default" class="form-control" type="text" placeholder="Select Your Birth Date" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <select id="hello-single" class="form-control">
                                                                       
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="icofont icofont-location-pin"></i></span>
                                                                        <input type="text" class="form-control" placeholder="Address">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="col-lg-6">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="input-group">
                                                                        <span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>
                                                                        <input type="text" class="form-control" placeholder="Mobile Number">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="input-group">
                                                                        <span class="input-group-addon"><i class="icofont icofont-social-twitter"></i></span>
                                                                        <input type="text" class="form-control" placeholder="Twitter Id">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="input-group">
                                                                        <span class="input-group-addon"><i
                                                                                class="icofont icofont-social-skype"></i></span>
                                                                        <input type="email" class="form-control" placeholder="Skype Id">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="input-group">
                                                                        <span class="input-group-addon"><i class="icofont icofont-earth"></i></span>
                                                                        <input type="text" class="form-control" placeholder="website">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                                <a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>              
           

            
                <div class="tab-pane" id="change_pass" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">เปลี่ยนรหัสผ่าน</h5>                           
                        </div>
                        <div class="card-block">
                            <div class="view-info">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="general-info">
                                            <div class="row">
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-4">
                                                <form action="user_action" method="POST">
                                                    <table class="table">
                                                        <tbody>                                                          
                                                            <tr>
                                                                <td>
                                                                    <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text text-white"><i class="ti-lock"></i></span>
                                                                    </div>
                                                                        <input type="password" class="form-control" name="OldPass" id="OldPass" placeholder="รหัสผ่านเก่า" required>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text text-white"><i class="ti-lock"></i></span>
                                                                    </div>
                                                                        <input type="password" class="form-control" name="NewPass" id="NewPass" placeholder="รหัสผ่านใหม่" required>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text text-white"><i class="ti-lock"></i></span>
                                                                    </div>
                                                                        <input type="password" class="form-control" name="confNewPass" id="confNewPass" placeholder="ยืนยันรหัสผ่านใหม่">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" id="submitChange" name="submitChange" value="Change Now" class="btn btn-primary waves-effect waves-light m-r-20" disabled>Change Password</button>
                                                <a href="my_profile" class="btn btn-default waves-effect">Cancel</a>
                                            </div>
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
        </div>
    </div>

    
    
    <script type="text/javascript" src="assets/js/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>

    <script type="text/javascript" src="assets/js/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="assets/js/pages/advance-elements/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="assets/js/datedropper/js/datedropper.min.js"></script>

    <script src="assets/js/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/data-table/js/dataTables.bootstrap4.min.js"></script>
    <script src=".assets/js/datatables.net/js/dataTables.responsive.min.js"></script>

    <script src="assets/js/mrc.min.js"></script>
    <script src="assets/js/vartical-layout.min.js"></script>
    <script type="text/javascript" src="assets/js/script.min.js"></script>
    <script src="components/pages/user-profile.js"></script>

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

    <script>
            $('#NewPass, #confNewPass').on('keyup keydown', function () {

                $('#NewPass, #confNewPass').html('').css('border-color', 'red'); 
                $("#submitChange").prop("disabled", true); 

                if ($('#NewPass').val() === $('#confNewPass').val()) {
                    $('#NewPass, #confNewPass').html('').css('border-color', 'green'); 
                    $("#submitChange").prop("disabled", false);      
                }  
                        
            });
    </script>
</body>

</html>