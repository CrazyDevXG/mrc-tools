<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="index">
        <img src="assets/img/favicon.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Miracle AI</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white <?php if($Mtab == "dashboard"){echo "active";}?> " href="dashboard">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if($Mtab == "profile"){echo "active";}?> " href="profile">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">My Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if($Mtab == "my-mt4"){echo "active";}?> " href="my-mt4">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">pie_chart</i>
            </div>
            <span class="nav-link-text ms-1">MT4 Accounts</span>
          </a>
        </li>  
        <li class="nav-item">
          <a class="nav-link text-white <?php if($Mtab == "my-service"){echo "active";}?> " href="my-service">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">display_settings</i>
            </div>
            <span class="nav-link-text ms-1">บริการของฉัน</span>
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link text-white <?php if($Mtab == "m-walk-store"){echo "active";}?> " href="m-walk-store">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">store</i>
            </div>
            <span class="nav-link-text ms-1">MRC Store</span>
          </a>
        </li>   
        <li class="nav-item">
          <a class="nav-link text-white <?php if($Mtab == "payment"){echo "active";}?> " href="payment">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">currency_exchange</i>
            </div>
            <span class="nav-link-text ms-1">การชำระเงิน</span>
          </a>
        </li>             
          
        <li class="nav-item">
          <a class="nav-link text-white <?php if($Mtab == "affiliate"){echo "active";}?> " href="affiliate">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">groups</i>
            </div>
            <span class="nav-link-text ms-1">Affiliate Program</span>
          </a>
        </li>  
        <hr class="horizontal light mt-5 mb-2">    
        <li class="nav-item">
          <a class="nav-link text-white " href="logout">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">logout</i>
            </div>
            <span class="nav-link-text ms-1">ออกจากระบบ</span>
          </a>
        </li>       
      </ul>
    </div>
    
  </aside>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page"></li>
          </ol>
          <h6 class="font-weight-bolder mb-0"><?php echo $titlePage;?></h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
             
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="profile" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i> 
                <span class="d-sm-inline"><?php echo $_SESSION["MyName"];?></span>
              </a>
            </li>            
            <li class="nav-item px-3 d-flex align-items-center">            
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                             
                
              </ul>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->


