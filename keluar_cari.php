<?php
	if ($_SESSION['level'] == "admin")
	{
?>


<a href='index.php?halaman=keluar' class='btn btn-small btn-success'>
   <span>Kembali </span>
   </a>
   <br/>
   <br/>
 <h1>Data Penjualan Panen:</h1>
					
					<div class="priority high"><span><?php echo "tanggal ".$_POST['tgl_awal']." sampai dengan ".$_POST['tgl_akhir'];?></span></div>  

    <br/>
   
<div class='row-fluid sortable'>		
				<div class='box span12'>
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Combined All Table</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-bordered table-striped table-condensed">
						  <thead>
							  <tr>
	<th>No</th>
	<th>No.Trans</th>
    <th>Tgl. Trans</th>
    <th>Nama Pembeli</th>
    <th>Total Harga</th>
    <th>Biaya Kirim</th>
    <th>Grand Total</th>
    <th><center>Print</center></th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
							<?php 
  		$total_piutang=0;
  		$pesan="SELECT * FROM keluar WHERE tgl_keluar BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]' ORDER BY keluar_id DESC";
		$sum_jml_bayar="SELECT SUM(jml_bayar) AS total_jml_bayar FROM keluar WHERE tgl_keluar BETWEEN '$_POST[tgl_awal]' 
		AND '$_POST[tgl_akhir]' ORDER BY keluar_id DESC";
		$query=mysql_query($pesan);
		$no=1;
		while($row=mysql_fetch_array($query)){
		$grand_total=$row['total']+$row['biaya_kirim'];
		//menampilkan nama pelanggan
		$z=mysql_fetch_array(mysql_query("SELECT * FROM Pelanggan WHERE pelanggan_id='$row[pelanggan_id]'"));
		?>
		
		
		<td><?php echo "$no"; ?></td>
    <td><a href="#" onclick="javascript:wincal=window.open('keluar_detail.php?id=<?php echo $row['keluar_id']; ?>','Lihat Data','width=790,height=400,scrollbars=1');">
    <?php echo $row['keluar_id']; ?></a></td>
    <td><?php echo "$row[tgl_keluar]"; ?></td>
    <td><?php echo "$z[pelanggan_nama]"; ?></td>
   <td align="right"><?php echo "Rp "; echo digit($row['total']); ?></td>
    <td align="right"><?php echo "Rp "; echo digit($row['biaya_kirim']); ?></td>
    <td align="right"><?php echo "Rp "; echo digit($grand_total); ?></td>
	 <td><center><a class='btn btn-info' href="#" onclick="javascript:wincal=window.open('print_nota.php?id=<?php echo $row['jual_id']; ?>','Lihat Data','width=490,height=400,scrollbars=1');">
    <i class='halflings-icon white print'></i></a></center></td>
								
							</tr>
							<?php } 

	$sum2="SELECT SUM(total) AS ttotal FROM keluar WHERE tgl_jual BETWEEN '$_POST[tgl_awal]' 
		  AND '$_POST[tgl_akhir]' ORDER BY keluar_id DESC";
	$qsum2=mysql_query($sum2);
	$dsum2=mysql_fetch_array($qsum2);
  
   $qsum_jml_bayar=mysql_query($sum_jml_bayar);
		  $dsum_jml_bayar=mysql_fetch_array($qsum_jml_bayar);
		  
	?></td>
    <td align="right" style="color:#FFF; border:none; background-color:#333" colspan="7">Total</td>
    <td align="right" style="color:#FFF; border:none; background-color:#333"><?php echo "Rp ". digit($grand_total);  ?></td>
    <td align="right" style="color:#FFF; border:none; background-color:#333"></td>
  </tr>
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
	}
	else
	{
		echo "anda tidak berhak meng-akses halaman ini !";
	}
?>