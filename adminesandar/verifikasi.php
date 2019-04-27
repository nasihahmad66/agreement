<?php 
session_start();
include("config.php");
require("header.php");
//require_once('session_header.php');
if(isset ($_SESSION['namauser']))
{
	if($_SESSION['namauser']!=null)
	{

	include "config.php";
	$id=$_GET['id'];
	$sql="select * from namaid where id='$id'";
	$hasil=mysql_query($sql);
	$nama=mysql_fetch_array($hasil);
	$gabung = "".$nama['id']."-".$nama['NAMA'];
?>
<script type="text/javascript" src="jquery-1.11.0.js"></script>
<script type='text/javascript' >
function validasi()
{
//jQuery.noConflict();
var x=$("input[name=centang]:checked").val();

if (x==null || x=="")
  {
  alert("Silahkan Centang Verifikasi Terlebih dahulu.");
  return false;
  }
}
</script>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Verifikasi Nasabah <?php echo $nama['NAMA'];?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<form onSubmit="return validasi()"  action="function_verifikasi.php" name="formku"  method='post'>
							<p align="center"><embed src="../page8/pdfnasabah/<?php echo $gabung;?>.pdf"  width="90%" height="450"></p><br>  
                            <!-- /.table-responsive -->
							<input type="hidden" name="id_nasabah" value="<?php echo $id; ?>">
							<input type="hidden" name="nama_lengkap" value="<?php echo $_SESSION["nama_lengkap"]; ?>">
<?php
if($_SESSION['hak_akses']!='Acc-Read Only')
{
?>

							<p align='center' style='font-size:16px; font-family:arial'>
								<input id='centang' name='centang' type='radio' value='Telah Terverifikasi'> Verifikasi &nbsp;&nbsp;&nbsp;
								<input id='centang' name='centang' type='radio' value='Ditolak'> Ditolak</p>
							<p align="center"><button type="submit" class="btn btn-default">Submit</button></p>
							<?php
							}
							?>
						</form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
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