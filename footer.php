<!-- Footer -->
        <footer class="footer-main"> 
           <!-- <p style="text-align: right;"><b>Sistem Pendukung Keputusan Menggunakan Metode Weighted Product</b></p> -->
        </footer>   
        <!-- /footer -->
        
      </div>
      <!-- /main content -->
      
  </div>
  <!-- /main container -->
  
</div>
<!-- /page container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.toastmessage.js"></script>
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
    <script>
    $(document).ready(function() {

    	$('#tabeldata').DataTable();

	});
    function showSuccessToast() {
        $().toastmessage('showSuccessToast', "Data telah dihapus");
    }
    function showStickySuccessToast() {
        $().toastmessage('showToast', {
            text     : 'Sukses, Tambah lagi',
            sticky   : true,
            position : 'top-right',
            type     : 'success',
            closeText: '',
            close    : function () {
                console.log("toast is closed ...");
            }
        });

    }
    function showNoticeToast() {
        $().toastmessage('showNoticeToast', "Kami telah menentukan nilai yang boleh diinput");
    }
    function showStickyNoticeToast() {
        $().toastmessage('showToast', {
             text     : 'Kami telah menentukan nilai yang boleh diinput',
             sticky   : true,
             position : 'top-right',
             type     : 'notice',
             closeText: '',
             close    : function () {console.log("toast is closed ...");}
        });
    }
    function showWarningToast() {
        $().toastmessage('showWarningToast', "Peringatan, password anda masukkan salah");
    }
    function showStickyWarningToast() {
        $().toastmessage('showToast', {
            text     : 'Peringatan, password anda masukkan salah',
            sticky   : true,
            position : 'top-right',
            type     : 'warning',
            closeText: '',
            close    : function () {
                console.log("toast is closed ...");
            }
        });
    }
    function showErrorToast() {
        $().toastmessage('showErrorToast', "Data gagal dihapus, (hapus dulu data yang terkait pada menu lainnya)");
    }
    function showStickyErrorToast() {
        $().toastmessage('showToast', {
            text     : 'Gagal total! Coba lagi',
            sticky   : true,
            position : 'top-right',
            type     : 'error',
            closeText: '',
            close    : function () {
                console.log("toast is closed ...");
            }
        });
    }
    $('#select-all').click(function(event) {   
        if(this.checked) {
            // Iterate each checkbox
            $(':checkbox').each(function() {
                this.checked = true;                        
            });
        } else{
            $(':checkbox').each(function() {
                this.checked = false;                        
            });
        }
    });
    $('#select-all2').click(function(event) {   
        if(this.checked) {
            // Iterate each checkbox
            $(':checkbox').each(function() {
                this.checked = true;                        
            });
        } else{
            $(':checkbox').each(function() {
                this.checked = false;                        
            });
        }
    });
    </script>
  </body>
</html>