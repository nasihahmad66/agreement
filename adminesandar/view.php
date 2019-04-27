<?php 
session_start();
include("config.php");
require("header.php");
//require_once('session_header.php');
if(isset ($_SESSION['namauser']))
{
	if($_SESSION['namauser']!=null)
	{

?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View <?php echo $_SESSION['namafile'] ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Nama Nasabah</label>
                        <input class="form-control" value="<?php echo "".$nama['NAMA']."";?>" disabled>
						<input type="hidden" name="id_nasabah" value="<?php echo $id; ?>">
                    </div>
					<div class="form-group">
                        <label>No. ACC</label>
                        <input class="form-control" placeholder="ACC. Number" name="acc">
                    </div>
					<?php 
					if($_SESSION['hak_akses']=='Wakil Pialang')
					{
					?>
						<div class="form-group">
						<label>Nama Wakil Pialang </label>
						<input class="form-control" name="wakil" value='<?php echo"".$_SESSION["nama_lengkap"]."";?>' disabled>
			                    </div>
					<?php
					}
					else
					{
					?>
						<div class="form-group">
						<label>Nama Wakil Pialang</label>
						<input class="form-control" placeholder="Nama Wakil Pialang" name="wakil">
			                    </div>
					<?php
						}
						?>
		
                        <button type="submit" class="btn btn-default">Submit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    <!-- /.panel -->
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
?>