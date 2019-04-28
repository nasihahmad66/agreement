<?php 
session_start();
//include("config.php");
require("header.php");
//require_once('session_header.php');
if(isset ($_SESSION['namauser']))
{
	if($_SESSION['namauser']!=null)
	{

	include "config.php";
	$id=$_GET['id'];
        $_SESSION['id_nasabah1']=$id;
	$sql="select * from namaid where id='$id'";
	$hasil=mysqli_query($connect,$sql);
	$nama=mysqli_fetch_array($hasil);
	$id=$nama['id'];
        $_SESSION['namanasabah1']=$nama['NAMA'];
?>
<script type="text/javascript" src="js/jquery-1.11.0.js"></script>
<script>
function validate()
{
	if (formka.acc.value == "") 
	{ 
		alert("No. ACC belum diisi"); 
		formka.acc.focus(); 
		return false; 
	} 
	
	else if (formka.wakil.value == "")
	{
		alert("Nama Wakil Pialang belum diisi");
		formka.wakil.focus();
		return false;
	}
	else return true; 
}
</script>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Konfirmasi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <form action="buktikonfirmasi/function_pialang.php" method="post" name="formka" onSubmit="return validate()">
                        <div class="form-group">
                            <label>Nama Nasabah</label>
                            <input class="form-control" nama="namanasabah" value="<?php echo "".$nama['NAMA']."";?>" disabled>
							<input type="hidden" name="id_nasabah" value="<?php echo $id; ?>">
                        </div>
						<div class="form-group">
                            <label>No. ACC</label>
                            <input class="form-control" placeholder="ACC. Number" name="acc">
                        </div>
						<?php 
						if($_SESSION['hak_akses']=='Wakil Pialang' || $_SESSION['hak_akses']=='Co-Wakil Pialang')
						{
						?>
							<div class="form-group">
							<label>Nama Wakil Pialang </label>
							<input class="form-control" name="wakil" value='<?php echo"".$nama['Wakil_Pialang']."";?>' disabled>
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
		
                        <button type="submit" class="btn btn-default" onclick="return confirm('Anda Yakin Menyimpan Perubahan ini?')">Submit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
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