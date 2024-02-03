<?php 
$titlePage = "Add Accounts";
$Mtab = "add-account";

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
  Add Accounts - MRC
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
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

    <div class="container-fluid px-2 px-md-4">
<div class="card card-body mx-3 mx-md-4 mt-4">
<div class="row gx-4">
<div class="col-auto">
<div class="avatar avatar-xl position-relative">
<img src="assets/img/user-profile.png" alt="profile_image" class="w-100 rounded-circle shadow-sm">
</div>
</div>
<div class="col-auto my-auto">
<div class="h-100">
<h5 class="mb-1">
<?php echo $Mname;?>
</h5>
<p class="mb-0 font-weight-normal text-sm">
ตำแหน่ง | <?php echo $Mrank;?>
</p>
</div>
</div>

</div>
</div>
</div>


<div class="container-fluid py-4">
<div class="row min-vh-80">
<div class="col-lg-8 col-md-10 col-12 m-auto">
<h3 class="mt-3 mb-0 text-center">Add New Account</h3>
<p class="lead font-weight-normal opacity-8 mb-7 text-center">สั่งซื้อบริการ / เพิ่มบัญชีเทรด</p>
<div class="card">
<div class="card-header p-0 position-relative mt-n5 mx-3 z-index-2">
<div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
<div class="multisteps-form__progress">
<button class="multisteps-form__progress-btn js-active" type="button" title="Product Info">
<span>1. Package</span>
</button>
<button class="multisteps-form__progress-btn" type="button" title="Media">2. Broker</button>
<button class="multisteps-form__progress-btn" type="button" title="Socials">3. Account</button>
<button class="multisteps-form__progress-btn" type="button" title="Pricing">4. Confirm</button>
</div>
</div>
</div>
<div class="card-body">
<form class="multisteps-form__form">

<div class="multisteps-form__panel pt-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
<h5 class="font-weight-bolder">เลือกแพ็คเกจบริการ</h5>
<div class="multisteps-form__content">
<div class="row mt-3">
<div class="col-12 col-sm-6">
<label class="form-control ms-0">เลือกระบบ EA ของเรา</label>
<select class="form-control" name="choices-service" id="choices-service">
<option value="m-walk1" selected>MRC AI</option>
</select>
</div>
<div class="col-12 col-sm-6 mt-3 mt-sm-0">
<label class="form-control ms-0">เลือกแพ็คเกจบริการ</label>
<select class="form-control" name="choices-package" id="choices-package" req>
<option value="" selected> - </option>
<option value="1200">A.โปรโมชั่น  1,200 / 3เดือน (ไม่กำหนด IB)</option>
<option value="4900">B.โปรโมชั่น  4,900 / 12เดือน (กำหนด IB)</option>
<option value="7900">C.โปรโมชั่น  7,900 / 12เดือน (ไม่กำหนด IB)</option>
</select>
</div>
</div>
<div class="row">
<div class="col-sm-12 mt-sm-3 mt-3">
<p class="text-sm font-weight-nomal">**หมายเหตุเงื่อนไข**</p>
  <p class="text-xs">- การกำหนด IB หมายถึงลูกค้าสามารถใช้ EA เทรดได้ส่วนลดเฉพาะผู้สมัครใต้ลิงค์ IB โบรคเกอร์ที่เราได้กำหนดให้</p>
  <p class="text-xs">- ไม่กำหนด IB หมายถึงลูกค้าสามารถใช้ EA เทรดได้กับทุก IB ทุกโบรคเกอร์</p>
</div>
</div>
<div class="button-row d-flex mt-4">
<button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
</div>
</div>
</div>

<div class="multisteps-form__panel pt-3 border-radius-xl bg-white" data-animation="FadeIn">
<h5 class="font-weight-bolder">ข้อมูลโบรคเกอร์</h5>
<div class="multisteps-form__content">
<div class="row mt-3">
<div class="col-sm-6">
<label class="form-control ms-0">IB Broker (สำหรับผู้เลือก B.โปรโมชั่น)</label>
<select class="form-control" name="choices-broker" id="choices-broker">
<option value="" selected> - </option>
<option value="M Plus">Exclusive Markets</option>

