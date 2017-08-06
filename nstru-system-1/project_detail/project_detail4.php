<?php
session_start();
ob_start();
if($_SESSION['STATUS'] != "Admin" && $_SESSION['STATUS'] != "User"){
    header('Location: login.php');
}
include('../mysql_connect.php');
include('../fuction.php');
?>
<!doctype html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
<meta charset="utf-8" />
<title>รายละเอียดโครงการ</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="../assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME LAYOUT STYLES -->
<link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
    <div class="page-wrapper">
        
        <!-- include topbar -->
        <?php include('../template_delete_edit/template_delete_edit_1.php'); ?> 
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
        <?php include('../template_delete_edit/template_delete_edit_2.php'); ?> 
        <!-- include topbar -->         
                    
    <!-- star body w -->
    <div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    
    <!-- line bar -->
    <div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="../index.php">หน้าหลัก</a>
                <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>รายละเอียดโครงการ</span>
        </li>
    </ul>
    </div>
    <!-- line bar -->
    <h1 class="page-title"> รายละเอียดโครงการและกิจกรรม
        <small>Project and Activity Details</small>
    </h1>
    <!-- start menu bg w -->
   
    <!-- end -->
    <div class="row">
    <div class="col-md-12 ">
                                <!-- BEGIN Portlet PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Detail </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="javascript:;" class="reload"> </a>
                    <a href="" class="fullscreen"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="scroller" style="height:300px" data-rail-visible="1" data-rail-color="yellow" data-handle-color="#a1b2bd">
                <?php
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM storage4 WHERE P_ID = '$id'";
                    $result = mysqli_query($link, $sql);
                    $data = mysqli_fetch_array($result);
                ?>
                    <div class="form-group">
                        <label>วันที่ : 
                        <?php echo $data['PDATE']; ?> - <?php echo $data['PDATE2']; ?>
                        </label>
                    </div> 
                    
                    <div class="form-group">
                        <h4>
                            <strong>
                                <label>โครงการและกิจกรรม<span>
                            </strong>
                        </h4>
                        <div>
                            - <?php echo $data['PNAME']; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <h4>
                            <strong>
                                <label>ภาคเรียนที่<span>
                            </strong>
                        </h4>
                        <div>
                            - <?php echo $data['PTERM']; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <h4>
                            <strong>
                                <label>ปีการศึกษา<span>
                            </strong>
                        </h4>
                        <div>
                            - <?php echo $data['PYEAR']; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <h4>
                            <strong>
                                <label>สถานที่ดำเนินการ<span>
                            </strong>
                        </h4>
                        <div>
                            - <?php echo $data['PPLACE']; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <h4>
                            <strong>
                                <label>หน่วยงานผู้รับผิดชอบโครงการ<span>
                            </strong>
                        </h4>
                        <div>
                            - <?php per($data['PPERSON']); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <h4>
                            <strong>
                                <label>จำนวนผู้เข้าร่วมโครงการ<span>
                            </strong>
                        </h4>
                        <div>
                            - <?php echo $data['PPARTICIPANT']; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <h4>
                            <strong>
                                <label>งบประมาณที่ได้รับ<span>
                            </strong>
                        </h4>
                        <div>
                            - <?php echo $data['PBUDGETS']; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <h4>
                            <strong>
                                <label>ได้งบประมาณจาก<span>
                            </strong>
                        </h4>
                        <div>
                            - <?php echo $data['PSOURCE']; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <h4>
                            <strong>
                                <label>รายจ่ายทั้งสิ้น<span>
                            </strong>
                        </h4>
                        <div>
                            - <?php echo $data['PSELLMONEY']; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <h4>
                            <strong>
                                <label>ยอดเงินคงเหลือ<span>
                            </strong>
                        </h4>
                        <div>
                            - <?php echo $data['PMONEYBALANCE']; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <h4>
                            <strong>
                                <label>ชื่อ<span>
                            </strong>
                        </h4>
                        <div>
                            - <?php echo $data['PFIRSTNAME']; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <h4>
                            <strong>
                                <label>นามสกุล<span>
                            </strong>
                        </h4>
                        <div>
                            - <?php echo $data['PLASTNAME']; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <h4>
                            <strong>
                                <label>เบอร์โทรศัพท์<span>
                            </strong>
                        </h4>
                        <div>
                            - <?php echo $data['PTELL']; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <h4>
                            <strong>
                                <label>อีเมล<span>
                            </strong>
                        </h4>
                        <div>
                            - <?php echo $data['PEMAIL']; ?>
                        </div>
                    </div>



                    

                
        </div>
                                <!-- END Portlet PORTLET-->
    </div>
    </div>
    <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-1">
                                        <a href="../Student-Faculty.php">
                                            <button type="button" class="btn red">ย้อนกลับ</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
   
    <!-- end newfeeds -- >
    




    </div>
    <!-- END CONTENT BODY -->
    </div>




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
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
<script src="../assets/pages/scripts/components-bootstrap-select.min.js" type="text/javascript"></script>
<script src="../assets/pages/scripts/form-wizard.min.js" type="text/javascript"></script>
<script src="../assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="../assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>
</html>