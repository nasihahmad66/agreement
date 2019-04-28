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
                    <h1 class="page-header">File Ditolak <?php echo $_SESSION['namauser'];?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Nasabah Agreement
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                    <?php 
									include("config.php");
									
									$page=0;
									if(isset($_GET['page']))	$page=($_GET['page']-1)*20;
									$file=mysqli_query($connect, "select * from namaid where status_verifikasi='Ditolak' and status_pialang='Belum Selesai'");
									$jmlhtotal=mysqli_num_rows($file)/20;
									$sql="select * from namaid where status_verifikasi='Ditolak' and status_pialang='Belum Selesai' order by status_verifikasi desc limit $page,20";
									$query=mysqli_query($connect, $sql);
									$no=1;
									echo'<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
									    <tr>
                                            <th>File Name</th>
                                            <th>Status Verifikasi</th>
                                            <th>Tanggal Ditolak</th>
											<th>Status Form</th>
                                        </tr>
                                    </thead>';
                                    
									while ($hasil=mysqli_fetch_array($query))
									{	
										$verifikasi=$hasil['status_verifikasi'];
											echo "<tbody>
											<tr class='odd gradeX'>
												<td>".$hasil['id']."-".$hasil['NAMA']."</td>";
												if($verifikasi == 'Ditolak'){
													echo "<td style='background-color:#29B01A';><font color='white'>".$hasil['status_verifikasi']."</font></td>";
													
												}
												echo "<td>".$hasil['tanggal_verifikasi']."</td>
												<td>".$hasil['status_pialang']."</td>
												</tr>";
										$no++;
									}
									?>
									</tbody>
                                </table>
								<?php
									echo '<table align="center" style=margin-top:20px;><tr>';
									for($i=0;$i<$jmlhtotal;$i++)
									{	
										echo '<td>&nbsp &nbsp <a href="file_ditolak.php?page='.($i+1).'">_'.($i+1).'_ </a></td>';
									}
									echo '</tr></table>';
								$jum=mysqli_query($connect,"select count(id) as 'jmlh' from namaid where status_verifikasi='Ditolak' and status_pialang='Belum Selesai'");?>
								<p>Jumlah File Ditolak = <?php
								echo mysqli_fetch_array($jum)["jmlh"];
								?></p></font></font>
								
                            </div>
                            <!-- /.table-responsive -->
                           
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