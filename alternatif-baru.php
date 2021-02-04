<?php
include_once 'header.php';
if($_POST){
	
	include_once 'includes/alternatif.inc.php';
	$eks = new Alternatif($db);

	$eks->kd = $_POST['kd'];
	$eks->kt = $_POST['kt'];
	
	if($eks->insert()){
?>
<script type="text/javascript">
window.onload=function(){
	showStickySuccessToast();
};
</script>
<?php
	}
	
	else{
?>
<script type="text/javascript">
window.onload=function(){
	showStickyErrorToast();
};
</script>
<?php
	}
}
?>
<!-- Main content -->
    <div class="main-content" style="margin-top: 20px;">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-2"></div>
		  <div class="col-xs-12 col-sm-12 col-md-8">
		  	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-6 text-left">
		  			<h3>Tambah Alternatif</h3>
		  		</div>
		  		<div class="col-md-6 text-right">
		  			<h3>
		  				<button type="button" onclick="location.href='alternatif.php'" class="btn btn-success">Kembali</button>
		  			</h3>
		  		</div>
		  	</div>
			
			    <form method="post">
			    	<div class="form-group">
				    <label for="kd">Kode Alternatif</label>
				    <input type="text" class="form-control" id="kd" name="kd" required>
				  </div>
				  <div class="form-group">
				    <label for="kt">Nama Alternatif</label>
				    <input type="text" class="form-control" id="kt" name="kt" required>
				  </div>
				  <button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			  
		  </div></div></div>
		  <div class="col-xs-12 col-sm-12 col-md-2">
		  </div>
		</div>
		</section>
		</div>
		</div>
		<?php
include_once 'footer.php';
?>