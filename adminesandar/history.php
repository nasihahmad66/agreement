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
                    <h1 class="page-header">History</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <font color='red'>* Format tanggal yang dipakai: YYYY-MM-DD H:i:s</font>
                        </div>
                        <!-- /.panel-heading-->
                        <div class="panel-body">					
                            <div class="table-responsive" id="tabelfileasc">
                                    <?php
									//$by=$_POST["by"];
									$order='desc';
									include("config.php");
									
									if(isset($_GET['page'])){
										$start=($_GET['page']-1)*20;
										$page = $_GET['page'];
									} else{
										$start=0;
										$page=1;
									}
									$file=mysqli_query($connect,"select * from namaid where status_verifikasi='Telah Terverifikasi' and status_pialang='Selesai'");
									$jmlhtotal=mysqli_num_rows($file)/20;
									
									$sql="select * from namaid where status_verifikasi='Telah Terverifikasi' and status_pialang='Selesai' order by id ".$order." limit $start,20";
									$query=mysqli_query($connect,$sql);
									$no=1;
									$jum=mysqli_query($connect,"select count(id) as 'jmlh' from namaid where status_verifikasi='Telah Terverifikasi' and status_pialang='Selesai'");
									echo'<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead> 
									    <tr>
											<th>File Name</th>
											<th>Wakil Pialang</th>
											<th>Status Verifikasi</th>
											<th>Tanggal Verifikasi</th>
											<th>Status Form</th>
											<th>Tanggal Konfirmasi</th>';
											if($_SESSION['hak_akses']!='Acc-Read Only'){
											echo'
											<th>Bukti Konfirmasi</th>
											<th>Bukti Verifikasi</th>
											<th>Note</th>';
											}
											echo'
                                        </tr>
                                    </thead>';
                                    
									while ($hasil=mysqli_fetch_array($query))
									{
										
										if($hasil['status_verifikasi']=='Telah Terverifikasi' && $hasil['status_pialang']=='Selesai')
										{	$id_pialang="KONF-".$hasil['id']."-".$hasil['NAMA'].".pdf";
											$veri="VERI-".$hasil['id']."-".$hasil['NAMA'].".pdf";
											$nomer = count($hasil);
											echo "<tbody>
											<tr class='odd gradeX'>
												<td>".$hasil['id']."-".$hasil['NAMA']."</a></td>
												<td>".$hasil['Wakil_Pialang']."</td>
												<td>".$hasil['status_verifikasi']."</td>
												<td>".$hasil['tanggal_verifikasi']."</td>
												<td>".$hasil['status_pialang']."</td>
												<td>".$hasil['tanggal_add_pialang']."</td>";
												if($_SESSION['hak_akses']!='Acc-Read Only'){
												echo "
												<td class='center'>
													<a href='buktikonfirmasi/".$id_pialang."'>Download</a>
												</td>
												<td class='center'>
													<a href='buktikonfirmasi/".$veri."'>Download</a>
												</td>
												<td class='center'>
													<a id=\"note\" href=\"note.php?id=".$hasil['id']."\" title=\"note\">Klik Disini</a>
												</td>";
												}
											echo "
											</tr>";
										}$nomer++;
									}
									?>
									</tbody>
                                </table>
								<?php
									echo '<table align="center" style=margin-top:20px;><tr>';
									echo '<td>&nbsp &nbsp <a href="history.php" style="text-decoartion:underline;">FIRST &laquo; </a></td>';
									if($page>1){
									  echo '<td>&nbsp &nbsp <a href="history.php?page='.($page-1).'">PREV</a></td>';
									  
									}
									if($page<$jmlhtotal)
									{
									  echo '<td>&nbsp &nbsp <a href="history.php?page='.($page+1).'">NEXT</a></td>';
									  
									}
									echo '<td>&nbsp &nbsp <a href="history.php?page='.($jmlhtotal).'">&raquo; LAST</a></td>';
									
									echo '</tr></table>';
								?>
								<p>Jumlah Data Agreement Yang Telah Selesai = <?php
								$row = mysqli_fetch_array($jum,MYSQLI_NUM);
								echo ceil($row[0]);
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