
        <nav class="navbar header-navbar mrc-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a href="index">
                            <img src="assets/images/logo.png" alt="Theme-Logo" width="128px" />
                        </a>
                        <a class="mobile-options">
                        <img src="assets/images/profile/admin-roles.png" class="img-radius" width="28px" alt="mini-Profile" />
                        </a>
                    </div>
                    <div class="navbar-container">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                  
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav-right">                          
                            
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="assets/images/profile/admin-roles.png" class="img-radius"alt="mini-Profile">
                                        <span><?php echo $fetcRow['admin_name'];?></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="my_profile">
                                                <i class="feather icon-user"></i>จัดการโปรไฟล์
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="feather icon-settings"></i> ตั้งค่าการใช้งาน
                                            </a>
                                        </li>                                        
                                       
                                        <li>
                                            <a href="logout">
                                                <i class="feather icon-log-out"></i> ออกจากระบบ
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>