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
                    <h1 class="page-header">Data Deposit Klien</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Permintaan Deposit
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                    <?php 
									include("config.php");
									
									if(isset($_GET['page'])){
										$start=($_GET['page']-1)*100;
										$page = $_GET['page'];
									} else{
										$start=0;
										$page=1;
									}
									$file=mysqli_query($connect,"select * from deposit ORDER BY tanggal DESC");
									$jmlhtotal=mysqli_num_rows($file)/100;
									$sql="select * from deposit ORDER BY tanggal DESC limit $start,100";
									$query=mysqli_query($connect, $sql);
									$no=1;
									
									echo'<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
									    <tr>
                                            <th>Nama Nasabah</th>
                                            <th>Nomor Login</th>
                                            <th>Email</th>
                                            <th>Tanggal</th>
                                            <th>Jumlah Deposit</th>
                                            <th>Bukti Deposit</th>
                                            <th>Alamat IP</th>
                                            <th>Print</th>
                                        </tr>
                                    </thead>';
                                    
									while ($hasil=mysqli_fetch_array($query))
									{	
										// $verifikasi=$hasil['status_verifikasi'];
										echo "<tbody>
										<tr class='odd gradeX'>
											<td>".$hasil['namanasabah']."</td>";
											echo "<td>{$hasil['nologin']}</td>";
											echo "<td>{$hasil['email']}</td>";
											echo "<td>{$hasil['tanggal']}</td>";
											if ($hasil['setoran']=='IDR'){
											    echo "<td style=\"color:#1d5f9c;\">Rp ".number_format($hasil['jumlah'],0,'','.')."</td>";
											} else{
											    echo "<td style=\"color:#127A60;\">$ ".number_format($hasil['jumlah'],0,'','.')."</td>";
											}
											if ($hasil['bukti']!= NULL){
											    echo "<td><a href='../../deposit/".$hasil['bukti']."' target='_blank'>Lihat gambar</a></td>";
											} else{
											   echo "<td><a href=\"#\">Belum menyertakan bukti</a></td>";
											}
											echo "<td>{$hasil['ip_addr']}</td>";
											echo "<td><a id=\"verifikasi\" href=\"buktikonfirmasi/cetakdeposit.php?id=".$hasil['id_deposit']."\" title=\"Print\" rel=\"pacebuk\">Print</a></td>
										</tr>";
										$no++;
									}
									?>
									</tbody>
                                </table>
								<?php
									echo '<table align="center" style=margin-top:20px;><tr>';
									echo '<td>&nbsp &nbsp <a href="deposit_list.php" style="text-decoartion:underline;">FIRST &laquo; </a></td>';
									if($page>1){
									  echo '<td>&nbsp &nbsp <a href="deposit_list.php?page='.($page-1).'">PREV</a></td>';
									  
									}
									if($page<$jmlhtotal)
									{
									  echo '<td>&nbsp &nbsp <a href="deposit_list.php?page='.($page+1).'">NEXT</a></td>';
									  
									}
									echo '<td>&nbsp &nbsp <a href="deposit_list.php?page='.($jmlhtotal).'">&raquo; LAST</a></td>';
									echo '</tr></table>';
								$jum=mysqli_query($connect, "select count(id) as 'jmlh' from namaid where status_verifikasi='Telah Terverifikasi' and status_pialang='Belum Selesai'");?>
								</font></font>
								
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