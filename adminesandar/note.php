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
	$hasil=mysql_query($sql);
	$nama=mysql_fetch_array($hasil);
?>
<script type="text/javascript" src="js/jquery-1.11.0.js"></script>
<script>
$(document).ready(function(){
	$('#karakter').keyup(function (){
		var len = this.value.length;
		if(len >= 2000){
			this.value = this.value.substring(0, 2000);
		}
		$('#hitung').text(2000 - len)
	});
});
function validate()
{
	if (formka.note.value == "") 
	{ 
		alert("Note belum diisi"); 
		formka.note.focus(); 
		return false; 
	} 
	else return true; 
}
</script>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Note Nasabah</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <form action="note_exec.php" method="post" name="formka" onSubmit="return validate()">
                        <div class="form-group">
                            <label>Nama Nasabah</label>
                            <input class="form-control" nama="namanasabah" value="<?php echo "".$nama['NAMA']."";?>" disabled>
						<input type="hidden" name="idnas" value="<?php echo $id; ?>">
                        </div>
						<div class="form-group">
                            <label>No. ACC</label>
                            <input class="form-control" placeholder="ACC. Number" name="acc" value='<?php echo"".$nama['no_acc']."";?>' disabled>
                        </div>
							<div class="form-group">
							<label>Nama Wakil Pialang </label>
							<input class="form-control" name="wakil" value='<?php echo"".$nama['Wakil_Pialang']."";?>' disabled>
			                </div>

							<div class="form-group">
							<label valign="top">Note</label><br/>
							<p>Jumlah Karakter Maksimal : 2000<br/>
							<textarea id="karakter" name="note" class="form-control1" row="100" col="50"><?php echo"".$nama['note']."";?></textarea><br/>
							<span id="hitung">2000</span> Karakter Tersisa
			                </div>
							
						<div class="form-group">
							<label>IP Nasabah</label>
							<input class="form-control" name="wakil" value='<?php echo"".$nama['ip_address']."";?>' disabled>
			            </div>
		
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