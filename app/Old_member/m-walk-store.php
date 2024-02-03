<?php 
$titlePage = "MRC Store";
$Mtab = "MRC-store";

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
  MRC Store
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


<div class="container-fluid py-4">
<div class="page-header min-height-250 border-radius-xl mt-4" style="background-image: url('assets/img/banner-tech.jpg');">
<span class="mask bg-gradient-dark opacity-6"></span>
</div>
  <div class="row mt-6">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-8">
          <div class="card">
    <div class="card" data-animation="true">
  <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
    <a class="d-block blur-shadow-image">
      <img src="assets/img/EA-product1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
    </a>
    <div class="colored-shadow" style="background-image: url(assets/img/EA-product1.jpg);"></div>
  </div>
  <div class="card-body">
    <div class="d-flex mt-n6 mx-auto">
      <a href="https://mrcmiracle.io/mrc-store" class="btn btn-link ms-auto text-dark border-0" target="_blank" >
        <i class="material-icons text-info text-lg">preview</i>
         ดูข้อมูลเพิ่มเติม
      </a>     
    </div>
    <h5 class="font-weight-normal text-center mt-3">
      <a href="javascript:;">MRC AI</a>
    </h5>
    <hr class="horizontal dark my-3">
    <p class="mb-2 text-sm">
    1. สามารถทำกำไรได้ตลอด 24 ชม. โดยที่คุณไม่ต้องเฝ้าหน้าจอ
    </p>
    <p class="mb-2 text-sm">
    2. EA (Expert Advisors) จะทำหน้าที่เทรดให้เราโดยอัตโนมัติตามระบบที่วางไว้
    </p>
    <p class="mb-2 text-sm">
    3. EA มีระบบคุม Max Lot , Max Order และ MM คุมความเสียงที่กำหนดได้
    </p>
    <p class="mb-2 text-sm">
    4. EA สายปลอดภัย Drawdown (DD) ไม่เกิน 30%
    </p>
  </div>
  <hr class="dark horizontal my-0">
  <div class="card-footer">
  <div class="col-12 d-flex">
    <p class="font-weight-normal my-auto">8,900 / 12เดือน</p>    
    <i class="material-icons ms-auto text-lg me-1 my-auto">task_alt</i>
    <p class="text-sm my-auto"> (จำกัด IB)</p>
    </div>
    <div class="col-12 d-flex">
    <p class="font-weight-normal ">15,900 / 12เดือน</p>    
    <i class="material-icons ms-auto text-lg me-1 my-auto">block</i>
    <p class="text-sm my-auto"> (ไม่จำกัด IB)</p>
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
  

  <script src="assets/js/plugins/dragula/dragula.min.js"></script>
<script src="assets/js/plugins/jkanban/jkanban.js"></script>
 
  <script src="assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>