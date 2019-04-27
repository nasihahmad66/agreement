<?php 
session_start();
include "config.php";
require "header.php";
//require_once('session_header.php');
if(isset ($_SESSION['namauser']))
{
	if($_SESSION['namauser']!=null)
	{

?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Manager</h1>
                    <?php
                    	if (isset($_SESSION['alert'])) {
                   	?>
                   		<div class="alert alert-danger">
						 	<?php
						 		echo $_SESSION['alert'];
						 	?>
						</div>
                   	<?php
                    	}
                    ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                	<form action="form_manager.php" method="post">
						  <div class="form-group">
						    <label for="email">Nama Lengkap : </label>
						    <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required="required">
						  </div>
						  <div class="form-group">
						    <label for="pwd">Kode AE:</label>
						    <input type="text" name="kode_ae" id="kodeae" class="form-control" placeholder="Kode AE" required="required" style="text-transform: uppercase">
						  </div>
						  <a href="data_manager.php" type="button" class="btn btn-danger">Cancel</a>
						  <button type="submit" name="submit" class="btn btn-success">Simpan</button>
					</form>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../jquery.maskedinput.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#kodeae").mask("*-*-**-***");
        })
    </script>

    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="js/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="js/demo/dashboard-demo.js"></script>

</body>

</html>
<?php
}
else
{
		echo "<script>document.location = 'login.php';</script>";
}
}
else
{
		echo "<script>document.location = 'login.php';</script>";
}

unset($_SESSION['alert']);
?>