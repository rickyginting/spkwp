<?php
include "header.php";
// include "includes/config.php";

// session_start();
// if(!isset($_SESSION['nama_lengkap'])){
// 	echo "<script>location.href='index.php'</script>";
// }
// $config = new Config();
// $db = $config->getConnection();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sistem Pendukung Keputusan Metode WP</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap 3.3.6 -->
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

<!--Jvector Map-->
<link href="assets/plugins/jvectormap/css/jquery-jvectormap-2.0.3.css" rel="stylesheet">

<link href="assets/css/integral-forms.css" rel="stylesheet">
<style>
     .kotak {
        padding: 20px;
        margin-bottom: 15px;
        box-shadow: 0px 0px 10px -5px rgba(0,0,0,0.7);
    }
</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>

<!-- Loader Backdrop -->
	<!-- <div class="loader-backdrop">            -->
	  <!-- Loader -->
		<!-- <div class="loader">
			<div class="bounce-1"></div>
			<div class="bounce-2"></div>
		</div> -->
	  <!-- /loader -->
	<!-- </div> -->
<!-- loader backgrop -->

<!-- Page container -->
<!-- <div class="page-container"> -->

  <!-- Page Sidebar -->
  <!-- <div class="page-sidebar"> -->
  
  		<!-- Site header  -->
		<!-- <header class="site-header">
		  <div class="site-logo"><a href="index.php"><h4>SPK WP</h4></a></div>
		  <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
		  <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
		</header> -->
		<!-- /site header -->
		
		<!-- Main navigation -->
		<!-- <ul id="side-nav" class="main-menu navbar-collapse collapse">
			<li><a href="index.php">Home</a></li>
			<li><a href="nilai.php">Nilai</a></li>
			<li><a href="kriteria.php">Kriteria</a></li>
			<li><a href="bobot.php">Bobot</a></li>
			<li><a href="alternatif.php">Alternatif</a></li>
			<li><a href="rangking.php">Rangking</a></li>
			<li><a href="laporan.php">Laporan</a></li>
		</ul> -->
		<!-- /main navigation -->		
  <!-- </div> -->
  <!-- /page sidebar -->
  
  <!-- Main container -->
  <div class="main-container">
  
	<!-- Main header -->
    <!-- <div class="main-header row"> -->
      <!-- <div class="col-sm-6 col-xs-7"> -->
	  
		<!-- User info -->
        <!-- <ul class="user-info pull-left">          
          <li class="profile-info dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"> <img width="44" class="img-circle avatar" alt="" src="assets/images/avatar3.png"><?php echo $_SESSION['nama_lengkap'] ?><span class="caret"></span></a> -->
		  
			<!-- User action menu -->
            <!-- <ul class="dropdown-menu">
              
              <li><a href="profil.php"><i class="icon-user"></i>My profile</a></li>
			  <li class="divider"></li>
			  <li><a href="user.php"><i class="icon-cog"></i>Manejer Pengguna</a></li>
			  <li><a href="logout.php"><i class="icon-logout"></i>Logout</a></li>
            </ul> -->
			<!-- /user action menu -->
			
          <!-- </li>
        </ul> -->
		<!-- /user info -->
		
      <!-- </div> -->
	  
      <div class="col-sm-6 col-xs-5">
	  	<div class="pull-right">
			<!-- User alerts -->
			<!-- <ul class="user-info pull-left"> -->
			
			  <!-- Notifications -->
			  
			  <!-- /notifications -->
			  
			  <!-- Messages -->
			  
			  <!-- /messages -->
			  
			</ul>
			<!-- /user alerts -->
			
		</div>
      </div>
    </div>
	<!-- /main header -->
<!-- Main content -->
	<div class="main-content">

