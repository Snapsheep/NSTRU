<!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="index.php">
                            <img src="assets/layouts/layout/img/logo1.png" width="147" height="28" alt="logo" class="logo-default" /> </a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <!-- start header profile -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                        <!-- start profile -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle"
                        data-toggle="dropdown" data-hover="dropdown"
                        data-close-others="true">
                        <?php
                            $sql = "SELECT * FROM username WHERE ID_USER = '$_SESSION[ID]'";
                            $result = mysqli_query($link, $sql);
                            $data = mysqli_fetch_array($result);
                        ?>
                            <img alt="" class="img-circle" src="<?php echo $data['IMAGE']; ?>">
                        <span class="username username-hide-on-mobile"> <?php echo $data['USERNAME']; ?> </span>
                        <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="">
                                <i class="icon-user"></i> My Profile </a>
                            </li>
                            <li>
                                <a href="logout.php">
                                <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end profile -->
                        </ul>
                    </div>
                    <!-- end header profile -->





				</div><!-- h1 -->
			</div><!-- h1 -->