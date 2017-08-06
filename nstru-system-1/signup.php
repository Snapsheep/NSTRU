<!doctype html>

<?php
include('mysql_connect.php');
?>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
<head>
<meta charset="utf-8" />
<title> Sign up </title>
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
<link href="assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="assets/pages/css/login.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<!-- END THEME LAYOUT STYLES -->
<link rel="shortcut icon" href="favicon.ico" />
</head>

<body class=" login" data-gr-c-s-loaded="true">
    <div class="logo">
      <img src="assets/pages/img/logo03.png" width="170" height="35" alt="">
    </div>

    <!-- start login -->
    <div class="content">
      <form method="post" class="login-form" enctype="multipart/form-data">
        <h3 class="form-title font-green">Sign Up</h3>
        <p class="hint"> Enter your personal details below: </p>
        <div class="alert alert-danger display-hide">
          <button class="close" data-close="alert"></button>
          <span> กรุณากรอกข้อมูลให้ครบถ้วน </span>  
        </div>
        <div class="form-group">
          <label class="control-label visible-ie8 visible-ie9">Username</label>
          <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="USERNAME" required>
        </div>
        <div class="form-group">
          <label class="control-label visible-ie8 visible-ie9">Password</label>
          <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="PASSWORD" required>
        </div>
        <div class="form-group">
          <label class="control-label visible-ie8 visible-ie9">ID_CARD</label>
          <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="ID CARD" name="IDCARD" required/> </div>
          
        <div class="form-group">
           <label class="control-label visible-ie8 visible-ie9">Type</label>
                  	
           	<select name="TYPESTATUS" class="form-control" required>
             <option value="">Type</option>
             <option value="แอดมิน">แอดมิน</option>
             <option value="สภานักศึกษา">สภานักศึกษา</option>
             <option value="องค์การบริหารนักศึกษา">องค์การบริหารนักศึกษา</option>
             <option value="พรรคฝ่ายค้าน">พรรคฝ่ายค้าน</option>
             <option value="สโมสรนักศึกษา">สโมสรนักศึกษา</option>
             <option value="ชมรมนักศึกษา">ชมรมนักศึกษา</option>        
            </select>
        </div>
        
        <div class="form-group">
           <label class="control-label visible-ie8 visible-ie9">Type</label>
                 	
           	<select name="STATUS" class="form-control" required>
             <option value="">Status</option>
             <option value="Admin">Admin</option>
             <option value="User">User</option>     
            </select>
        </div>
       
        <div class="form-group">
          <label class="control-label visible-ie8 visible-ie9">Photo</label>
          <span>Image Input</span>
          <input type="file" name="IMAGE">
        </div>

        <div class="form-actions">
		<a href="index.php" class="nav-link ">
          <button type="button" id="register-back-btn" class="btn green btn-outline">Back</button>
        </a>
          <button name="submit" class="btn btn-success uppercase pull-right">Submit</button>
        </div>
      </form>
    </div>
    <!-- end login -->
    

   
   
    
<?php
	
	
	if(isset($_POST['submit'])){//$_POST มาจาก method = "post"ตรงฟอร์ม 

    $check = "SELECT * FROM username WHERE USERNAME='" . $_POST['USERNAME']."'";
    $result1 = mysqli_query($link, $check);
    $num = mysqli_num_rows($result1);
    
    if($num > 0)
    {
?>
        <script>
        alert('user นี้มีผู้ใช่แล้ว');
        //window.location = 'signup.php';
        </script>
<?php
    } else {

    if(is_uploaded_file($_FILES['IMAGE']['tmp_name'])){
        $ext = pathinfo($_FILES['IMAGE']['name'],PATHINFO_EXTENSION);
        $filename = "image/" . $_POST['USERNAME'] . "." . $ext;
     } else {
        $filename = "";
    }

		$data = "'" . $_POST['USERNAME'] . "',";
		$data .= "'" . $_POST['PASSWORD'] . "',";
		$data .= "'" . $_POST['IDCARD'] . "',";
		$data .= "'" . $_POST['TYPESTATUS'] . "',";
		$data .= "'" . $_POST['STATUS'] . "',";
        $data .= "'" . $filename . "'";
    
		$sql = "INSERT INTO username (USERNAME, PASSWORD, ID_CARD, TYPESTATUS, STATUS, IMAGE) VALUES ($data)";
		$result = mysqli_query($link, $sql); // $link มาจาก include('mysql_connect.php') ที่เอาไว้เชื่อมกับฐานข้อมูล ต้องใส่ $link ทุก ที่ mysqli_query แล้วถามด้วย คำสั่ง sql คือ $sql
	   
     move_uploaded_file($_FILES['IMAGE']['tmp_name'],$filename);
  } 
}
?>
    <div class="copyright"> มหาวิทยาลัยราชภัฏนครศรีธรรมราช </div>
    
    
    
    
    
<!-- BEGIN CORE PLUGINS -->
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/pages/scripts/login.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>