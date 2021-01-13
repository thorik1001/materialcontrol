<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	
	
 
  <link rel="stylesheet" href="assets/css/ui.jqgrid.min.css" />
  <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
  <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
 

  <link rel="stylesheet" type="text/css" href="assets/easyui/resource/themes/default/easyui.css">
  <link rel="stylesheet" type="text/css" href="assets/easyui/resource/themes/icon.css">

  <script src="assets/js/ace-extra.min.js"></script>

  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.min.js"></script>

<!-- <script src="http://jeromeetienne.github.io/jquery-qrcode/src/jquery.qrcode.js"></script>
<script src="http://jeromeetienne.github.io/jquery-qrcode/src/qrcode.js"></script> -->
  
  <script type="text/javascript" src="assets/easyui/resource/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="assets/easyui//datagrid-detailview.js"></script>
  <script type="text/javascript" src="assets/js/datagrid-filter.js"></script>

  <style type="text/css">
	  .zdialog { display: none; }
	  .xdialog { display: none; }
	  .ydialog { display: none; }
	</style>

  <script>
    let mainurl = window.location.origin + '/duta';
  </script>
	
	
<?php
	include "library/koneksi.php";
	
	if(isset($_GET['inc'])){
        $nopr=$_GET['inc'];
    }
    else {
        die ("Error. No PR Selected!");    
    }	
	
//  $pesan="SELECT * FROM tblpr_detail WHERE nopr ='$id'";			
//	$qp_pr=mysql_query($pesan);		
//	while($hasil=mysql_fetch_assoc($qp_pr))

?>

<body>

		
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			
			
<div class='row-fluid sortable'>		
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon user'></i><span class='break'></span>Permintaan Pembelian Item dengan No : DUTA-PR <?echo $nopr ?></h2>
						<div class='box-icon'>
							<a href='#' class='btn-setting'><i class='halflings-icon wrench'></i></a>
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<table class='table table-striped table-bordered bootstrap-datatable datatable'>
						  <thead>
							  <tr>
		  
		  
		  <th>No PR</th>
		  <th>Item</th>
		  <th>Qty</th>
		  <th>Unit</th>
		  <th>Harga</th>
		  <th>Jumlah Harga</th>
          <th>Kategori</th>
          <th>Supplier</th>
		  <th>Keterangan</th>
          </tr>
						  </thead>   
						  
	
	
						  <tbody>				  
					  <?php
					  
$conn = mysqli_connect('localhost','root','password','dutadb');

//ambil data dari tblpr_detail dan tblpr  di database
   //     $query = "SELECT * FROM $usertable WHERE id = $id LIMIT 1";

  $nopr=$_GET['inc'];
  
$ambildata=mysqli_query($conn, "SELECT * FROM tblpr_detail where inc='$nopr'");
while($hasil=mysqli_fetch_assoc($ambildata)){
    ?>
						  <tr>
						  
						  
		  	
		  <td><?php echo $hasil['nopr'];?></td>
		  <td><?php echo $hasil['item'];?></td>
		  <td><?php echo $hasil['qty'];?></td>
          <td><?php echo $hasil['unit'];?></td>
          <td>Rp. <?php echo $hasil['harga'];?></td>
          <td><?php echo $hasil['jumlahharga'];?></td>
		  <td><?php echo $hasil['supplier'];?></td>
		  <td><?php echo $hasil['kategori'];?></td>
		  <td><?php echo $hasil['keterangan'];?></td>
		  </tr>
		  
		  <?php
}
?>
		 				  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			</div><!--/row-->
			

 
			<center>
			 <a class="btn btn-small btn-primary" href="index.php?halaman=tblpr">Kembali</a>

			 </center>
