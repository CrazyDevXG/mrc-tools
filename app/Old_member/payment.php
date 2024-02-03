<?php 
$titlePage = "My Payment";
$Mtab = "payment";

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
  My Payment - MRC
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
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-xl-6 mb-xl-0 mb-4">
              <div class="card bg-transparent shadow-xl">
                <div class="overflow-hidden position-relative border-radius-xl">                 
                  <span class="mask bg-gradient-dark opacity-10"></span>
                  <div class="card-body position-relative z-index-1 px-5">
                  <div class="d-flex">
                  <img src="assets/img/kbank.png" width="48px"> 
                  <h5 class="text-white mx-3">ธนาคารกสิกรไทย</h5>
                  </div>  
                  <div class="mx-5">                
                  <p class="text-white mt-4 text-sm opacity-8 mb-0">เลขบัญชี</p>
                    <h4 class="text-white pb-2">849&nbsp;&nbsp;212&nbsp;&nbsp;3995</h4>
                    <p id="BK1" hidden>8492123995</p>
                    </div>                      
                    <div class="mx-5">
                          <p class="text-white text-sm opacity-8 mb-0">ชื่อบัญชี</p>
                          <h5 class="text-white mb-0">Miracle Ai</h5>
                    </div>                        
                    <div class="ms-auto w-20 d-flex align-items-end justify-content-end">                              
                    <button class="btn btn-icon-only btn-rounded btn-outline-white mb-0 p-3 btn-sm d-flex align-items-center justify-content-center" onClick="copyTo('#BK1')"><i class="material-icons text-lg">copy</i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="row">
              <div class="col-md-6 col-6">
                  <div class="card">                  
                    <div class="card-body p-3 text-center">
                      <h6 class="text-center mb-0">Awaiting payment</h6>
                      <span class="text-xs">ยอดค้างชำระเงิน</span>                      
                      <hr class="horizontal dark my-3">
                      <h5 class="mb-0">0.00</h5><p> บาท</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-6">
                  <div class="card">                   
                    <div class="card-body p-3 text-center">
                    <h6 class="text-center mb-0">QR Payment</h6>
                      <span class="text-xs">สแกนชำระเงิน</span>
                      <hr class="horizontal dark my-3">
                      <img src="assets/img/line-qr.png" class="w-65 mt-2">
                    </div>
                  </div>
                </div>                
              </div>
            </div>
            <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-12 d-flex align-items-center">
                      <h6 class="mb-0">แจ้งการชำระเงิน</h6>
                    </div>                   
                  </div>
                </div>
                <div class="card-body p-3">
                <form action="uploadfile" method="post" enctype="multipart/form-data">
                  <div class="row">
                  <div class="col-md-4 mb-md-0 mb-4">
                      <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                      <img style='width: 220px;' src="" id="preview" name="preview">
                      </div>
                    </div>                    
                    <div class="col-md-4 mb-md-0 mb-4">
                      <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                      <input type="file" id="upload" name="upload" onchange="readURL(this);" accept="image/*"  required>
                      </div>
                    </div> 
                    <div class="col-md-4 mb-md-0 mb-4">
                      <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                      <input type="number" placeholder="ระบุยอดโอนเงิน">
                      </div>
                    </div>
                    <div class="col-12 pt-5 text-end">
                      <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="material-icons text-sm">send</i>&nbsp; ยืนยันการชำระ</a>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card h-100 mb-4">
            <div class="card-header pb-0 px-3">
              <div class="row">
                <div class="col-md-6">
                  <h6 class="mb-0">สถานะการชำระเงิน</h6>
                </div>
                <div class="col-md-6 d-flex justify-content-start justify-content-md-end align-items-center">
                  <i class="material-icons me-2 text-lg">date_range</i>
                  <small>อัพเดทล่าสุด</small>
                </div>
              </div>
            </div>
            <div class="card-body pt-4 p-3">
              <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Process</h6>
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <button class="btn btn-icon-only btn-rounded btn-outline-warning mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">alarm</i></button>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark text-sm">Pending</h6>
                      <span class="text-xs"><?php echo date("d/m/Y H:i"); ?></span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center text-dark text-sm font-weight-bold">
                    2,500 <small> บาท</small>
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">check</i></button>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark text-sm">Success</h6>
                      <span class="text-xs">30/09/2022 10:54</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center text-success  text-sm font-weight-bold">
                    2,000 <small> บาท</small>
                  </div>
                </li>
              </ul>    
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7 mt-4">
          <div class="card">
            <div class="card-header pb-0 px-3">
              <h6 class="mb-0">บันทึกการชำระเงิน</h6>
            </div>
            <div class="card-body pt-4 p-3">
              <ul class="list-group">
               
              
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-5 mt-4">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">ใบเสร็จการชำระเงิน</h6>
                </div>
                <div class="col-6 text-end">
                  
                </div>
              </div>
            </div>
            <div class="card-body p-3 pb-0">
              <ul class="list-group">
              
              
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <?php include"footer.php";?>    
    </div>
        
  </main>   

  <script type="text/javascript">                                           
        function readURL(input) {
            if (input.files && input.files[0]) {
               var reader = new FileReader();

                reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
          }
       reader.readAsDataURL(input.files[0]);
                 }
            }
        </script>

        <script>
            function copyTo(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            alert("Copy เลขบัญชีแล้ว");
            $temp.remove();
            }

        </script>

  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="assets/js/vendor.min.js"></script>

  <script src="assets/js/material-dashboard.min.js?v=3.0.4"></script>


</body>

</html>