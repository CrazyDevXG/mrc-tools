<?php include"session.php";
$titlePage = "My Dashboard";
$Mtab = "dashboard";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    My MRC - Dashboard
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
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">display_settings</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">MRC Trading</p>
                <h4 class="mb-0">0</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span>All Services</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">pie_chart</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">MT4 Portfolio</p>
                <h4 class="mb-0">0</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span>All Accounts</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">group</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Membership</p>
                <h4 class="mb-0">0</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-danger text-sm font-weight-bolder"></span>All Persons</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">paid</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Commission</p>
                <h4 class="mb-0">$0</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span>All Income</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-4 mt-4">
        <div class="col-md-8 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>ระยะเวลาเช่าระบบ MRC</h6>                 
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">ทั้งหมด</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">เปิดใช้งานอยู่</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">หมดอายุแล้ว</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Account</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">บริการ</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">วันที่เริ่มใช้งาน</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">วันที่หมดอายุ</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">สถานะ</th>                                            
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                       <span class="px-3 font-weight-bold"> 22002168</span>                       
                      </td>                      
                      <td>
                       <span class="px-3 text-sm font-weight-bold"> MRC 1</span>                       
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="font-weight-bold">10/09/2022</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="font-weight-bold">31/12/2022</span>
                      </td>
                      <td class="align-middle text-center text-success text-sm">
                      <span class="text-xs font-weight-bold">เปิดใช้งาน</span>
                      </td>                                           
                    </tr>   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>บัญชีเทรดของฉัน</h6>
                 
                </div>               
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>                      
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Account</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Balance</th>                                          
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="assets/img/broker/exc.png" class="avatar avatar-sm me-3" alt="xm">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Exclusive Markets</h6>
                            <p class="text-sm">22002168</p>
                          </div>
                        </div>
                      </td>                     
                      <td class="align-middle text-center text-sm">
                      <span class="text-xs font-weight-bold">$1,000</span>
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
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <script src="assets/js/plugins/data-chart.js"></script>
  
  <script src="assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>