<?php 
    session_start(); 
        include_once 'class_iquery.php';
        $user = new MyUser;

        if($user->is_loggedin() != "") {
          $user->redirect('dashboard');
          
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
   Sign in | My App Miracle
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
  <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
               
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('assets/img/bg-member-login.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-info border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">My App</h4>
                  <div class="row mt-3">
                    <div class="text-center">
                           <p class="text-white">เข้าสู่ระบบสมาชิก</p>
                    </div>     
                  </div>
                </div>
              </div>
              <div class="card-body">

              <?php if(isset($_SESSION['Error_log'])){?>
              <div class="alert alert-secondary alert-dismissible text-white" role="alert">
                <span class="text-sm">Username หรือ Password ไม่ถูกต้อง!<br>กรุณาระบุใหม่อีกครั้ง</span>
                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php  unset($_SESSION['Error_log']);
				      }?>

              <?php if(isset($_SESSION['Blocked_log'])){?>
              <div class="alert alert-danger alert-dismissible text-white" role="alert">
                <span class="text-sm">Username นี้ถูกระงับการใช้งาน!<br>กรุณาติดต่อผู้ดูแลระบบ</span>
                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php  unset($_SESSION['Blocked_log']);
				      }?>                         			
        
                <form action="check-login.php" method="POST" role="form" class="text-start">
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="userLOG" <?php if(isset($_COOKIE['User_log'])){echo "value='".$_COOKIE['User_log']."'";} ?> required>
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control"  name="passLOG" <?php if(isset($_COOKIE['Upass_log'])){echo "value='".$_COOKIE['Upass_log']."'";} ?> required>
                  </div>
                  <div class="form-check form-switch d-flex align-items-center mb-3">
                    <input class="form-check-input" type="checkbox" id="remember_user"  name="remember_user" <?php if(isset($_COOKIE['URemember'])){echo $_COOKIE['URemember'];}else{echo "";}?>>
                    <label class="form-check-label mb-0 ms-3" for="rememberMe">จดจำรหัสฉัน</label>
                  </div>
                  <div class="text-center">
                    <button type="submit" name="btn-login" class="btn bg-gradient-secondary w-100 my-4 mb-2">เข้าสู่ระบบ</button>
                  </div>
                  <p class="mt-4 text-sm text-center">
                  ฉันจำรหัสผ่านไม่ได้? |
                    <a href="reset-password" class="text-danger text-gradient font-weight-bold">รีเซ็ตรหัส</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-md-6 my-auto">
              <div class="copyright text-center text-sm text-white text-lg-start">
              My MRC ©<script>
                  document.write(new Date().getFullYear())
                </script>,
                   All Right Reserved
              </div>
            </div>
            <div class="col-12 col-md-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">  
                <li class="nav-item">
                  <a href="https://mrcmiracle.io/terms-of-service" class="nav-link text-white" target="_blank">เงื่อนไขข้อตกลง</a>
                </li>              
                <li class="nav-item">
                  <a href="#" class="nav-link pe-0 text-white" target="_blank">ติดต่อเรา</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>

  
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>