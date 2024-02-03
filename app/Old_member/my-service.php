<?php 
$titlePage = "My Service";
$Mtab = "my-service";

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
<div class="row">
<div class="col-12">
<div class="card">

<div class="card-header pb-0">
<div class="d-lg-flex">
<div>
<h5 class="mb-0">All Services</h5>
<p class="text-sm mb-0">
บริการของฉันทั้งหมด
</p>
</div>
<div class="ms-auto my-auto mt-lg-0 mt-4">
<div class="ms-auto my-auto">
<a href="add-account" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; สั่งซื้อบริการ</a>

</div>
</div>
</div>
</div>
<div class="card-body px-0 pb-0">
<div class="table-responsive">
<table class="table table-flush" id="products-list">
<thead class="thead-light">
<tr>
<th>บริการ</th>
<th>บัญชีเทรด</th>
<th>แพ็คเกจ</th>
<th>วันที่เริ่มใช้งาน</th>
<th>วันที่หมดอายุ</th>
<th>สถานะใช้งาน</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<tr>
<td>
<div class="d-flex">
<div class="form-check my-auto">
<input class="form-check-input" type="checkbox" id="customCheck2">
</div>
<img class="w-10 ms-3" src="assets/img/EA-product1.jpg" alt="EA">
<h6 class="ms-3 my-auto">MRCk 1</h6>
</div>
</td>
<td class="text-sm">22002168</td>
<td class="text-sm">8,900 / 12เดือน</td>
<td class="text-sm">10/09/2022</td>
<td class="text-sm">10/09/2023</td>
<td>
<span class="badge badge-success badge-sm">เปิดใช้งาน</span>
</td>
<td class="text-sm">
<a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
<i class="material-icons text-secondary position-relative text-lg">visibility</i>
</a>
<a href="javascript:;" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
<i class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
</a>
<a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
<i class="material-icons text-secondary position-relative text-lg">delete</i>
</a>
</td>
</tr>

</tbody>
</table>
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
  <script src="assets/js/plugins/datatables.js"></script>
  <script>
    if (document.getElementById('products-list')) {
      const dataTableSearch = new simpleDatatables.DataTable("#products-list", {
        searchable: true,
        fixedHeight: false,
        perPage: 7
      });

      document.querySelectorAll(".export").forEach(function(el) {
        el.addEventListener("click", function(e) {
          var type = el.dataset.type;

          var data = {
            type: type,
            filename: "material-" + type,
          };

          if (type === "csv") {
            data.columnDelimiter = "|";
          }

          dataTableSearch.export(data);
        });
      });
    };
  </script>

  <script src="assets/js/plugins/dragula/dragula.min.js"></script>
<script src="assets/js/plugins/jkanban/jkanban.js"></script>
 
  <script src="assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>