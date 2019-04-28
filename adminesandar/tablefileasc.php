<?php 
$q = intval($_GET['q']);
include("config.php");
$sort_arr = 'ASC';
if($sort_arr=='ASC')
{
	$sort_icon = " <img height='12' src='sort_asc.png'>";
}
else if($sort_arr=='DESC')
{
	$sort_icon = " <img height='12' src='sort_desc.png'>";
}
$page=0;
if(isset($_GET['page']))	$page=($_GET['page']-1)*20;
$file=mysqli_query($connect, "select * from namaid where status_verifikasi='Telah Terverifikasi' and status_pialang='Selesai'");
$jmlhtotal=mysqli_num_rows($file)/20;
									
$sql="select * from namaid where status_verifikasi='Telah Terverifikasi' and status_pialang='Selesai' order by id ".$q." limit $page,20";
$query=mysqli_query($connect, $sql);
$no=1;
$jum=mysqli_query($connect, "select count(id) as 'jmlh' from namaid where status_verifikasi='Telah Terverifikasi' and status_pialang='Selesai'");
echo'<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead> 
	<tr>
		<th>File Name '.$sort_icon.'</th>
		<th>Wakil Pialang</th>
		<th>Status Verifikasi</th>
		<th>Tanggal Verifikasi</th>
		<th>Status Form</th>
		<th>Tanggal Konfirmasi</th>
		<th>Bukti Konfirmasi</th>
		<th>Bukti Verifikasi</th>
		<th>Note</th>
	</tr>
</thead>';
while ($hasil=mysqli_fetch_array($query))
{
	if($hasil['status_verifikasi']=='Telah Terverifikasi' && $hasil['status_pialang']=='Selesai')
	{	$id_pialang="KONF-".$hasil['id']."-".$hasil['NAMA'].".pdf";
		$veri="VERI-".$hasil['id']."-".$hasil['NAMA'].".pdf";
		$nomer = count($hasil['id']);
		echo "<tbody>
		<tr class='odd gradeX'>
			<td>".$hasil['id']."-".$hasil['NAMA']."</a></td>
			<td>".$hasil['Wakil_Pialang']."</td>
			<td>".$hasil['status_verifikasi']."</td>
			<td>".$hasil['tanggal_verifikasi']."</td>
			<td>".$hasil['status_pialang']."</td>
			<td>".$hasil['tanggal_add_pialang']."</td>
			<td class='center'><a href='buktikonfirmasi/".$id_pialang."'>Download</a></td>
			<td class='center'><a href='buktikonfirmasi/".$veri."'>Download</a></td>
			<td class='center'><a id=\"note\" href=\"note.php?id=".$hasil['id']."\" title=\"note\">Klik Disini</a></td>
		</tr>";
	}$nomer++;
}
?>
		</tbody>
    </table>
<?php
echo '<table align="center" style=margin-top:20px;><tr>';
for($i=0;$i<$jmlhtotal;$i++)
{	
	echo '<td>&nbsp &nbsp <a href="history.php?page='.($i+1).'">_'.($i+1).'_ </a></td>';
}
echo '</tr></table>';
?>
<p>Jumlah Data Agreement Yang Telah Selesai = <?php
echo mysqli_result($jum, 0, "jmlh");
?></p>