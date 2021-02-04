<?php
// include 'head.php';
include "includes/config.php";
session_start();
if(!isset($_SESSION['nama_lengkap'])){
	echo "<script>location.href='login.php'</script>";
}
$config = new Config();
$db = $config->getConnection();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Administrasi</title>
    <style>
    
		.menu {
			background: #69ab3e;
			overflow: hidden;
			margin-bottom: 60px;
			
		}
		.menu ul {
			list-style: none;
			padding: 0;
			margin: 0;	
		}
		.menu li {
			/*float: left;*/
			display: inline-block;
		}
		.menu ul li a {
			text-decoration: none;
			padding: 20px;
			color: white;
			display: block;
		}
		.menu ul li a:hover {
			/*background-color: red;*/
			color: white;
		}
		.menu ul ul {
			position: absolute;
			display: none;
			background: #69ab3e;
		}
		.menu ul ul li {
			/*float: none;*/
			display: inline;
			background: #69ab3e;
		}
		.menu ul li:hover ul   {
			display: block;
		}
		.menu ul ul li a:hover {
			background: red;
		}
		.menu ul ul li a{
			padding: 0px 10px 5px 10px;
			
		}
    </style>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="css/jquery.toastmessage.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
	<nav class="navbar navbar-default navbar-static-top menu" style="background: #69ab3e; display: none; margin-top: -150px;">
	  <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		</div>

	

		<!-- Collect the nav links, forms, and other content for toggling -->
		 <div class="menu collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background: #69ab3e; ">
		  <ul >
			<!-- <li><a href="index.php">HOME</a></li>
			<li><a href="#">PROFILE</a></li>
			<li><a href="#">MASTER FILE</a>
				<ul>
					<li><a href="#">DATA KRITERIA</a></li>
					<li><a href="#">DATA ALTERNATIF</a></li>
					<li><a href="#">DATA BOBOT</a></li>
				</ul>
			</li>
			<li><a href="rangking-baru">PROSES</a></li>
			<li><a href="#">HASIL</a></li>
			<li><a href="laporan.php">LAPORAN</a></li> -->
			<li><a href="kriteria.php" >DATA KRITERIA</a></li>
			<li><a href="alternatif.php">DATA ALTERNATIF</a></li>
			<li><a href="nilai.php">DATA BOBOT</a></li>
			<li><a href="rangking.php">DATA RANGKING</a></li>
			<li><a href="bobot.php">DATA NILAI</a></li>
			<li><a href="laporan.php">LAPORAN</a></li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="profil.php"><?php echo $_SESSION['nama_lengkap'] ?></a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="profil.php">Profil</a></li>
				<li><a href="user.php">Manejer Pengguna</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="logout.php">Logout</a></li>
			  </ul>
			</li>
		  </ul>
		</div>  <!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav> 
  	
	<div class="menu">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		</div>
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="#">PROFILE</a>
				<ul>
					<li><a href="tentang.php">Tentang Pemerintah Kec.Borbor</a></li>
					<li><a href="visi.php">Visi & Misi</a></li>
					<li><a href="sejarah.php">Sejarah Kec. Borbor</a></li>
				</ul>
			</li>
			<li><a href="#">MASTER FILE</a>
				<ul>
					<li><a href="kriteria.php">DATA KRITERIA</a></li>
					<li><a href="alternatif.php">DATA ALTERNATIF</a></li>
					<li><a href="bobot.php">DATA BOBOT</a></li>
				</ul>
			</li>
			<li><a href="rangking-baru.php">PROSES</a></li>
			<li><a href="#">HASIL</a>
				<ul>
					<li><a href="rangking.php">Hasil Akhir</a></li>
					<li><a href="grafik.php">Grafik</a></li>
				</ul>
			</li>
			<li><a href="laporan.php">LAPORAN</a></li>
			<li style="margin-left: 520px;"><a href="profil.php"><?php echo $_SESSION['nama_lengkap'] ?></a></li>
			<li style="margin-left: -20px;"><a href="#"><span class="glyphicon glyphicon-cog"></span></a>
			 	<ul>
					<li><a href="profil.php">Profil</a></li>
					<li><a href="user.php">Manejer Pengguna</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="logout.php">Logout</a></li>
				 </ul>
			</li>			
		</ul>
		
	</div>

    <div class="container">