<?php
include_once 'includes/alternatif.inc.php';
$pro1 = new Alternatif($db);
$stmt1 = $pro1->readAll();
$stmt1x = $pro1->readAll();
$stmt1y = $pro1->readAll();
$stmt1y = $pro1->readAll2();
include_once 'includes/bobot.inc.php';
$pro2 = new Bobot($db);
$stmt2 = $pro2->readAll();
$stmt2x = $pro2->readAll();
$stmt2y = $pro2->readAll();
$stmt2yx = $pro2->readAll();
include_once 'includes/rangking.inc.php';
$pro = new Rangking($db);
$stmt = $pro->readKhusus();
$stmtx = $pro->readKhusus();
$stmty = $pro->readKhusus();
?>
	<br/>
	<div>
	<div class="kotak">
		<h1 style="color: #050c57;"><b>Sistem Pendukung Keputusan Penentuan Penerimaan Bantuan </b></h1>
		<h1 style="color:#050c57; text-align: center; margin-top: -10px;"><b>Bedah Rumah Dengan Metode WP(Weighted Product)</b></h1>
		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs" role="tablist">
		    <li role="presentation" class="active"><a href="#rangking" aria-controls="rangking" role="tab" data-toggle="tab">Laporan Perangkingan</a></li>
		    <li role="presentation" style="cursor: pointer;"><a id="cetak" role="tab">Cetak Laporan 1 (PrintMe)</a></li>
		    <li role="presentation"><a href="laporan-cetak.php" role="tab">Cetak Laporan 2 (FPDF)</a></li>
		    <!--
		    <li role="presentation" style="cursor: pointer;"><a onClick ="$('#container').tableExport({type:'png',escape:'false'});" role="tab">Cetak Laporan 3 (tableExport)</a></li>
		    -->
		  </ul>
		
		  <!-- Tab panes -->
		  <div class="tab-content">
		    <div role="tabpanel" class="tab-pane active" id="rangking">
		    	<br/>
		    	<!-- <h4>Rancangan Keluaran</h4>  -->
				<!-- <table width="100%" class="table table-striped table-bordered">
			        <thead>
			            <tr>
			                <th rowspan="2" style="vertical-align: middle" class="text-center">Alternatif</th>
			                <th colspan="<?php echo $stmt2x->rowCount(); ?>" class="text-center">Kriteria</th>
			                <th rowspan="2" style="vertical-align: middle" class="text-center">Vektor S</th>
			                <th rowspan="2" style="vertical-align: middle" class="text-center">Vektor V</th>
			            </tr>
			            <tr>
			            <?php
						while ($row2x = $stmt2x->fetch(PDO::FETCH_ASSOC)){
						?>
			                <th><?php echo $row2x['nama_kriteria'] ?><br/>(<?php echo $row2x['tipe_kriteria'] ?>) </th>
			            <?php
						}
						?>
			            </tr>
			        </thead>
			
			        <tbody>
						<tr>
			                <th>Bobot</th>
			                <?php
			                while ($row2y = $stmt2y->fetch(PDO::FETCH_ASSOC)){
							?>
			                <td>
			                	<?php 
			                	echo $row2y['hasil_bobot'];
			                	?>
			                </td>
			                <?php
			                }
							?>
			            </tr> 
			<?php
			while ($row1x = $stmt1x->fetch(PDO::FETCH_ASSOC)){
			?>
			            <tr>
			                <th><?php echo $row1x['nama_alternatif'] ?></th>
			                <?php
			                $ax= $row1x['id_alternatif'];
							$stmtrx = $pro->readR($ax);
							while ($rowrx = $stmtrx->fetch(PDO::FETCH_ASSOC)){
							?>
			                <td>
			                	<?php 
			                	echo $rowrx['nilai_rangking'];
			                	?>
			                </td>

			                <?php
			                }
							?>
			            </tr>
			<?php
			}
			?>
			        </tbody>
			
			    </table>  -->

			    
		    	<h4>Rancangan Keluaran</h4>
				<table width="100%" class="table table-striped table-bordered" border="1">
			        <thead>
			            <tr>
			            	<th rowspan="2" style="vertical-align: middle" class="text-center">No</th>
			                <th rowspan="2" style="vertical-align: middle" class="text-center">Alternatif</th>
			                <th colspan="<?php echo $stmt2->rowCount(); ?>" class="text-center">Kriteria</th> 
			                <th rowspan="2" style="vertical-align: middle" class="text-center">Vektor S</th>
			                <th rowspan="2" style="vertical-align: middle" class="text-center">Vektor V</th>
			            </tr>
			            <tr>
			            <?php
						while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
						?>
			                <th><?php echo $row2['nama_kriteria'] ?></th>
			            <?php
						}
						?>
			            </tr>
			        </thead>
			
			        <tbody>
			<?php
			$n = 1;
			$ii = 1;
			while ($row1 = $stmt1y->fetch(PDO::FETCH_ASSOC)){
			?>
			<!-- <?php echo  "(A" .$ii++ . ")"  ?> -->
			            <tr>
			            	<th><?= $n++; ?></th>
			                <th><?php echo $row1['nama_alternatif'] ?> <?php echo  "(" . $row1['kode_alternatif'] . ")";  ?></th>
			                <?php
			                $a= $row1['id_alternatif'];
							$stmtr = $pro->readR($a);
							while ($rowr = $stmtr->fetch(PDO::FETCH_ASSOC)){
								// $b = $rowr['id_kriteria'];
								// $tipe = $rowr['tipe_kriteria'];
								// $bobot = $rowr['hasil_bobot'];
							?>
			                 <td>
			                	<?php 
			                	echo $rowr['nilai_rangking'];
			                	?>
			                 </td>
			                
							
			                <!-- <td>
			                	<?php 
			                	if($tipe=='benefit'){
			                		echo $nor = pow($rowr['nilai_rangking'],$bobot);
								} else{
									echo $nor = pow($rowr['nilai_rangking'],-$bobot);
								}

								$pro->ia = $a;
								$pro->ik = $b;
								$pro->nn4 = $nor;
								$pro->normalisasi1();
			                	?>
			                </td> -->
			                <?php
			                }
							?>
							<td>
								<?php 
								$stmthasil = $pro->readHasil1($a);
								$hasil = $stmthasil->fetch(PDO::FETCH_ASSOC);
								echo $hasil['bbn'];
								$pro->has1 = $hasil['bbn'];
								$pro->hasil1();
								?>
							</td>
							<td>
								<?php
								$stmtmax = $pro->readMax();
								$maxnr = $stmtmax->fetch(PDO::FETCH_ASSOC);
								echo $hasil['bbn']/$maxnr['mnr1'];
								$pro->has2 = $hasil['bbn']/$maxnr['mnr1'];
								$pro->hasil2();
								?>
							</td>
			            </tr>
			<?php
			}
			?>
			        </tbody>
			
			    </table>
		  </div>
	    </div>
	  </div>
	
	</div>
	<!-- <footer class="text-center">&copy; 2017</footer> -->
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-printme.js"></script>
    <script>
    	$('#cetak').click(function() {

    		$("#rangking").printMe({ "path": "css/bootstrap.min.css", "title": "LAPORAN HASIL AKHIR" }); 

		});
    </script>
    <script type="text/javascript" src="js/tableExport.js"></script>
	<script type="text/javascript" src="js/jquery.base64.js"></script>
	<script type="text/javascript" src="js/html2canvas.js"></script>
	<script type="text/javascript" src="js/jspdf/libs/sprintf.js"></script>
	<script type="text/javascript" src="js/jspdf/jspdf.js"></script>
	<script type="text/javascript" src="js/jspdf/libs/base64.js"></script>