</select>
 </div>
</div>
<div class="button-row d-flex mt-4">
<button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
<button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
</div>
</div>
</div>

<div class="multisteps-form__panel pt-3 border-radius-xl bg-white" data-animation="FadeIn">
<h5 class="font-weight-bolder">ข้อมูลบัญชีเทรด</h5>
<div class="multisteps-form__content">
<div class="row mt-3">
<div class="col-sm-6  mt-3">
<div class="input-group input-group-dynamic">
<label class="form-label">เลขบัญชี MT4</label>
<input class="multisteps-form__input form-control" type="text" />
</div>
</div>
<div class="col-sm-6 mt-3">
<div class="input-group input-group-dynamic">
<label class="form-label">ชื่อ Server Broker</label>
<input class="multisteps-form__input form-control" type="text" />
</div>
</div>
<div class="col-sm-4 mt-3">
<label class="form-control ms-0">Leverage</label>
<select class="form-control" name="choices-Leverage" id="choices-Leverage">
<option value="1:100" selected>1 : 100</option>
<option value="1:200">1 : 200</option>
<option value="1:500<">1 : 500</option>
<option value="1:1,000">1 : 1,000</option>
</select>
</div>
<div class="col-sm-4 mt-3">
<label class="form-control ms-0">ประเภทบัญชี</label>
<select class="form-control" name="choices-sizes" id="choices-currency">
<option value="USD" selected> USD</option>
<option value="Cent"> Cent</option>
</select>
</div>
<div class="col-sm-4 mt-6">
<div class="input-group input-group-dynamic">
<label class="form-label">ยอดเงิน Balance</label>
<input class="multisteps-form__input form-control" type="text" />
</div>
</div>
<div class="row">
<div class="button-row d-flex mt-4 col-12">
<button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
<button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
</div>
</div>
</div>
</div>
</div>

<div class="multisteps-form__panel pt-3 border-radius-xl bg-white h-100" data-animation="FadeIn">
<h5 class="font-weight-bolder">คำสั่งซื้อ</h5>
<div class="multisteps-form__content mt-3">
<div class="row">
<div class="col-3">

</div>
<div class="col-4">

</div>
<div class="col-5">

</div>
</div>
<div class="row">
<div class="col-12">

</div>
</div>
<div class="button-row d-flex mt-0 mt-md-4">
<button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
<button class="btn bg-gradient-dark ms-auto mb-0" type="button" title="Send">ยืนยัน</button>
</div>
</div>
</div>

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
<script src="assets/js/plugins/dropzone.min.js"></script>
<script src="assets/js/plugins/quill.min.js"></script>
<script src="assets/js/plugins/multistep-form.js"></script>

<script>
    if (document.getElementById('edit-deschiption')) {
      var quill = new Quill('#edit-deschiption', {
        theme: 'snow' // Specify theme in configuration
      });
    };

    if (document.getElementById('choices-service')) {
      var element = document.getElementById('choices-service');
      const example = new Choices(element, {
        searchEnabled: false
      });
    };

    if (document.getElementById('choices-Leverage')) {
      var element = document.getElementById('choices-Leverage');
      const example = new Choices(element, {
        searchEnabled: false
      });
    };

    if (document.getElementById('choices-package')) {
      var element = document.getElementById('choices-package');
      const example = new Choices(element, {
        searchEnabled: false
      });
    };

    if (document.getElementById('choices-currency')) {
      var element = document.getElementById('choices-currency');
      const example = new Choices(element, {
        searchEnabled: false
      });
    };

    if (document.getElementById('choices-broker')) {
      var element = document.getElementById('choices-broker');
      const example = new Choices(element, {
        searchEnabled: false
      });
    };


   
  </script>

  <script src="assets/js/plugins/dragula/dragula.min.js"></script>
<script src="assets/js/plugins/jkanban/jkanban.js"></script>
 
  <script src="assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>