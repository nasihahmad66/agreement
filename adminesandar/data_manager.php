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
                    <h1 class="page-header">Data Manager</h1>
                    <?php
                        if (isset($_SESSION['alert'])) {
                    ?>
                        <div class="alert alert-success">
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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Manager
                            <span class="pull-right">
                            	<a href="tambah_manager.php" class="btn btn-info">Tambah Manager</a>
                            </span>
                            <span class="clearfix"></span>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php
                                    $sql = "SELECT * FROM managers ORDER BY status ASC";

                                    $retval = mysql_query( $sql, $connect );
                                ?>
                            	<table class="table table-bordered">
                            		<thead>
                            			<tr>
                            				<th>No</th>
                            				<th>Nama</th>
                            				<th>Kode AE</th>
                            				<th>Link</th>
                            				<th>Status</th>
                            				<th>Action</th>
                            			</tr>
                            		</thead>
                            		<tbody>
                                        <?php
                                            $no = 1;
                                            while($row = mysql_fetch_assoc($retval)){
                                        ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td><?php echo $row['nama'];?></td>
                                                <td><span style="text-transform: uppercase"><?php echo $row['kode_ae'];?></span></td>
                                                <td>
                                                    <a href="#" class="show-link" data-toggle="modal" data-target="#linkModal" data-link="<?php echo $row['link'];?>">Show</a>
                                                </td>
                                                <td>
                                                    <?php if($row['status'] == 1){
                                                        echo "<span class='label label-success'>Aktif</span>";
                                                    }else{
                                                        echo "<span class='label label-danger'>Tidak Aktif</span>";
                                                    }?>
                                                    
                                                </td>
                                                <td>
                                                    <?php if($row['status'] == 2){
                                                        echo "<a href='status_manager.php?id=".$row['id']."&status=1' class='btn btn-success'>Aktifkan</a> <a href='delete_manager.php?id=".$row["id"]."' class='btn btn-danger'>Delete</a>";
                                                    }else{
                                                        echo "<a href='edit_manager.php?id=".$row["id"]."' class='btn btn-info'>Edit</a> ";
                                                        echo "<a href='status_manager.php?id=".$row['id']."&status=2' class='btn btn-danger'>Non  Aktifkan</a> ";
                                                        echo "<a href='delete_manager.php?id=".$row["id"]."' class='btn btn-danger'>Delete</a> ";
                                                    }?>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                            }
                                        ?>
                            		</tbody>
                            	</table>
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

    <div class="modal fade" id="linkModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Link : </h4>
          </div>
          <div class="modal-body">
            <a href="#" id="link"></a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.show-link').on('click', function() {
                var data_link = $(this).attr('data-link');
                $('#link').text(data_link);
                $('#link').attr('href', data_link);
            })
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