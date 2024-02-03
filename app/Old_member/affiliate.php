<?php 
$titlePage = "Affiliate Program";
$Mtab = "affiliate";

                require_once "session.php";
                include_once "class_iquery.php";             

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
        Affiliate Program - MRC
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

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header p-3">
                        <h5 class="mb-2">Referral</h5>
                        <p class="mb-0">Track and find all the details about our referral program, your stats and
                            revenues.</p>
                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-3 col-6 text-center">
                                <div class="border border-light border-1 border-radius-md py-3">
                                    <h6 class="text-primary text-gradient mb-0">All Commisions</h6>
                                    <h4 class="font-weight-bolder mb-0"><span class="small">$ </span><span id="state1"
                                            countTo="0"></span></h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6 text-center">
                                <div class="border border-light border-1 border-radius-md py-3">
                                    <h6 class="text-primary text-gradient mb-0">All Membership</h6>
                                    <h4 class="font-weight-bolder mb-0"><span class="small"></span><span id="state2"
                                            countTo="1"></span></h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6 text-center mt-4 mt-lg-0">
                                <div class="border border-light border-1 border-radius-md py-3">
                                    <h6 class="text-primary text-gradient mb-0">Balance</h6>
                                    <h4 class="font-weight-bolder mb-0"><span class="small">$ </span><span id="state3"
                                            countTo="0"></span></h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6 text-center mt-4 mt-lg-0">
                                <div class="border border-light border-1 border-radius-md py-3">
                                    <h6 class="text-primary text-gradient mb-0">Refund Rate</h6>
                                    <h4 class="font-weight-bolder mb-0"><span id="state4" countTo="0"></span><span
                                            class="small"> %</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-5 col-12">
                                <h6 class="mb-0">Referral Link</h6>
                                <p class="text-sm">คัดลอกลิงค์แนะนำนี้ส่งให้ผู้ที่สนใจสมัครสมาชิก</p>
                                <div class="border border-light border-1 border-radius-md p-3">
                                    <p class="text-xs mb-2"></p>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="form-group w-70">
                                            <div class="input-group bg-gray-200 border-radius-md">
                                                <input class="form-control form-control-sm border-radius-md"
                                                    value="https://mrcmiracle.io/register/mr22001" type="text" disabled>
                                            </div>
                                        </div>
                                        <a href="javascript:;"
                                            class="btn btn-sm btn-outline-secondary ms-2 px-3 mb-0"><i
                                                class="material-icons text-sm me-2">copy</i> Copy</a>
                                    </div>
                                    <p class="text-xs mb-1">ลิงค์แนะนำนี้มีผลต่อส่วนแบ่งการตลาดและสิทธิประโยชน์อื่นๆ</p>
                                </div>
                            </div>
                            <div class="col-lg-7 col-12 mt-4 mt-lg-0">
                                <h6 class="mb-0">สิทธิประโยชน์</h6>
                                <p class="text-sm">และส่วนแบ่งการตลาดที่ฉันได้รับตามตำแหน่ง</p>
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="card card-plain text-center">
                                            <div class="card-body">
                                                <div
                                                    class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md mb-2">
                                                    <i class="material-icons opacity-10" aria-hidden="true">verified</i>
                                                </div>
                                                <p class="text-sm font-weight-normal mb-2">1.</p>
                                                <h5 class="font-weight-bolder">10<span class="small">%</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="card card-plain text-center">
                                            <div class="card-body">
                                                <div
                                                    class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md mb-2">
                                                    <i class="material-icons opacity-10" aria-hidden="true">verified</i>
                                                </div>
                                                <p class="text-sm font-weight-normal mb-2">2.</p>
                                                <h5 class="font-weight-bolder">10<span class="small">%</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="card card-plain text-center">
                                            <div class="card-body">
                                                <div
                                                    class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md mb-2">
                                                    <i class="material-icons opacity-10" aria-hidden="true">verified</i>
                                                </div>
                                                <p class="text-sm font-weight-normal mb-2">3.</p>
                                                <h5 class="font-weight-bolder">10<span class="small">%</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">

                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="card mb-4">
                    <div class="card-header pb-0 p-3">
                        <h6>My Memberships</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            สมาชิก</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            ลำดับชั้นที่</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            ลิงค์ผู้แนะนำ</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            วันที่สมัคร</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-3 py-1">
                                                <div>
                                                    <img src="assets/img/user-profile.png" class="avatar me-3"
                                                        alt="avatar image">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">m2208 : เด็กชาย ใจดี</h6>
                                                    <p class="text-sm font-weight-normal text-secondary mb-0">มี<span
                                                            class="text-success font-weight-bold"> 3</span> บัญชีเทรด
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <i class="material-icons ms-1 mt-1 text-success opacity-10"
                                                    aria-hidden="true" title="">expand_more</i>
                                                <p class="text-sm font-weight-normal mb-0">1</p>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-normal mb-0">m2201 : สมาชิก ทดสอบ</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-normal mb-0">06/10/2022</p>
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
    </div>

    </main>




    <!--   Core JS Files   -->
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="assets/js/plugins/countup.min.js"></script>
    <script>
    if (document.getElementById('state1')) {
        const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById('state2')) {
        const countUp = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById('state3')) {
        const countUp = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById('state4')) {
        const countUp = new CountUp('state4', document.getElementById("state4").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
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


    <script src="assets/js/plugins/dragula/dragula.min.js"></script>
    <script src="assets/js/plugins/jkanban/jkanban.js"></script>

    <script src="assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>