<?php 
        require_once "session.php";
        include_once "class_iquery.php";

            $titlePage = "My Profile";
            $Mtab = "profile";

            $Myid = $_SESSION["MyID"];
            $MyQuery = new MyUser;
            $Qr = $MyQuery->MyProfile($Myid);
            $Obj = $Qr->fetch(PDO::FETCH_ASSOC); 

            $Mid = $Obj["M_id"];									
            $Mname = $Obj["M_name"];																	
            $Mtel = $Obj["M_phone"];
            $Memail = $Obj["M_email"];	
            $Mrank = $Obj["M_ranking"];									
            $Mbank = $Obj["M_bank"];
            $Mbankacc = $Obj["M_bank_account"];	
            $Mrefid = $Obj["M_ref_id"];
            $Mrefname = $Obj["M_ref_name"];																			
            $RegistDate = $Obj["M_registered_date"];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>
        My Profile - MRC
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/css/material-dashboard.min.css" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
    <?php include"side-navbar.php";?>

    <div class="container-fluid my-3 py-3">
        <div class="row mb-5">
            <div class="col-lg-3">
                <div class="card position-sticky top-1">
                    <ul class="nav flex-column bg-white border-radius-lg p-3">
                        <li class="nav-item">
                            <a class="nav-link text-dark d-flex" data-scroll="" href="#profile">
                                <i class="material-icons text-lg me-2">person</i>
                                <span class="text-sm">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item pt-2">
                            <a class="nav-link text-dark d-flex" data-scroll="" href="#basic-info">
                                <i class="material-icons text-lg me-2">receipt_long</i>
                                <span class="text-sm">Basic Info</span>
                            </a>
                        </li>
                        <li class="nav-item pt-2">
                            <a class="nav-link text-dark d-flex" data-scroll="" href="#password">
                                <i class="material-icons text-lg me-2">lock</i>
                                <span class="text-sm">Change Password</span>
                            </a>
                        </li>
                        <li class="nav-item pt-2">
                            <a class="nav-link text-dark d-flex" data-scroll="" href="#line-con">
                                <i class="material-icons text-lg me-2">security</i>
                                <span class="text-sm">Line Connect</span>
                            </a>
                        </li>
                        <li class="nav-item pt-2">
                            <a class="nav-link text-dark d-flex" data-scroll="" href="#notifications">
                                <i class="material-icons text-lg me-2">campaign</i>
                                <span class="text-sm">Notifications</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 mt-lg-0 mt-4">

                <div class="card card-body" id="profile">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-sm-auto col-4">
                            <div class="avatar avatar-xl position-relative">
                                <img src="assets/img/user-profile.png" alt="bruce"
                                    class="w-100 rounded-circle shadow-sm">
                            </div>
                        </div>
                        <div class="col-sm-auto col-8 my-auto">
                            <div class="h-100">
                                <h5 class="mb-1 font-weight-bolder">
                                    <?php echo $_SESSION["MyName"];?>
                                </h5>
                                <p class="mb-0 font-weight-normal text-sm">
                                    ตำแหน่ง | <?php echo $Mrank;?>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
                            <span class="badge badge-success ms-auto mb-auto">Active</span>
                        </div>
                    </div>
                </div>

                <div class="card mt-4" id="basic-info">
                    <div class="card-header d-flex">
                        <h5>Personal Information</h5>
                        <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
                            <div class="form-check form-switch ms-2 my-auto">
                                <small>วันที่สมัคร : <?php echo $RegistDate;?></small>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <div class="input-group input-group-static">
                                    <label>สมาชิก</label>
                                    <input type="text" class="form-control" value="<?php echo $Mid;?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-8 mt-3">
                                <div class="input-group input-group-static">
                                    <label>ชื่อ-นามสกุล</label>
                                    <input type="text" class="form-control" value="<?php echo $Mname;?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="input-group input-group-static">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="<?php echo $Memail;?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="input-group input-group-static">
                                    <label>เบอร์โทร</label>
                                    <input type="text" class="form-control" value="<?php echo $Mtel;?>">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-4 mt-2">
                                <label>บัญชีธนาคาร</label>
                                <select class="form-control" name="choices-bank" id="choices-bank">
                                    <option value="<?php echo $Mbank;?>" selected><?php echo $Mbank;?></option>
                                    <option value="กสิกรไทย">กสิกรไทย</option>
                                    <option value="ไทยพาณิชย์">ไทยพาณิชย์</option>
                                    <option value="กรุงไทย">กรุงไทย</option>
                                    <option value="กรุงศรี">กรุงศรีอยุธยา</option>
                                    <option value="กรุงเทพ">กรุงเทพ</option>
                                    <option value="ออมสิน">ออมสิน</option>
                                </select>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="input-group input-group-static">
                                    <label>เลขที่บัญชี</label>
                                    <input type="text" class="form-control" value="<?php echo $Mbankacc;?>">
                                </div>
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-4 mt-3">
                                <div class="input-group input-group-static">
                                    <label>Referral ID</label>
                                    <input type="text" class="form-control"
                                        value="<?php echo $Mrefid." - ".$Mrefname;?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <button class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Update Info</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-4" id="password">
                    <div class="card-header">
                        <h5>Change Password</h5>
                    </div>
                    <div class="card-body pt-0">
                        <div class="input-group input-group-outline">
                            <label class="form-label">Current password</label>
                            <input type="password" name="OldPass" class="form-control">
                        </div>
                        <div class="input-group input-group-outline my-4">
                            <label class="form-label">New password</label>
                            <input type="password" name="NewPass" class="form-control">
                        </div>
                        <div class="input-group input-group-outline">
                            <label class="form-label">Confirm New password</label>
                            <input type="password" name="ConPass" class="form-control">
                        </div>
                        <h5 class="mt-5">Password requirements</h5>
                        <p class="text-muted mb-2">
                            โปรดตั้งรหัสผ่านที่มีความยากต่อการคาดเดา :
                        </p>
                        <ul class="text-muted ps-4 mb-0 float-start">
                            <li>
                                <span class="text-sm">รหัสผ่านควรมีตัวอักษรและตัวเลขผสมกัน</span>
                            </li>                           
                            <li>
                                <span class="text-sm">รหัสผ่านต้องมีความยาวอย่างน้อย 6 ตัวขึ้นไป</span>
                            </li>
                        </ul>
                        <button class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Update password</button>
                    </div>
                </div>

                <div class="card mt-4" id="line-con">
                    <div class="card-header d-flex">
                        <h5 class="mb-0">Line Connect</h5>
                        <span class="badge badge-secondary ms-auto mb-auto">non-connect</span>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="my-auto">Line Account</p>
                            <p class="text-secondary text-sm ms-auto my-auto me-3">Not Configured</p>
                            <button class="btn btn-sm btn-outline-dark mb-0" type="button">Set up</button>
                        </div>
                        <hr class="horizontal dark">
                    </div>
                </div>


                <div class="card mt-4" id="notifications">
                    <div class="card-header">
                        <h5>Notifications</h5>
                        <p class="text-sm">ตั้งค่ารูปแบบการแจ้งเตือนต่างๆ</p>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th class="ps-1" colspan="4">
                                            <p class="mb-0">Activity</p>
                                        </th>
                                        <th class="text-center">
                                            <p class="mb-0">Email</p>
                                        </th>
                                        <th class="text-center">
                                            <p class="mb-0">LINE</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="ps-1" colspan="4">
                                            <div class="my-auto">
                                                <span class="text-dark d-block text-sm">แจ้งเตือนความปลอดภัย</span>
                                                <span
                                                    class="text-xs font-weight-normal">การแจ้งเตือนเพื่อยืนยันตัวตนในการทำธุรกรรมที่สำคัญ</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                                class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                                <input class="form-check-input" checked type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                                class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-1" colspan="4">
                                            <div class="my-auto">
                                                <span class="text-dark d-block text-sm">บริการแจ้งเตือนล่วงหน้า</span>
                                                <span
                                                    class="text-xs font-weight-normal">การแจ้งเตือนบริการล่วงหน้าก่อนหมดอายุสัญญาเช่าระบบ</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                                class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                                class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckDefault">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <?php include"footer.php";?>
        </main>




        <!--   Core JS Files   -->
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script src="assets/js/plugins/choices.min.js"></script>


        <script src="assets/js/plugins/dragula/dragula.min.js"></script>
        <script src="assets/js/plugins/jkanban/jkanban.js"></script>
        <script>
        if (document.getElementById('choices-gender')) {
            var gender = document.getElementById('choices-gender');
            const example = new Choices(gender);
        }

        if (document.getElementById('choices-bank')) {
            var banks = document.getElementById('choices-bank');
            const example = new Choices(banks);
        }

        if (document.getElementById('choices-skills')) {
            var skills = document.getElementById('choices-skills');
            const example = new Choices(skills, {
                delimiter: ',',
                editItems: true,
                maxItemCount: 5,
                removeItemButton: true,
                addItems: true
            });
        }

        if (document.getElementById('choices-year')) {
            var year = document.getElementById('choices-year');
            setTimeout(function() {
                const example = new Choices(year);
            }, 1);

            for (y = 1900; y <= 2020; y++) {
                var optn = document.createElement("OPTION");
                optn.text = y;
                optn.value = y;

                if (y == 2020) {
                    optn.selected = true;
                }

                year.options.add(optn);
            }
        }

        if (document.getElementById('choices-day')) {
            var day = document.getElementById('choices-day');
            setTimeout(function() {
                const example = new Choices(day);
            }, 1);


            for (y = 1; y <= 31; y++) {
                var optn = document.createElement("OPTION");
                optn.text = y;
                optn.value = y;

                if (y == 1) {
                    optn.selected = true;
                }

                day.options.add(optn);
            }

        }

        if (document.getElementById('choices-month')) {
            var month = document.getElementById('choices-month');
            setTimeout(function() {
                const example = new Choices(month);
            }, 1);

            var d = new Date();
            var monthArray = new Array();
            monthArray[0] = "January";
            monthArray[1] = "February";
            monthArray[2] = "March";
            monthArray[3] = "April";
            monthArray[4] = "May";
            monthArray[5] = "June";
            monthArray[6] = "July";
            monthArray[7] = "August";
            monthArray[8] = "September";
            monthArray[9] = "October";
            monthArray[10] = "November";
            monthArray[11] = "December";
            for (m = 0; m <= 11; m++) {
                var optn = document.createElement("OPTION");
                optn.text = monthArray[m];
                // server side month start from one
                optn.value = (m + 1);
                // if june selected
                if (m == 1) {
                    optn.selected = true;
                }
                month.options.add(optn);
            }
        }

        function visible() {
            var elem = document.getElementById('profileVisibility');
            if (elem) {
                if (elem.innerHTML == "Switch to visible") {
                    elem.innerHTML = "Switch to invisible"
                } else {
                    elem.innerHTML = "Switch to visible"
                }
            }
        }

        var openFile = function(event) {
            var input = event.target;

            // Instantiate FileReader
            var reader = new FileReader();
            reader.onload = function() {
                imageFile = reader.result;

                document.getElementById("imageChange").innerHTML = '<img width="200" src="' + imageFile +
                    '" class="rounded-circle w-100 shadow" />';
            };
            reader.readAsDataURL(input.files[0]);
        };
        </script>
        <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
        </script>
        <script src="assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>