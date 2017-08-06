<?php
session_start();
ob_start();
if($_SESSION['STATUS'] != "Admin" && $_SESSION['STATUS'] != "User"){
    header('Location: login.php');
}
include('mysql_connect.php');
?>
<!doctype html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
<meta charset="utf-8" />
<title>รายละเอียดประกาศ</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
<link href="assets/pages/css/about.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="assets/pages/css/search.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
<link href="assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME LAYOUT STYLES -->
<link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
	<div class="page-wrapper">
		        
		<!-- include topbar -->
		<?php include('template-1.php'); ?>	
		<!-- include topbar -->
		
	</div><!-- h1 -->
	
	<!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                            
		<!-- include topbar -->
		<?php include('template-2.php'); ?>	
		<!-- include topbar -->			
					
	<!-- star body w -->
	<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    
    <!-- line bar -->
    
   	<!-- line bar -->

    
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="index.php">หน้าหลัก</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
            <span>รายละเอียดประกาศ</span>
        </li>
        </ul>           
    </div>

    <h1 class="page-title"> ประกาศใหม่จากระบบ
        <small>New announcement from the system</small>
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
           
    <!-- start newfeeds -- >
    <div>

    
	<div class="row">
    <div class="col-md-6 ">
                                <!-- BEGIN Portlet PORTLET-->
       	<div class="portlet box blue-hoki">
           	<div class="portlet-title">
               	<div class="caption">
                   	<i class="fa fa-gift"></i>News </div>
               	<div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="javascript:;" class="reload"> </a>
                    <a href="" class="fullscreen"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>
           	</div>
           	<div class="portlet-body">
               	<div class="scroller" style="height:200px" data-rail-visible="1" data-rail-color="yellow" data-handle-color="#a1b2bd">
               	<?php 

               		$id = $_GET['id'];
          			 		$sql = "SELECT * FROM newfeeds WHERE P_ID = '$id'";
          			 		$result = mysqli_query($link, $sql);
          			 		$data = mysqli_fetch_array($result);

                ?>
					<div>
						<label>วันที่ : 
						<?php echo $data['PDATE']; ?>
						</label>
					</div>
                   	<h4><strong><?php echo $data['PTOPIC']; ?></strong></h4>
                   	<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    
                   	<?php echo $data['PTEXT']; ?> 

                    <?php
                      if($data['PFILE'] != ""){
                    ?>

                    <a href="<?php echo$data['PFILE']; ?>">ดาวโหลดไฟล์</a>

                    <?php
                    } else {
                        echo "";
                    }
                    ?>
                        

                
       	</div>
                                <!-- END Portlet PORTLET-->
   	</div>
   	</div>
   	<div class="form-actions">
                                <div class="row">
                                    <div class="col-md-1">
                                        <a href="index.php">
                                            <button type="button" class="btn red">ย้อนกลับ</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
   
    <!-- end newfeeds -- >
    




    </div>
    <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    
    
    </div>
    <!-- content body -->
	</div>
	<!-- body w -->
	
	
</div>

<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->

</div><!-- container -->
					

						












<!-- BEGIN CORE PLUGINS -->
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/pages/scripts/components-bootstrap-select.min.js" type="text/javascript"></script>
<script src="assets/apps/scripts/calendar.min.js" type="text/javascript"></script>
<script src="assets/pages/scripts/search.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>
</html>