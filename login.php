<?php
include_once 'includes/config.php';

$config = new Config();
$db = $config->getConnection();
	
if($_POST){
	
	include_once 'includes/login.inc.php';
	$login = new Login($db);

	$login->userid = $_POST['username'];
	$login->passid = md5($_POST['password']);
	
	if($login->login()){
		echo "<script>location.href='index.php'</script>";
	}
	
	else{
		echo "<script>alert('Gagal Total')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.g-axon.com/integral-3.0/classic/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 12:47:38 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
<title>SPK | Login</title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="assets/css/entypo.css" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Integral core stylesheet -->
<link href="assets/css/integral-core.css" rel="stylesheet">
<!-- /integral core stylesheet -->

<link href="assets/css/integral-forms.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->


</head>
<body class="login-page">

<!-- Loader Backdrop -->
  <div class="loader-backdrop">           
    <!-- Loader -->
    <div class="loader">
      <div class="bounce-1"></div>
      <div class="bounce-2"></div>
    </div>
    <!-- /loader -->
  </div>
<!-- loader backgrop -->

<div class="login-container">
  <div class="login-branding">
    <a href="login.php"><h2>Halaman Login</h2></a>
  </div>
  <div class="login-content">
    <h2> Silahkan login</h2>
    <form action="" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="username"  id="InputUsername1" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" id="InputPassword1" placeholder="Password">
          </div>
          <p><small style="color:#999;">Username: admin dan Password: admin</small></p>
          <button type="submit" class="btn btn-primary">Login</button>
          <input type="reset" name="" value="Cancel" class="btn btn-danger">
        </form>
  </div>
</div>

<!--Load JQuery-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/loader.js"></script>

</html>
