<?php 

      require_once "session.php";
      include_once "class_iquery.php";

          $titlePage = "MT4 Accounts";
          $Mtab = "my-mt4";

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
  Portfolio - MRC
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
<div class="page-header min-height-250 border-radius-xl mt-4" style="background-image: url('assets/img/banner-tech.jpg');">
<span class="mask bg-gradient-dark opacity-6"></span>
</div>
<div class="card card-body mx-3 mx-md-4 mt-n6">
<div class="row gx-4">
<div class="col-auto">
<div class="avatar avatar-xl position-relative">
<img src="assets/img/user-profile.png" alt="profile_image" class="w-100 rounded-circle shadow-sm">
</div>
</div>
<div class="col-5 my-auto">
<div class="h-100">
<h5 class="mb-1">
<?php echo $Mname;?>
</h5>
<p class="mb-0 font-weight-normal text-sm">
ตำแหน่ง | <?php echo $Mrank;?>
</p>
</div>
</div>
<div class="col-3 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
<div class="nav-wrapper position-relative end-0">
<ul class="nav nav-pills nav-fill p-1" role="tablist">
<li class="nav-item">
<a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
<i class="material-icons text-lg position-relative">contacts</i>
<span class="ms-1">MT4</span>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>

<div class="container-fluid py-4">
<section class="py-3">
<div class="row mb-4 mb-md-0">
<div class="col-md-8 me-auto my-auto text-left">
<h5>บัญชีเทรด Forex ของฉันทั้งหมด</h5>
</div>
<div class="col-lg-4 col-md-12 my-auto text-end">
<a href="add-account"> 
<button class="btn bg-gradient-primary mb-0 mt-0 mt-md-n9 mt-lg-0">
<i class="material-icons text-white position-relative text-md pe-2">add</i>เพิ่มบัญชีเทรด
</button>
</a>
</div>
</div>
<div class="row mt-lg-4 mt-2">

<div class="col-lg-4 col-md-6 mb-4">
<div class="card">
<div class="card-body p-3">
<div class="d-flex mt-n2">
<div class="avatar avatar-xl bg-gradient-dark border-radius-xl p-2 mt-n4">
<img src="assets/img/broker/exc.png" alt="slack_logo">
</div>
<div class="ms-3 my-auto">
<h6 class="mb-0">Exclusive Markets</h6>
<div class="avatar-group">
<p>Server - Exclusive-Real</p>
 </div>
</div>
<div class="ms-auto">
<div class="dropdown">
<button class="btn btn-link text-secondary ps-0 pe-2" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fa fa-ellipsis-v text-lg"></i>
</button>
<div class="dropdown-menu dropdown-menu-end me-sm-n4 me-n3" aria-labelledby="navbarDropdownMenuLink">
<a class="dropdown-item" href="javascript:;">เปิดใช้งาน EA</a>
<a class="dropdown-item" href="javascript:;">แก้ไขบัญชี</a>
<a class="dropdown-item" href="javascript:;">ลบบัญชี</a>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-6 ">
<p class="font-weight-normal mt-3 ">บัญชีเทรด = 22002168</p>
<p class="font-weight-normal mt-3 ">Leverage = 1:500 </p>
<p class="font-weight-normal mt-3 ">ยอดเงินฝาก = $1,000</p>
</div>
<div class="col-6">
<p class="font-weight-normal mt-3 ">Server = Live-ex01</p>
<p class="font-weight-normal mt-3 ">ประเภทบัญชี = USD</p>
</div>
<hr class="horizontal dark">
<div class="row">
<div class="col-6">
<h6 class="text-sm mb-0">MT4</h6>
<p class="text-secondary text-sm font-weight-normal mb-0">Account</p>
</div>
<div class="col-6 text-end">
<h6 class="text-sm mb-0">02/10/2022</h6>
<p class="text-secondary text-sm font-weight-normal mb-0">Updated</p>
</div>
</div>
</div>
</div>
</div>





</div>
</section>
<?php include"footer.php";?>  
</div>
</div>


      
     
  </main>




  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="assets/js/plugins/choices.min.js"></script>
  

  <script src="assets/js/plugins/dragula/dragula.min.js"></script>
<script src="assets/js/plugins/jkanban/jkanban.js"></script>
 
  <script src="assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>