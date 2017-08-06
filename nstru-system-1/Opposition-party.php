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
<title>Opposition-party</title>
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
<link href="assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
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
    <div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="index.php">หน้าหลัก</a>
                <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>โครงการพรรคฝ่ายค้าน</span>
        </li>
    </ul>
    </div>
    <!-- line bar -->
    <h1 class="page-title"> โครงการและกิจกรรมพรรคฝ่ายค้าน
        <small>(ตรวจสอบ)</small>
    </h1>
    <div class="m-heading-1 border-green m-bordered">
        <h3>คำแนะนำในการใช้งานระบบตรวจสอบ</h3>
        <p> อย่างไรก็ตามแนะนำให้ใช้ Browser IE ตั้งแต่เวอร์ชั่น 9 หรือ Browser ที่สูงกว่าขึ้นไป เนื่องจากเวอร์ชั่นต่ำกว่า 9 อาจจะยังไม่สนับสนุนระบบ NSTRU Activity System, แต่หากจำเป็นต้องใช้เวอร์ชั่น 9 หรือต่ำกว่าอาจต้องปรับแต่งส่วน Compatibility View ซึ่งการตั้งค่า Compatibility นั้น จะช่วยให้การแสดงผลบนหน้าจอของผู้ที่ใช้งาน Browser IE เวอร์ชั่น 9 หรือต่ำกว่า แสดงผลได้ตามปกติ. </p>
        <p> สามารถดาวน์โหลดคู่มือการใช้งานได้ตรงนี้
            <a class="btn red btn-outline" href="download_tutorial/tutorial.pdf" target="_blank">Download</a>
        </p>
    </div>
    <!-- start menu bg w -->
 <div class="row">
<div class="col-md-12">
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption font-dark">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject bold uppercase"> ตารางตรวจสอบโครงการและกิจกรรม</span>
            </div>
        </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <a href="addproject-3.php">
                        <button id="sample_editable_1_new" class="btn sbold green"> เพิ่มโครงการ
                            <i class="fa fa-plus"></i>
                        </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
    <thead>
        <tr>
            <td align="center"> ลำดับที่</td>
            <td align="center"> ชื่อโครงการ / กิจกรรม </td>
            <td align="center"> ผู้รับผิดชอบโครงการ </td>
            <td align="center"> ด/ว/ป </td>
            <td align="center"> รายละเอียด </td>
            <td align="center"> จัดการข้อมูล </td>
            <td align="center"> สถานะ </td>

            <?php
            $status = $_SESSION['STATUS'];
            if($status == "Admin"){
            ?>
            <td align="center"> จัดการสถานะ </td>
            <?php
                }
            ?>

        </tr>
    </thead>
<tbody>
        <?php
            include_once('fuction.php');
            $i = 1;

            $sql = "SELECT * FROM storage3";
            $result = mysqli_query($link, $sql);
            while($data = mysqli_fetch_assoc($result)){
        ?>
        <tr class="odd gradeX">
            <td> <?php echo $i++; ?> </td>
            <td> <?php echo $data['PNAME']; ?> </td>
            <td align="center"> <?php per($data['PPERSON']); ?> </td>
            <td align="center"> <?php echo $data['PDATE']; ?><br><?php echo $data['PDATE2']; ?> </td>
            <td align="center">
                <a href="project_detail/project_detail3.php?id=<?php echo $data['P_ID']; ?>"> เพิ่มเติม </a>
            </td>
            <td align="center">
                <?php
                    if($data['PSTATUS'] != 1 && ($_SESSION['TYPESTATUS'] == "แอดมิน" || $_SESSION['TYPESTATUS'] == "พรรคฝ่ายค้าน")){
                ?>
                <a href="edit/editproject3.php?id=<?php echo $data['P_ID']; ?>"> แก้ไข </a> | 
                <a href="delete/deleteproject3.php?id=<?php echo $data['P_ID']; ?>"> ลบ </a>
                <?php
                    } else {
                        echo "แก้ไข" . " | " . "ลบ";
                    }
                ?>
            </td>
            <td align="center"> <?php status($data['PSTATUS']); ?> </td>

            <?php
            $status = $_SESSION['STATUS'];
            if($status == "Admin"){
            ?>
            <td>
            <center>
            <div class="form-group"> 
            <div class="btn-group">

                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> เลือก
                    <i class="fa fa-angle-down"></i>
                </button>
                
                <ul class="dropdown-menu pull-left" role="menu">
                    <form metod="post">
                    <li>
                        <a href="Opposition-party.php?id=<?php echo $data['P_ID']; ?>&am=1"> ผ่าน </a>
                    </li>
                    <li>
                        <a href="Opposition-party.php?id=<?php echo $data['P_ID']; ?>&am=2"> ไม่ผ่าน </a>
                    </li>
                    
                    
                    </form>
                    <?php
                    if(empty($_GET['id'])){
                        $id = 0;
                    } else {
                        $id = $_GET['id'];
                    }

                    if(empty($_GET['am'])){
                        $am = 0;
                    } else {
                        $am = $_GET['am'];
                    }

                    if($am == 1){
                        $sql = "UPDATE storage3 SET PSTATUS = '1' WHERE P_ID = '" . $id . "'";
                        $result = mysqli_query($link, $sql);
                        header("Location: Opposition-party.php");
                    } else if ($am == 2){
                        $sql = "UPDATE storage3 SET PSTATUS = '2' WHERE P_ID = '" . $id . "'";
                        $result = mysqli_query($link, $sql);
                        header("Location: Opposition-party.php");
                    }
                    ?>
                </ul>
            </div></div> 
            </center>
            </td>
            <?php
                }
            ?>

        </tr>
        <?php
            }
        ?>
</tbody>
</table>
</div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->
</div>
</div>


    <!-- start table -->

    <!-- end -->





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
<script src="assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
<script src="assets/pages/scripts/components-bootstrap-select.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>
</html>