<!--Load JQuery-->

<script src="assets/plugins/metismenu/js/jquery.metisMenu.js"></script>
<script src="assets/plugins/blockui-master/js/jquery-ui.js"></script>
<script src="assets/plugins/blockui-master/js/jquery.blockUI.js"></script>

<!--Knob Charts-->
<script src="assets/plugins/knob/js/jquery.knob.min.js"></script>

<!--Jvector Map-->
<script src="assets/plugins/jvectormap/js/jquery-jvectormap-2.0.3.min.js"></script>
<script src="assets/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>

<!--ChartJs-->
<script src="assets/plugins/chartjs/js/Chart.min.js"></script>

<!--Morris Charts-->
<script src="assets/plugins/morris/js/raphael-min.js"></script>
<script src="assets/plugins/morris/js/morris.min.js"></script>

<!--Float Charts-->
<script src="assets/plugins/flot/js/jquery.flot.min.js"></script>
<script src="assets/plugins/flot/js/jquery.flot.tooltip.min.js"></script>
<script src="assets/plugins/flot/js/jquery.flot.resize.min.js"></script>
<script src="assets/plugins/flot/js/jquery.flot.pie.min.js"></script>
<script src="assets/plugins/flot/js/jquery.flot.time.min.js"></script>

<!--Functions Js-->
<script src="assets/js/functions.js"></script>

<!--Dashboard Js-->
<script src="assets/js/dashboard.js"></script>

<script src="assets/js/loader.js"></script>

  </body>
</html>