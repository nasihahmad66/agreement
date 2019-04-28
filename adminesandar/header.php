<?php 
include("config.php");
//require_once('session_header.php');
if(isset($_SESSION['namauser']))
{
	if($_SESSION['namauser']!=null)
	{

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Administrator Area</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="css/plugins/timeline/timeline.css" rel="stylesheet">

	<!-- Page-Level Plugin CSS - Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
	
    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                
                <a class="navbar-brand" href="index.php">PT. Esandar Arthamas Berjangka</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

        </nav>
        <!-- /.navbar-static-top -->

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                           <img src="logo-esandar.jpg" width="100%">
                            <span class="input-group-btn">
                                <!--<button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>-->
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
					<?php
					
					if($_SESSION['hak_akses']=='Wakil Pialang' ||$_SESSION['hak_akses']=='Admin')
					{				
					?>
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard <?php echo $_SESSION['nama_lengkap'];?></a>
                    </li>
					<li>
                        <a href="file_verifikasi.php"><i class="fa fa-check-square-o"></i> File Verifikasi</a>
                    </li>
					<li>
                        <a href="file_ditolak.php"><i class="fa fa-ban fa-fw"></i> File Ditolak</a>
                    </li>
                    <li>
                        <a href="history.php"><i class="fa fa-bar-chart-o fa-fw"></i> History</a>
                    </li>
                    <li>
                        <a href="wd.php"><i class="fa fa-money fa-fw"></i> Withdrawal</a>
                    </li>
                    <li>
                        <a href="deposit_list.php"><i class="fa fa-dollar fa-fw"></i> Deposit</a>
                    </li>
                    <li>
                        <a href="data_manager.php"><i class="fa fa-users fa-fw"></i> Data Manager</a>
                    </li>
					<li>
						<a href="logout.php"><i class="fa fa-user fa-fw"></i> Logout</a>
                    <!-- /.dropdown-user -->
					</li>
					<?php
					}else if($_SESSION['hak_akses']=='Co-Wakil Pialang')
					{
					?>
					<li>
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard <?php echo $_SESSION['nama_lengkap'];?></a>
                    </li>
					<li>
                        <a href="file_verifikasi.php"><i class="fa fa-check-square-o"></i> File Verifikasi</a>
                    </li>
					<li>
                        <a href="file_ditolak.php"><i class="fa fa-ban fa-fw"></i> File Ditolak</a>
                    </li>
					<li>
						<a href="logout.php"><i class="fa fa-user fa-fw"></i> Logout</a>
                    <!-- /.dropdown-user -->
					</li>
					<?php
					}
					else if($_SESSION['hak_akses']=='Acc-Read Only')
					{
					?>
					<li>
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard <?php echo $_SESSION['nama_lengkap'];?></a>
                    </li>
					<li>
                        <a href="file_verifikasi.php"><i class="fa fa-check-square-o"></i> File Verifikasi</a>
                    </li>
					<li>
                        <a href="file_ditolak.php"><i class="fa fa-ban fa-fw"></i> File Ditolak</a>
                    </li>
                    <li>
                        <a href="history.php"><i class="fa fa-bar-chart-o fa-fw"></i> History</a>
                    </li>
                    <li>
                        <a href="wd.php"><i class="fa fa-money fa-fw"></i> Withdrawal</a>
                    </li>
                    <li>
                        <a href="deposit_list.php"><i class="fa fa-dollar fa-fw"></i> Deposit</a>
                    </li>
					<li>
						<a href="logout.php"><i class="fa fa-user fa-fw"></i> Logout</a>
                    <!-- /.dropdown-user -->
					</li>
					<?php
					}
					?>
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->
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