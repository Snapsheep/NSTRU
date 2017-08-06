<div class="page-sidebar navbar-collapse collapse">
                    
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-search-wrapper">
                                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                                <form class="sidebar-search  " action="" method="POST">
                                    <a href="javascript:;" class="remove">
                                        <i class="icon-close"></i>
                                    </a>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form>
                                <!-- END RESPONSIVE QUICK SEARCH FORM -->
                            </li><!-- end search -->
                            <!-- menu bar -->
                            <li class="heading">
                                <h3 class="uppercase">มหาวิทยาลัยราชภัฏนครศรีธรรมราช</h3>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-folder"></i>
                                    <span class="title">สภานักศึกษา</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="Student-Council.php" class="nav-link ">
                                            <i class="icon-docs"></i> ตรวจสอบโครงการ
                                            <span class="arrow"></span>
                                        </a>
                                    </li>
                                    <?php
                                        $status = $_SESSION['TYPESTATUS'];
                                        if($status == "สภานักศึกษา" || $status == "แอดมิน"){
                                    ?>
                                    <li class="nav-item  ">
                                        <a href="addproject-3.php" class="nav-link ">
                                            <i class="icon-docs"></i> เพิ่มโครงการ
                                            <span class="arrow"></span>
                                        </a>
                                    </li>
                                    <?php
                                        }
                                    ?>                      
                                </ul>
                            </li>    
                            <li class="nav-item  ">
                                <a href="?p=" class="nav-link nav-toggle">
                                    <i class="icon-folder"></i>
                                    <span class="title">องค์การบริหารนักศึกษา</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="Student-organization.php" class="nav-link ">
                                            <i class="icon-docs"></i> ตรวจสอบโครงการ
                                            <span class="arrow"></span>
                                        </a>
                                    </li>
                                    <?php
                                        $status = $_SESSION['TYPESTATUS'];
                                        if($status == "องค์การบริหารนักศึกษา" || $status == "แอดมิน"){
                                    ?>
                                    <li class="nav-item  ">
                                        <a href="addproject-3.php" class="nav-link ">
                                            <i class="icon-docs"></i> เพิ่มโครงการ
                                            <span class="arrow"></span>
                                        </a>
                                    </li>
                                    <?php
                                        }
                                    ?>  
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="?p=" class="nav-link nav-toggle">
                                    <i class="icon-folder"></i>
                                    <span class="title">พรรคฝ่ายค้าน</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="Opposition-party.php" class="nav-link ">
                                            <i class="icon-docs"></i> ตรวจสอบโครงการ
                                            <span class="arrow"></span>
                                        </a>
                                    </li>
                                    <?php
                                        $status = $_SESSION['TYPESTATUS'];
                                        if($status == "พรรคฝ่ายค้าน" || $status == "แอดมิน"){
                                    ?>
                                    <li class="nav-item  ">
                                        <a href="addproject-3.php" class="nav-link ">
                                            <i class="icon-docs"></i> เพิ่มโครงการ
                                            <span class="arrow"></span>
                                        </a>
                                    </li>
                                    <?php
                                        }
                                    ?>  
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="?p=" class="nav-link nav-toggle">
                                    <i class="icon-folder"></i>
                                    <span class="title">สโมสรนักศึกษา</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="Student-Faculty.php" class="nav-link ">
                                            <i class="icon-docs"></i> ตรวจสอบโครงการ
                                            <span class="arrow"></span>
                                        </a>
                                    </li>
                                    <?php
                                        $status = $_SESSION['TYPESTATUS'];
                                        if($status == "สโมสรนักศึกษา" || $status == "แอดมิน"){
                                    ?>
                                    <li class="nav-item  ">
                                        <a href="addproject-3.php" class="nav-link ">
                                            <i class="icon-docs"></i> เพิ่มโครงการ
                                            <span class="arrow"></span>
                                        </a>
                                    </li>
                                    <?php
                                        }
                                    ?>  
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="?p=" class="nav-link nav-toggle">
                                    <i class="icon-folder"></i>
                                    <span class="title">ชมรมนักศึกษา</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="Student-club.php" class="nav-link ">
                                            <i class="icon-docs"></i> ตรวจสอบโครงการ
                                            <span class="arrow"></span>
                                        </a>
                                    </li>
                                    <?php
                                        $status = $_SESSION['TYPESTATUS'];
                                        if($status == "ชมรมนักศึกษา" || $status == "แอดมิน"){
                                    ?>
                                    <li class="nav-item  ">
                                        <a href="addproject-3.php" class="nav-link ">
                                            <i class="icon-docs"></i> เพิ่มโครงการ
                                            <span class="arrow"></span>
                                        </a>
                                    </li>
                                    <?php
                                        }
                                    ?>  
                                </ul>
                            </li>
							<!-- menu admin -->
                            <?php
								$status = $_SESSION['STATUS'];
								if($status == "Admin"){
                                    ?>
									<li class="heading">
									   <h3 class='uppercase'>Admin</h3>
									</li>";
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                            <i class="icon-user"></i>
                                                <span class="title">User</span>
                                                <span class="arrow "></span>
                                        </a>
                                            <ul class="sub-menu">
                                                <li class="nav-item">
                                                    <a href="signup.php" class="nav-link">
                                                        <i class="icon-users"></i> Add User
                                                            <span class="arrow"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                            <i class="icon-notebook"></i>
                                                <span class="title">Project</span>
                                                <span class="arrow "></span>
                                        </a>
                                            <ul class="sub-menu">
                                                <li class="nav-item">
                                                    <a href="addproject-3.php" class="nav-link">
                                                        <i class="icon-docs"></i> Add Project
                                                            <span class="arrow"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                            <i class="icon-layers"></i>
                                                <span class="title">News feed</span>
                                                <span class="arrow "></span>
                                        </a>
                                            <ul class="sub-menu">
                                                <li class="nav-item">
                                                    <a href="add-feeds.php" class="nav-link">
                                                        <i class="icon-docs"></i> Add News feed
                                                            <span class="arrow"></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="newfeeds_detail_edit/new_feeds_edit.php" class="nav-link">
                                                        <i class="icon-docs"></i> Manage News feed
                                                            <span class="arrow"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                    </li>

								<?php
                                    }
                                ?>

                               
                            <!-- end menu admin -->	
						</ul>
						<!-- end menubar -->
					</div>