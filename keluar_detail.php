<?php
error_reporting(0);
require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style/style_index.css" type="text/css">
<style type="text/css">
#noBorder
{
	border:none;	
}
table
{
	margin:5px 9px;
}
td
{
	padding:5px 9px;
	border:1px solid #c0d3e2;
}
#namaField{
	color:#FFF;
	background-color:#333;
	text-align:center;
	padding-top:7px;
	border:none;
}
</style>

</head>

<body>
  <a href="index.php?halaman=keluar"><div id="keluar">Kembali</div></a>
<?php
	$warna1="#c0d3e2";
	$warna2="#cfdde7";
	$warna=$warna1;

	$jual2="SELECT * FROM keluar WHERE keluar_id='$_GET[id]' order by inc asc";
	$qjual2=mysql_query($jual2);
	$data=mysql_fetch_array($qjual2);
	$z=mysql_fetch_array(mysql_query("SELECT * FROM pelanggan WHERE pelanggan_id='$data[pelanggan_id]'"));
  $q=mysql_fetch_array(mysql_query("SELECT * FROM karyawan WHERE kar_id='$data[kar_id]'"));
?>
<table cellspacing="0" cellpadding="0">
  <tr>
    <td id="noBorder">No. Transaksi</td>
    <td id="noBorder">:</td>
    <td id="noBorder"><?php echo "$data[keluar_id]"; ?></td>
  </tr>
  
  <tr>
    <td id="noBorder">Tgl Transaksi</td>
    <td id="noBorder">:</td>
    <td id="noBorder"><?php echo "$data[tgl_keluar]"; ?></td>
  </tr>
  <tr>
    <td id="noBorder">Nama Pelanggan</td>
    <td id="noBorder">:</td>
    <td id="noBorder"><?php echo "$z[pelanggan_nama]"; ?></td>
  </tr>
    <tr>
    <td id="noBorder">Nama Karyawan</td>
    <td id="noBorder">:</td>
    <td id="noBorder"><?php echo "$q[kar_nama]"; ?></td>
  </tr>
    <tr>
    <td id="noBorder">No. SPB</td>
    <td id="noBorder">:</td>
    <td id="noBorder"><?php echo "$data[spb]"; ?></td>
  </tr>
   </tr>
    <tr>
    <td id="noBorder">No. Polisi</td>
    <td id="noBorder">:</td>
    <td id="noBorder"><?php echo "$data[nopol]"; ?></td>
  </tr>
</table>
    <table cellspacing="1" cellpadding="0">
      <tr>
        <td id="namaField">Kode Panen</td>
        <td id="namaField">Nama Panen</td>
         <td id="namaField">Bruto</td>
          <td id="namaField">Tarra</td>
        <td id="namaField">Qty(Netto)</td>
        <td id="namaField">Harga satuan</td>
        <!--<td id="namaField">Diskon</td>-->
        <td id="namaField">Harga total</td>
      </tr>
      <?php 
		$pesan="SELECT * FROM keluar_detail WHERE keluar_id='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
    $b=mysql_fetch_array(mysql_query("SELECT * FROM panen WHERE panen_id='$row[panen_id]'"));
			if ($warna==$warna1){
				$warna=$warna2;
			}
			else{
				$warna=$warna1;
			}
		?>
      <tr bgcolor=<?php echo $warna; ?>>
        <td><?php echo "$row[panen_id]"; ?></td>
        <td><?php echo "$b[panen_nama]"; ?></td>
        <td><?php echo "$row[bruto]"; ?></td>
        <td><?php echo "$row[tarra]"; ?></td>
        <td><?php echo "$row[qty]"; ?></td>
        <td align="right"><?php echo digit($row['harga_satuan']);?></td>
      <!--  <td align="right"><?php echo digit($row['diskon']);?>%</td>-->
        <td align="right"><?php echo digit($row['harga_total']); ?></td>
      </tr>
      <?php } ?>
      <tr>
        <td colspan="1" style="color:#FFF; background-color:#333; border:none;" align="right">Total Qty :</td>
		 
        
        <td style="color:#FFF; background-color:#333; border:none;">
        	<?php
				$sumQty="SELECT SUM(qty) AS totalQty FROM keluar_detail WHERE jual_id='$_GET[id]'";
				$qsumQty=mysql_query($sumQty);
				$dsumQty=mysql_fetch_array($qsumQty);
				echo $dsumQty['totalQty'];
			?>
        </td>
        <td style="color:#FFF; background-color:#333; border:none;">&nbsp;</td>
        <td style="color:#FFF; background-color:#333; border:none;">&nbsp;</td>
        <td style="color:#FFF; background-color:#333; border:none;">&nbsp;</td>
        <td style="color:#FFF; background-color:#333; border:none;" align="right">Total =</td>
        <td style="color:#FFF; background-color:#333; border:none;" align="right">
        	<?php
				$jual="SELECT * FROM keluar WHERE keluar_id='$_GET[id]'";
				$qjual=mysql_query($jual);
				$djual=mysql_fetch_array($qjual);
				echo "Rp ".digit($djual['total']);
				
				$grand_total=$djual['total']+$djual['biaya_kirim'];
			?>
        </td>
      </tr>
      <tr>
      	<td colspan="6" style="color:#FFF; background-color:#333; border:none;" align="right">Total keseluruhan (total + Ongkos Kirim) =</td>
        <td style="color:#FFF; background-color:#333; border:none;" align="right"><?php echo "Rp ".digit($grand_total); ?></td>
      </tr>
      
    </table>
</body>
</html>