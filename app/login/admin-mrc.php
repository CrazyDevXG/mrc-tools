<?php
        session_start();
      
            if(isset($_SESSION['AdminID'])){
                header("Location: ../admin/");

            }

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>MRC Manager</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/favicon.png" />
	<meta property="og:url" content="https://mrcmiracle.io/"/>
	<meta property="og:site_name" content="mrcmiracle.io"/>
	<meta property="og:image" content="https://app.mrcmiracle.io/login/images/mr-robot.jpg"/> 

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<meta name="robots" content="Login, MRC Ai EA Trade">

</head>

<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/adm-bg.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
				admin controller
				</span>

				<?php if(isset($_SESSION['Error_log'])){?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					  <strong>Username หรือ Password ไม่ถูกต้อง!</strong><br>กรุณาระบุใหม่อีกครั้ง
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
					<?php  unset($_SESSION['Error_log']);
				}?>

				<?php if(isset($_SESSION['Blocked_log'])){?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					  <strong>Username นี้ถูกระงับการใช้งาน!</strong><br>กรุณาติดต่อผู้ดูแลระบบ
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
					<?php  unset($_SESSION['Blocked_log']);
				}?>
				

				<form class="login100-form validate-form p-b-35 p-t-15" action="check-login" method="post">
					<center><img src="images/logo-black.png" class="my-3"></center>
					<div class="wrap-input100 validate-input" data-validate="กรุณาระบุ ชื่อผู้ใช้ ">
						<input class="input100" type="text" name="Adm_ID" placeholder='Username' required >
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="กรุณาระบุ รหัสผ่าน">
						<input class="input100" type="password" name="Adm_Pass"  placeholder='Password' required >
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>								
					
					<div class="container-login100-form-btn m-t-45">
						<button class="login100-form-adm" name="btn-login-admin">
						<i class="fa fa-desktop"></i> &nbsp; Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>


</body>

</html>