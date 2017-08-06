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
<title>แก้ไขข้อมูล</title>
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
          	<span>แก้ไขข้อมูล</span>
      	</li>
	</ul>
	</div>
   	<!-- line bar -->
    <h1 class="page-title"> แบบรายงานผลการปฎิบัติงานโครงการ
        <small>(แก้ไขโครงการ)</small>
    </h1>
    <div class="m-heading-1 border-green m-bordered">
        <h3>คำแนะนำในการใช้งานระบบตรวจสอบ</h3>
        <p> อย่างไรก็ตามแนะนำให้ใช้ Browser IE ตั้งแต่เวอร์ชั่น 9 หรือ Browser ที่สูงกว่าขึ้นไป เนื่องจากเวอร์ชั่นต่ำกว่า 9 อาจจะยังไม่สนับสนุนระบบ NSTRU Activity System, แต่หากจำเป็นต้องใช้เวอร์ชั่น 9 หรือต่ำกว่าอาจต้องปรับแต่งส่วน Compatibility View ซึ่งการตั้งค่า Compatibility นั้น จะช่วยให้การแสดงผลบนหน้าจอของผู้ที่ใช้งาน Browser IE เวอร์ชั่น 9 หรือต่ำกว่า แสดงผลได้ตามปกติ. </p>
        <p> สามารถดาวน์โหลดคู่มือการใช้งานได้ตรงนี้
            <a class="btn red btn-outline" href="../download_tutorial/tutorial.pdf" target="_blank">Download</a>
        </p>
    </div>
    <!-- start menu bg w -->
 	<?php
 		$id = $_GET['id'];
 		$sql = "SELECT * FROM storage4 WHERE P_ID = '$id'";
 		$result = mysqli_query($link, $sql);
 		$data = mysqli_fetch_array($result);
 	?>
    <div class="portlet light bordered" id="form_wizard_1">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class=" icon-layers font-red"></i>
                                            <span class="caption-subject font-red bold uppercase"> ฟอร์มเพิ่มข้อมูล -
                                                <span class="step-title"> ขั้นที่ 1 จาก 4 </span>
                                            </span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <form class="form-horizontal" enctype="multipart/form-data" id="submit_form" method="POST">
                                            <div class="form-wizard">
                                                <div class="form-body">
                                                    <ul class="nav nav-pills nav-justified steps">
                                                        <li>
                                                            <a href="#tab1" data-toggle="tab" class="step">
                                                                <span class="number"> 1 </span>
                                                                <span class="desc">
                                                                    <i class="fa fa-check"></i> ข้อมูลทั่วไปโครงการ </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab2" data-toggle="tab" class="step">
                                                                <span class="number"> 2 </span>
                                                                <span class="desc">
                                                                    <i class="fa fa-check"></i> รายงานการใช้จ่ายเงิน </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab3" data-toggle="tab" class="step active">
                                                                <span class="number"> 3 </span>
                                                                <span class="desc">
                                                                    <i class="fa fa-check"></i> ประเมินผลปฎิบัติงาน </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab4" data-toggle="tab" class="step">
                                                                <span class="number"> 4 </span>
                                                                <span class="desc">
                                                                    <i class="fa fa-check"></i> ยืนยัน </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div id="bar" class="progress progress-striped" role="progressbar">
                                                        <div class="progress-bar progress-bar-success"> </div>
                                                    </div>
                                                    <div class="tab-content">
                                                        <div class="alert alert-danger display-none">
                                                            <button class="close" data-dismiss="alert"></button> กรอกแบบฟอร์มให้ครบถ้วน ลองใหม่อีกครั้ง </div>
                                                        <div class="alert alert-success display-none">
                                                            <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                                        <div class="tab-pane active" id="tab1">
                                                            <h3 class="block">รายละเอียดข้อมูลทั่วไป</h3>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">ระบุชื่อกิจกรรมและโครงการนักศึกษารรม/โครงการ
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="PNAME" value="<?php echo $data['PNAME']; ?>" />
                                                                    <span class="help-block"> ระบุชื่อกิจกรรมและโครงการนักศึกษา </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">ดำเนินการระหว่างวันที่
                                                                <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="dd/mm/yyyy">
                                                                    <input type="text" class="form-control" name="PDATE" value="<?php echo $data['PDATE']; ?>">
                                                                    <span class="input-group-addon"> ถึง </span>
                                                                    <input type="text" class="form-control" name="PDATE2" value="<?php echo $data['PDATE2']; ?>"> 
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">ภาคเรียนที่
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <select class="form-control" name="PTERM">
                                                                        <option value=""></option>
                                                                        <option value="1" <?php if($data['PTERM'] == 1){ echo "selected"; } ?>>1</option>
                                                                        <option value="2" <?php if($data['PTERM'] == 2){ echo "selected"; } ?>>2</option>
                                                                        <option value="3" <?php if($data['PTERM'] == 3){ echo "selected"; } ?>>3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">ปีการศึกษา
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="PYEAR" value="<?php echo $data['PYEAR']; ?>">
                                                                    <span class="help-block"> ระบุปีการศึกษา </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">สถานที่ดำเนินการ
                                                                <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <textarea class="form-control" rows="3" name="PPLACE"><?php echo $data['PPLACE']; ?></textarea>
                                                                    <span class="help-block"> สถานที่ดำเนินการ </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">หน่วยงานผู้รับผิดชอบกิจกรรม/โครงการ
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <?php
                                                                    $b = 1;
                                                                ?>
                                                                <div class="col-md-4">
                                                                    <select class="form-control input-medium" name="PPERSON">
                                                                        <option value=""></option>
                                                                        <?php
                                                                            $status = $_SESSION['TYPESTATUS'];
                                                                            if($status == "สภานักศึกษา" || $status == "แอดมิน"){
                                                                        ?>
                                                                        <option value="1" <?php if($data['PPERSON'] == 1){ echo "selected"; } ?>><?php per(1); ?></option>
                                                                        <?php
                                                                            }
                                                                        ?>
                                                                        <?php
                                                                            $status = $_SESSION['TYPESTATUS'];
                                                                            if($status == "องค์การบริหารนักศึกษา" || $status == "แอดมิน"){
                                                                        ?>
                                                                        <option value="2" <?php if($data['PPERSON'] == 2){ echo "selected"; } ?>><?php per(2); ?></option>
                                                                        <?php
                                                                            }
                                                                        ?>
                                                                        <?php
                                                                            $status = $_SESSION['TYPESTATUS'];
                                                                            if($status == "พรรคฝ่ายค้าน" || $status == "แอดมิน"){
                                                                        ?>
                                                                        <option value="3" <?php if($data['PPERSON'] == 3){ echo "selected"; } ?>><?php per(3); ?></option>
                                                                        <?php
                                                                            }
                                                                        ?>
                                                                        <?php
                                                                            $status = $_SESSION['TYPESTATUS'];
                                                                            if($status == "สโมสรนักศึกษา" || $status == "แอดมิน"){
                                                                        ?>
                                                                        <option value="4" <?php if($data['PPERSON'] == 4){ echo "selected"; } ?>><?php per(4); ?></option>
                                                                        <?php
                                                                            }
                                                                        ?>
                                                                        <?php
                                                                            $status = $_SESSION['TYPESTATUS'];
                                                                            if($status == "ชมรมนักศึกษา" || $status == "แอดมิน"){
                                                                        ?>
                                                                        <option value="5" <?php if($data['PPERSON'] == 5){ echo "selected"; } ?>><?php per(5); ?></option>
                                                                        <?php
                                                                            }
                                                                        ?>
                                                                    </select>
                                                                    <span class="help-block"> ระบุหน่วยงานผู้รับผิดชอบกิจกรรมและโครงการ </span>
                                                                </div>
                                                            </div>
                                                            <?php
                                                                $status = $_SESSION['TYPESTATUS'];
                                                                if($status == "สโมสรนักศึกษา" || $status == "แอดมิน"){
                                                            ?>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">สโมสรนักศึกษาคณะ
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="PFACULTY" value="<?php echo $data['PFACULTY']; ?>">
                                                                    <span class="help-block"> ระบุคณะ </span>
                                                                </div>
                                                            </div>
                                                            <?php
                                                                }
                                                            ?>
                                                            <?php
                                                                $status = $_SESSION['TYPESTATUS'];
                                                                if($status == "ชมรมนักศึกษา" || $status == "แอดมิน"){
                                                            ?>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">ชื่อชมรม
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="PCLUBNAME" value="<?php echo $data['PCLUBNAME']; ?>">
                                                                    <span class="help-block"> ระบุชื่อชมรม </span>
                                                                </div>
                                                            </div>
                                                            <?php
                                                                }
                                                            ?>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">จำนวนผู้เข้าร่วมโครงการ
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="PPARTICIPANT" value="<?php echo $data['PPARTICIPANT']; ?>">
                                                                    <span class="help-block"> ระบุจำนวนผู้เข้าร่วมโครงการ (ที่อยู่ในพื้นที่ปฎิบัติงานจริง) 
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="tab2">
                                                            <h3 class="block">รายละเอียดการใช้จ่ายเงิน</h3>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">งบประมาณที่ได้รับจำนวน
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="PBUDGETS" value="<?php echo $data['PBUDGETS']; ?>">
                                                                    <span class="help-block"> ระบุจำนวนงบประมาณที่ได้รับ </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">ได้จาก
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="PSOURCE" value="<?php echo $data['PSOURCE']; ?>">
                                                                    <span class="help-block"> ระบุที่มาของงบประมาณที่ได้รับ </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">รวมรายจ่ายในการดำเนินโครงการทั้งสิ้น
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="PSELLMONEY" value="<?php echo $data['PSELLMONEY']; ?>">
                                                                    <span class="help-block"> ระบุจำนวนเงินรายจ่ายทั้งหมด </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">เงินคงเหลือส่งคืน
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="PMONEYBALANCE" value="<?php echo $data['PMONEYBALANCE']; ?>">
                                                                    <span class="help-block"> ระบุจำนวนเงินคงเหลือส่งคืน </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="tab3">
                                                            <h3 class="block">รายละเอียดประเมินโครงการ</h3>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">ชื่อ
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-2">
                                                                    <input type="text" class="form-control" name="PFIRSTNAME" value="<?php echo $data['PFIRSTNAME']; ?>" />
                                                                    <span class="help-block"> ระบุชื่อผู้จัดทำโครงการ </span>
                                                                </div>
                                                                <label class="control-label col-md-1">นามสกุล
                                                                </label>
                                                                <div class="col-md-2">
                                                                    <input type="text" class="form-control" name="PLASTNAME" name="PFIRSTNAME" value="<?php echo $data['PLASTNAME']; ?>" />
                                                                    <span class="help-block"> ระบุนามสกุล </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">เบอร์โทรศัพท์
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="PTELL" name="PFIRSTNAME" value="<?php echo $data['PTELL']; ?>" />
                                                                    <span class="help-block"> ระบุเบอร์โทรศัพท์ </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">อีเมล
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="PEMAIL" name="PFIRSTNAME" value="<?php echo $data['PEMAIL']; ?>" />
                                                                    <span class="help-block"> ระบุอีเมล </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="tab4">
                                                            <h3 class="block">ยืนยันแบบฟอร์มกิจกรรม/โครงการ</h3>
                                                            <h4 class="form-section">รายละเอียดข้อมูลทั่วไป</h4>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">ชื่อกิจกรรม/โครงการ :</label>
                                                                <div class="col-md-4">
                                                                    <p class="form-control-static" data-display="PNAME"> </p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">ดำเนินการระหว่างวันที่ :</label>
                                                                <div class="col-md-1">
                                                                    <p class="form-control-static" data-display="PDATE"> </p>
                                                                </div>
                                                                    <label class="control-label col-md-1">:</label>
                                                                <div class="col-md-1">
                                                                    <p class="form-control-static" data-display="PDATE2"> </p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">ภาคเรียนที่ :</label>
                                                                <div class="col-md-4">
                                                                    <p class="form-control-static" data-display="PTERM"> </p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">ปีการศึกษา :</label>
                                                                <div class="col-md-4">
                                                                    <p class="form-control-static" data-display="PYEAR"> </p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">สถานที่ดำเนินการ :</label>
                                                                <div class="col-md-4">
                                                                    <p class="form-control-static" data-display="PPLACE"> </p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">หน่วยงานผู้รับผิดชอบกิจกรรม/โครงการ :</label>
                                                                <div class="col-md-4">
                                                                    <p class="form-control-static" data-display="PPERSON"> </p>
                                                                </div>
                                                            </div>
                                                            <?php
                                                                $status = $_SESSION['TYPESTATUS'];
                                                                if($status == "สโมสรนักศึกษา" || $status == "แอดมิน"){
                                                            ?>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">สโมสรคณะ :</label>
                                                                <div class="col-md-4">
                                                                    <p class="form-control-static" data-display="PFACULTY"> </p>
                                                                </div>
                                                            </div>
                                                            <?php
                                                                }
                                                            ?>
                                                            <?php
                                                                $status = $_SESSION['TYPESTATUS'];
                                                                if($status == "ชมรมนักศึกษา" || $status == "แอดมิน"){
                                                            ?>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">ชื่อชมรม :</label>
                                                                <div class="col-md-4">
                                                                    <p class="form-control-static" data-display="PCLUBNAME"> </p>
                                                                </div>
                                                            </div>
                                                            <?php
                                                                }
                                                            ?>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">จำนวนผู้เข้าร่วมโครงการ :</label>
                                                                <div class="col-md-4">
                                                                    <p class="form-control-static" data-display="PPARTICIPANT"> </p>
                                                                </div>
                                                            </div>
                                                            <h4 class="form-section">รายละเอียดการใช้จ่ายเงิน</h4>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">งบประมาณที่ได้รับจำนวน :</label>
                                                                <div class="col-md-4">
                                                                    <p class="form-control-static" data-display="PBUDGETS"> </p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">ได้จาก :</label>
                                                                <div class="col-md-4">
                                                                    <p class="form-control-static" data-display="PSOURCE"> </p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">รวมรายจ่ายในการดำเนินโครงการทั้งสิ้น :</label>
                                                                <div class="col-md-4">
                                                                    <p class="form-control-static" data-display="PSELLMONEY"> </p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">เงินคงเหลือส่งคืน :</label>
                                                                <div class="col-md-4">
                                                                    <p class="form-control-static" data-display="PMONEYBALANCE"> </p>
                                                                </div>
                                                            </div>
                                                            <h4 class="form-section">รายละเอียดประเมินโครงการ</h4>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">ชื่อผู้จัดทำโครงการ :</label>
                                                                <div class="col-md-4">
                                                                    <p class="form-control-static" data-display="PFIRSTNAME"> </p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">นามสกุล :</label>
                                                                <div class="col-md-4">
                                                                    <p class="form-control-static" data-display="PLASTNAME"> </p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">เบอร์โทรศัพท์ :</label>
                                                                <div class="col-md-4">
                                                                    <p class="form-control-static" data-display="PTELL"> </p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">อีเมล :</label>
                                                                <div class="col-md-4">
                                                                    <p class="form-control-static" data-display="PEMAIL"> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-4 col-md-9">
                                                            <a href="javascript:;" class="btn default button-previous">
                                                                <i class="fa fa-angle-left"></i> ย้อนกลับ </a>
                                                            <a href="javascript:;" class="btn btn-outline green button-next"> ต่อไป
                                                                <i class="fa fa-angle-right"></i>
                                                            </a>
                                                            <button class="btn green button-submit" name="submit"> ยืนยัน
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

    <!-- start table -->
    <?php
        if(isset($_POST['submit'])){

                            $data = "'" . $_POST['PNAME'] . "',";
                            $data .= "'" . $_POST['PDATE'] . "',";
                            $data .= "'" . $_POST['PDATE2'] . "',";
                            $data .= "'" . $_POST['PTERM'] . "',";
                            $data .= "'" . $_POST['PYEAR'] . "',";
                            $data .= "'" . $_POST['PPLACE'] . "',";
                            $data .= "'" . $_POST['PPERSON'] . "',";
                            $data .= "'" . $_POST['PFACULTY'] . "',";
                            $data .= "'" . $_POST['PCLUBNAME'] . "',";
                            $data .= "'" . $_POST['PPARTICIPANT'] . "',";
                            $data .= "'" . $_POST['PBUDGETS'] . "',";
                            $data .= "'" . $_POST['PSOURCE'] . "',";
                            $data .= "'" . $_POST['PSELLMONEY'] . "',";
                            $data .= "'" . $_POST['PMONEYBALANCE'] . "',";
                            $data .= "'" . $_POST['PFIRSTNAME'] . "',";
                            $data .= "'" . $_POST['PLASTNAME'] . "',";
                            $data .= "'" . $_POST['PTELL'] . "',";
                            $data .= "'" . $_POST['PEMAIL'] . "'";
                       
            if($_POST['PPERSON'] == 1){
                $sql = "UPDATE storage1 SET PNAME = '$_POST[PNAME]', 
                PDATE = '$_POST[PDATE]', PDATE2 = '$_POST[PDATE2]', PTERM = '$_POST[PTERM]', 
                PYEAR = '$_POST[PYEAR]', PPLACE = '$_POST[PPLACE]', PPERSON = '$_POST[PPERSON]', 
                PFACULTY = '$_POST[PFACULTY]', PCLUBNAME = '$_POST[PCLUBNAME]', PPARTICIPANT = '$_POST[PPARTICIPANT]', 
                PBUDGETS = '$_POST[PBUDGETS]', PSOURCE = '$_POST[PSOURCE]', PSELLMONEY = '$_POST[PSELLMONEY]', 
                PMONEYBALANCE = '$_POST[PMONEYBALANCE]', PFIRSTNAME = '$_POST[PFIRSTNAME]', 
                PLASTNAME = '$_POST[PLASTNAME]', PTELL = '$_POST[PTELL]', 
                PEMAIL = '$_POST[PEMAIL]' WHERE P_ID = '$id'";
                            $result = mysqli_query($link, $sql);

            }else if ($_POST['PPERSON'] == 2){
                $sql = "UPDATE storage2 SET PNAME = '$_POST[PNAME]', 
                PDATE = '$_POST[PDATE]', PDATE2 = '$_POST[PDATE2]', PTERM = '$_POST[PTERM]', 
                PYEAR = '$_POST[PYEAR]', PPLACE = '$_POST[PPLACE]', PPERSON = '$_POST[PPERSON]', 
                PFACULTY = '$_POST[PFACULTY]', PCLUBNAME = '$_POST[PCLUBNAME]', PPARTICIPANT = '$_POST[PPARTICIPANT]', 
                PBUDGETS = '$_POST[PBUDGETS]', PSOURCE = '$_POST[PSOURCE]', PSELLMONEY = '$_POST[PSELLMONEY]', 
                PMONEYBALANCE = '$_POST[PMONEYBALANCE]', PFIRSTNAME = '$_POST[PFIRSTNAME]', 
                PLASTNAME = '$_POST[PLASTNAME]', PTELL = '$_POST[PTELL]', 
                PEMAIL = '$_POST[PEMAIL]' WHERE P_ID = '$id'";
                            $result = mysqli_query($link, $sql);

            }else if ($_POST['PPERSON'] == 3){
                $sql = "UPDATE storage3 SET PNAME = '$_POST[PNAME]', 
                PDATE = '$_POST[PDATE]', PDATE2 = '$_POST[PDATE2]', PTERM = '$_POST[PTERM]', 
                PYEAR = '$_POST[PYEAR]', PPLACE = '$_POST[PPLACE]', PPERSON = '$_POST[PPERSON]', 
                PFACULTY = '$_POST[PFACULTY]', PCLUBNAME = '$_POST[PCLUBNAME]', PPARTICIPANT = '$_POST[PPARTICIPANT]', 
                PBUDGETS = '$_POST[PBUDGETS]', PSOURCE = '$_POST[PSOURCE]', PSELLMONEY = '$_POST[PSELLMONEY]', 
                PMONEYBALANCE = '$_POST[PMONEYBALANCE]', PFIRSTNAME = '$_POST[PFIRSTNAME]', 
                PLASTNAME = '$_POST[PLASTNAME]', PTELL = '$_POST[PTELL]', 
                PEMAIL = '$_POST[PEMAIL]' WHERE P_ID = '$id'";
                            $result = mysqli_query($link, $sql);

            }else if ($_POST['PPERSON'] == 4){
                $sql = "UPDATE storage4 SET PNAME = '$_POST[PNAME]', 
                PDATE = '$_POST[PDATE]', PDATE2 = '$_POST[PDATE2]', PTERM = '$_POST[PTERM]', 
                PYEAR = '$_POST[PYEAR]', PPLACE = '$_POST[PPLACE]', PPERSON = '$_POST[PPERSON]', 
                PFACULTY = '$_POST[PFACULTY]', PCLUBNAME = '$_POST[PCLUBNAME]', PPARTICIPANT = '$_POST[PPARTICIPANT]', 
                PBUDGETS = '$_POST[PBUDGETS]', PSOURCE = '$_POST[PSOURCE]', PSELLMONEY = '$_POST[PSELLMONEY]', 
                PMONEYBALANCE = '$_POST[PMONEYBALANCE]', PFIRSTNAME = '$_POST[PFIRSTNAME]', 
                PLASTNAME = '$_POST[PLASTNAME]', PTELL = '$_POST[PTELL]', 
                PEMAIL = '$_POST[PEMAIL]' WHERE P_ID = '$id'";
                            $result = mysqli_query($link, $sql);

            }else if ($_POST['PPERSON'] == 5){
                $sql = "UPDATE storage5 SET PNAME = '$_POST[PNAME]', 
                PDATE = '$_POST[PDATE]', PDATE2 = '$_POST[PDATE2]', PTERM = '$_POST[PTERM]', 
                PYEAR = '$_POST[PYEAR]', PPLACE = '$_POST[PPLACE]', PPERSON = '$_POST[PPERSON]', 
                PFACULTY = '$_POST[PFACULTY]', PCLUBNAME = '$_POST[PCLUBNAME]', PPARTICIPANT = '$_POST[PPARTICIPANT]', 
                PBUDGETS = '$_POST[PBUDGETS]', PSOURCE = '$_POST[PSOURCE]', PSELLMONEY = '$_POST[PSELLMONEY]', 
                PMONEYBALANCE = '$_POST[PMONEYBALANCE]', PFIRSTNAME = '$_POST[PFIRSTNAME]', 
                PLASTNAME = '$_POST[PLASTNAME]', PTELL = '$_POST[PTELL]', 
                PEMAIL = '$_POST[PEMAIL]' WHERE P_ID = '$id'";
                            $result = mysqli_query($link, $sql);

            }

                            
            header("Location: editproject4.php?id=$id");
            mysqli_close($link);
            
                            
            }
            ?>
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