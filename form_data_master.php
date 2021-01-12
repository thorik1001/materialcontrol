<link href="validasi/style_login.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="validasi/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="validasi/jquery-validation.js"></script>


<?php
   if ($_GET['id']=='duplikat'){
   	echo" <div class='alert alert-error'>
							<button type='button' class='close' data-dismiss='alert'>×</button>
							<h4 class='alert-heading'>Duplicate Data</h4>
							<p>Data <b>$_GET[data]</b> yang anda masukkan sudah ada didatabase, Silahkan Input data Lainnya.</p>
						</div>";
   }
   ?>
   
<?php
require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";

	echo "
	<form id=login name=login method=post action=proses.php enctype='multipart/form-data'>
	  <input type=hidden name=proses id=proses value=$_GET[kode] />";
//form data barang
	if ($_GET['kode']=="barang_insert"){
		//pemanggilan fungsi penambahan
		$a="SELECT * FROM barang";
		$b="SELECT inc FROM barang ORDER BY inc DESC LIMIT 1";
		$inc=penambahan($a, $b);
		$sql = mysql_query("SELECT * FROM lokasi");
		$sql2 = mysql_query("SELECT * FROM kategori");
		$sql3 = mysql_query("SELECT * FROM unit");
		$sql4 = mysql_query("SELECT * FROM supplier");
		
	?><div class='row-fluid sortable'>
				<div class='col-md-12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Form input data barang</h2>
						<div class='box-icon'>
							<a href='#' class='btn-setting'><i class='halflings-icon wrench'></i></a>
								<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						  <fieldset>
						  <input type=hidden name=proses id=proses value="<?php echo $_GET['kode'] ?>" />
						  <input type=hidden name=inc id=inc value='<?php echo $inc ?>' />
						  
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kode Barang </label>
							<div class='controls'>
							<input type='text' name='kode' class='span6 typeahead field required' id='typeahead' title='field ini harus di isi' readonly='true' value='DTM-<?php echo $inc; ?>'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Item / Barang / Alat / Material</label>
							<div class='controls'>
							<input type='text' name=item class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>

							<div class='control-group'>
							<label class='control-label' for='typeahead'>Lokasi </label>
							<div class='controls'>
							
							<select name='lokasi' class="span6 typeahead field required">
								<option disabled selected>Silahkan Pilih Lokasi</option>
								<?php while($tampil = mysql_fetch_array($sql)): ?>
								<option value="<?php echo $tampil['lokasi']; ?>"><?php echo $tampil['lokasi']; ?></option>
								<?php endwhile; ?>
							</select>
							</div>

							<div class='control-group'>
							<label class='control-label' for='typeahead'>Unit </label>
							<div class='controls'>
							<select name='unit' class="span6 typeahead field required">
								<option disabled selected>Silahkan Pilih Unit</option>
								<?php while($tampil3 = mysql_fetch_array($sql3)): ?>
								<option value="<?php echo $tampil3['unit']; ?>"><?php echo $tampil3['unit']; ?></option>
								<?php endwhile; ?>
							</select>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kategori </label>
							<div class='controls'>
							<select name='kategori' class="span6 typeahead field required">
								<option disabled selected>Silahkan Pilih Kategori</option>
								<?php while($tampil2 = mysql_fetch_array($sql2)): ?>
								<option value="<?php echo $tampil2['kategori']; ?>"><?php echo $tampil2['kategori']; ?></option>
								<?php endwhile; ?>
							</select>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Supplier </label>
							<div class='controls'>
							
							<select name='supplier' class="span6 typeahead field required">
								<option disabled selected>Silahkan Pilih Supplier</option>
								<?php while($tampil4 = mysql_fetch_array($sql4)): ?>
								<option value="<?php echo $tampil4['supplier_nama']; ?>"><?php echo $tampil4['supplier_nama']; ?></option>
								<?php endwhile; ?>
							</select>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>HN</label>
							<div class='controls'>
							<input type='text' name=hn class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>
											
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Keterangan</label>
							<div class='controls'>
							<input type='text' name=keterangan class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>
							
						<?php echo"	
							
							<!--<div class='controls'>
							<input type='text' onkeypress=\"return isNumberKey(event)\" name=harga_beli class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>	 -->		
							<div class='form-actions'>
							<input type=submit class='btn btn-primary' name=SimpanBar value=Simpan />
							 <a href='index.php?halaman=data_barang' class='btn'>
   <span>Kembali </span>
   </a>
							</div>
						  </fieldset>
						</form>   
					</div>
				</div><!--/span-->

			</div><!--/row-->"?><?php
	}
		elseif($_GET['kode']=="lokasi_insert"){
		//pemanggilan fungsi penambahan
		$a="SELECT * FROM lokasi";
		$b="SELECT lokasi_id FROM lokasi ORDER BY lokasi_id DESC LIMIT 1";
		$inc=penambahan($a, $b);
		$no=1;
    echo "<div class='row-fluid sortable'>
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Form input data Lokasi </h2>
						<div class='box-icon'>
							<a href='#' class='btn-setting'><i class='halflings-icon wrench'></i></a>
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<form class='form-horizontal'>
						  <fieldset>
						  <input type=hidden name=lokasi_id id=lokasi_id value=$no />
						  
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Nama Lokasi </label>
							<div class='controls'>
							
							<input type='text' name=lokasi class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>							
							
							</div>			
							
							<div class='form-actions'>
							<input type=submit class='btn btn-primary' name=SimpanLok value=Simpan />
													 <a href='index.php?halaman=data_lokasi' class='btn'>
   <span>Kembali </span>
   </a>
			
							 
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->";
	}
	elseif ($_GET['kode']=="beli_insert"){
		//pemanggilan fungsi penambahan
		$c="SELECT * FROM beli";
		$d="SELECT inc FROM beli ORDER BY inc DESC LIMIT 1";
		$inc=penambahan($c, $d);
		$sql = mysql_query("SELECT * FROM lokasi");
		$sql2 = mysql_query("SELECT * FROM kategori");
		$sql3 = mysql_query("SELECT * FROM unit");
	?>
	<div class='row-fluid sortable'>
				<div class='col-md-12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Form input data pembelian</h2>
						<div class='box-icon'>
							<a href='#' class='btn-setting'><i class='halflings-icon wrench'></i></a>
								<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						  <fieldset>
						  <input type=hidden name=proses id=proses value="<?php echo $_GET['kode'] ?>" />
						  <input type=hidden name=inc id=inc value='<?php echo $inc ?>' />
						  
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kode beli </label>
							<div class='controls'>
							
							<input type='text' name='beli_kode' class='span6 typeahead field required' id='typeahead' title='field ini harus di isi' readonly='true' value='DUTA-PO-<?php echo $inc; ?>'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Nama barang </label>
							<div class='controls'>
							
							<input type='text' name=nmpanen class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>

							<div class='control-group'>
							<label class='control-label' for='typeahead'>Supplier </label>
							<div class='controls'>
							
							<select name='supplier' class="span6 typeahead field required">
								<option disabled selected>Silahkan Pilih Supplier</option>
								<?php while($tampil = mysql_fetch_array($sql)): ?>
								<option value="<?php echo $tampil['supplier_id']; ?>"><?php echo $tampil['supplier']; ?></option>
								<?php endwhile; ?>
							</select>
							</div>

							<div class='control-group'>
							<label class='control-label' for='typeahead'>Unit Barang </label>
							<div class='controls'>
							<select name='unit' class="span6 typeahead field required">
								<option disabled selected>Silahkan Pilih Unit</option>
								<?php while($tampil3 = mysql_fetch_array($sql3)): ?>
								<option value="<?php echo $tampil3['unit_id']; ?>"><?php echo $tampil3['unit']; ?></option>
								<?php endwhile; ?>
							</select>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kategori Barang </label>
							<div class='controls'>
							<select name='kategori' class="span6 typeahead field required">
								<option disabled selected>Silahkan Pilih Kategori</option>
								<?php while($tampil2 = mysql_fetch_array($sql2)): ?>
								<option value="<?php echo $tampil2['kategori_id']; ?>"><?php echo $tampil2['kategori']; ?></option>
								<?php endwhile; ?>
							</select>
							</div>
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Keterangan </label>
							<div class='controls'>
							
							<input type='text' name=keterangan class='span6'>
							</div>
						<?php echo"	
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Harga Jual </label>
							<div class='controls'>
							<input type='text' onkeypress=\"return isNumberKey(event)\" name=harga_jual class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>	-->		
							<div class='form-actions'>
							<input type=submit class='btn btn-primary' name=SimpanBar value=Simpan />
													 <a href='index.php?halaman=data_panen' class='btn'>
   <span>Kembali </span>
   </a>
			
							 
							</div>
						  </fieldset>
						</form>   
					</div>
				</div><!--/span-->

			</div><!--/row-->"?><?php
	}
	
	// Form Purchase Requistion
	elseif ($_GET['kode']=="pr_insert"){
		//pemanggilan fungsi penambahan
		$c="SELECT * FROM tblpr";
		$d="SELECT inc FROM tblpr ORDER BY inc DESC LIMIT 1";
		$inc=penambahan($c, $d);
		$sql = mysql_query("SELECT * FROM project");
		$sql1 = mysql_query("SELECT * FROM supplier");
		$sql2 = mysql_query("SELECT * FROM unit");
		$sql3 = mysql_query("SELECT * FROM kategori");
		$sql4 = mysql_query("SELECT * FROM tblpritem");
		$sql5 = mysql_query("SELECT * FROM tblpr");
	?>
	
	<div class='row-fluid sortable'>
				<div class='col-md-12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Form Purchase Requistion</h2>
						<div class='box-icon'>
							<a href='#' class='btn-setting'><i class='halflings-icon wrench'></i></a>
								<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
	
		  <fieldset>
						  <input type=hidden name=proses id=proses value="<?php echo $_GET['kode'] ?>" />
						  <input type=hidden name=inc id=inc value='<?php echo $inc ?>' />
						  
	
<!-- Purchase Requistion -->	
  <div class="alert alert-block">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<h4 class="alert-heading">Perhatian!</h4>
							<p>Pembuatan Purchase Requistion, harus disetujui oleh Manager Operasional</p>
						</div>
						
	    	
						  
						  
			<form id="form1" name="form1" method="post" action="index.php?halaman=tblpr">
			<div class="control-group">
			<label class="control-label" for="date01">No PR &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Tanggal </label>
			<div class="controls">
			<input type='text' name='nopr' class='span6 typeahead field required' id='typeahead' title='field ini harus di isi' readonly='true' value='PR-DUTA-<?php echo $inc; ?>'>
			<input type="text" class="input-xlarge datepicker" id="datepicker1" name="tgldokumen"  readonly="true" value="<?php echo date(Y)."-".date(m)."-".date(d);?>">
						
						  
			</div>			
			</div>
			</form>
					
				<div class='row-fluid sortable'>		
				<div class='box span12'>
					<div class='box-content'>
					<a href='index.php?halaman=form_data_master&kode=item_insert' class='btn btn-small btn-primary'>
   <i class="halflings-icon white plus"></i><span>Tambah Item</span>
   </a>
 
						<table class='table table-striped table-bordered bootstrap-datatable datatable'>
						  <thead>
							  <tr>
		  
		  <th>No</th>
		  <th>No PR</th>
		  <th>Item</th>
		  <th>Qty</th>
		  <th>Unit</th>
		  <th>Harga</th>
		  <th>Jumlah Harga</th>
          <th>Kategori</th>
          <th>Supplier</th>
		  <th>Keterangan</th>
		  
          <th><center>Aksi</center></th>
							  </tr>
						  </thead>   
						  <tbody>
							
							<?php
		$qtmpil_pritem="select * from tblpritem order by inc";					
		$qp_pritem=mysql_query($qtmpil_pritem);		
		$no=1;
		
		while($row2=mysql_fetch_array($qp_pritem)){ ?>
		  <tr>
		  <td><?php echo "$no"; ?></td>  
		  <td><?php echo "PR-DUTA-"; echo $inc; ?></td>
		  <td><?php echo "$row2[item]"; ?></td>
		  <td><?php echo "$row2[qty]"; ?></td>
          <td><?php echo "$row2[unit]"; ?></td>
          <td><?php echo "$row2[harga]"; ?></td>
          <td><?php echo "$row2[jumlahharga]"; ?></td>
		  <td><?php echo "$row2[kategori]"; ?></td>
		  <td><?php echo "$row2[supplier]"; ?></td>
		  <td><?php echo "$row2[keterangan]"; ?></td>
		  
		  <?php 
		  $tbltemp="insert into tblpr select * from tblpritem  where = 'nopr'";
	$simpan="SELECT tabel1.*, tabel2.*
	FROM tabel1 INNER JOIN tabel2
	ON tabel1.PK=tabel2.FK;"
		  ?>
          <td><center><?php echo "<a class='btn btn-mini btn-primary' href=index.php?halaman=form_ubah_data&kode=item_update&id=$row2[inc]>"; ?>
          	 <i class='halflings-icon white edit'></i>
			 <?php echo "</a> ";
			 
			 echo "<a class='btn btn-mini btn-danger' href='proses.php?proses=item_delete&id=$row2[inc]'>"; ?>
          	 <i class='halflings-icon white trash'></i>
			 <?php echo "</a>";
			 
          echo"</center></td>
											
							</tr>";
							$no++;}?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
										
							<h2><i class='halflings-icon edit'></i><span class='break'></span>Proyek</h2> 

							<input type=button class='btn btn-primary' name=ambildata value=Ambil />
							<br>
							<input type='text' name=noproject class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							<input type='text' name=namaproject class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							<input type='text' name=perusahaan class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							<h2><i class='halflings-icon edit'></i><span class='break'></span>Tanggal Dibutuhkan</h2>
							<input type="text" class="input-xlarge datepicker" id="datepicker1" name="tgldipakai"  readonly="true" value="<?php echo date(Y)."-".date(m)."-".date(d);?>">
							<h3><i class='halflings-icon edit'></i><span class='break'></span>Total Harga</h2>
							<input type='text' name=totalharga class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							
	
<!-- End Purchase Requistion -->
						<?php echo"	
							<div class='form-actions'>
		
							<input type=submit class='btn btn-primary' name=SimpanBar value=Proses />
													 <a href='index.php?halaman=tblpr' class='btn'>
   <span>Kembali </span>
   </a>
			</div>

						  </fieldset>
						</form>   
					</div>
				</div><!--/span-->

			
		</div>
		<!--/row-->"
			
			?><?php
	}
	
	
//form data supplier
	elseif($_GET['kode']=="supplier_insert"){
		//pemanggilan fungsi penambahan
		$a="SELECT * FROM supplier";
		$b="SELECT inc FROM supplier ORDER BY inc DESC LIMIT 1";
		$inc=penambahan($a, $b);
    echo "<div class='row-fluid sortable'>
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Form input data supplier </h2>
						<div class='box-icon'>
							<a href='#' class='btn-setting'><i class='halflings-icon wrench'></i></a>
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<form class='form-horizontal'>
						  <fieldset>
						  <input type=hidden name=supplier_inc id=supplier_inc value=$inc />
						  
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kode Suplier </label>
							<div class='controls'>
							
							<input type='text' name=supplier_id class='span6 typeahead field required' id='typeahead' title='field ini harus di isi' readonly='true' value='SPL-$inc'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Nama Supplier </label>
							<div class='controls'>
							
							<input type='text' name=nmSupplier class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Alamat Supplier </label>
							<div class='controls'>
							
							<input type='text' name=alamatSup class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kota Supplier </label>
							<div class='controls'>
							
							<input type='text' name=kotaSup class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Email Supplier </label>
							<div class='controls'>
							<input type='text' name=emailSup class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kontak Supplier </label>
							<div class='controls'>
							<input type='text' onkeypress=\"return isNumberKey(event)\" name=kontakSup class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Keterangan </label>
							<div class='controls'>
							<input type='text' name=keterangan class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>
							
							
							<div class='form-actions'>
							<input type=submit class='btn btn-primary' name=SimpanSup value=Simpan />
													 <a href='index.php?halaman=data_supplier' class='btn'>
   <span>Kembali </span>
   </a>
			
							 
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->";
	}

//form data project
	elseif($_GET['kode']=="project_insert"){
		//pemanggilan fungsi penambahan
		$a="SELECT * FROM project";
		$b="SELECT project_id FROM project ORDER BY project_id DESC LIMIT 1";
		//$inc=penambahan($a, $b);
    echo "<div class='row-fluid sortable'>
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Form input data Project </h2>
						<div class='box-icon'>
							<a href='#' class='btn-setting'><i class='halflings-icon wrench'></i></a>
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<form class='form-horizontal'>
						  <fieldset>
						  	<div class='control-group'>
							<label class='control-label' for='typeahead'>ID Project </label>
							<div class='controls'>
							<input type='text' name=project_id class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>							
							</div>			
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Nama Project </label>
							<div class='controls'>
							<input type='text' name=project_nama class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>							
							</div>			
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Perusahaan </label>
							<div class='controls'>
							<input type='text' name=perusahaan class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>							
							</div>			
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Alamat </label>
							<div class='controls'>
							<input type='text' name=alamat class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>							
							</div>			
							
							<div class='form-actions'>
							<input type=submit class='btn btn-primary' name=SimpanProj value=Simpan />
													 <a href='index.php?halaman=data_project' class='btn'>
   <span>Kembali </span>
   </a>
			
							 
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->";
	}
	elseif($_GET['kode']=="kategori_insert"){
		//pemanggilan fungsi penambahan
		$a="SELECT * FROM lokasi";
		$b="SELECT lokasi_id FROM lokasi ORDER BY lokasi_id DESC LIMIT 1";
    echo "<div class='row-fluid sortable'>
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Form Input Data Kategori </h2>
						<div class='box-icon'>
							<a href='#' class='btn-setting'><i class='halflings-icon wrench'></i></a>
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<form class='form-horizontal'>
						  <fieldset>
						  <input type=hidden name=supplier_inc id=supplier_inc value=$inc />
						  
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Nama Kategori </label>
							<div class='controls'>
							
							<input type='text' name=kategori class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>							
							
							</div>			
							
							<div class='form-actions'>
							<input type=submit class='btn btn-primary' name=SimpanKat value=Simpan />
													 <a href='index.php?halaman=data_kategori' class='btn'>
   <span>Kembali </span>
   </a>
			
							 
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->";
	}
	elseif($_GET['kode']=="unit_insert"){
		//pemanggilan fungsi penambahan
		$a="SELECT * FROM unit";
		$b="SELECT unit_id FROM unit ORDER BY unit_id DESC LIMIT 1";
    echo "<div class='row-fluid sortable'>
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Form Input Data Unit </h2>
						<div class='box-icon'>
							<a href='#' class='btn-setting'><i class='halflings-icon wrench'></i></a>
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<form class='form-horizontal'>
						  <fieldset>
						  <input type=hidden name=supplier_inc id=supplier_inc value=$inc />
						  
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Nama Unit </label>
							<div class='controls'>
							
							<input type='text' name=unit class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>							
							
							</div>
							
							<div class='form-actions'>
							<input type=submit class='btn btn-primary' name=SimpanKat value=Simpan />
													 <a href='index.php?halaman=data_unit' class='btn'>
   <span>Kembali </span>
   </a>
			
							 
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->";
	}elseif($_GET['kode']=="item_insert"){  
//form data item
	//pemanggilan fungsi penambahan
		$a="SELECT * FROM tblpritem";
		$b="SELECT inc FROM tblpritem ORDER BY inc DESC LIMIT 1";
		$inc=penambahan($a, $b);
		$sql = mysql_query("SELECT * FROM lokasi");
		$sql2 = mysql_query("SELECT * FROM kategori");
		$sql3 = mysql_query("SELECT * FROM unit");
		$sql4 = mysql_query("SELECT * FROM supplier");
	echo "<div class='row-fluid sortable'>
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Item Purhase Requistion </h2>
						<div class='box-icon'>
							<a href='#' class='btn-setting'><i class='halflings-icon wrench'></i></a>
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<form class='form-horizontal'>
						  <fieldset>
						  <input type=hidden name=inc id=inc value=$inc />
						  
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Item </label>  
							<div class='controls'>
							<input type='text' name=item class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							<a href='cari_barang.php' class='btn btn-primary'> <span>Cari Item</span></a>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Qty </label>
							<div class='controls'>
							<input type='text' name=qty class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Unit </label>
							<div class='controls'>
							<input type='text' name=unit class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Harga </label>
							<div class='controls'>
							<input type='text' name=harga class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Jumlah Harga</label>
							<div class='controls'>
							<input type='text' name=jumlahharga class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kategori</label>
							<div class='controls'>
							<input type='text' name=kategori class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Supplier</label>
							<div class='controls'>
							<input type='text' name=supplier class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Keterangan </label>
							<div class='controls'>
							<input type='text' name=keterangan class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>
							
							
							<div class='form-actions'>
							<input type=submit class='btn btn-primary' name=SimpanSup value=Simpan />
													 <a href='index.php?halaman=form_data_master&kode=pr_insert' class='btn'>
													<span>Kembali </span>
													</a>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->";
	}
	
	else
	{  


//form data karyawan
	//pemanggilan fungsi penambahan
		$a="SELECT * FROM karyawan";
		$b="SELECT inc FROM karyawan ORDER BY inc DESC LIMIT 1";
		$inc=penambahan($a, $b);
	echo "<div class='row-fluid sortable'>
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Form input data karyawan </h2>
						<div class='box-icon'>
							<a href='#' class='btn-setting'><i class='halflings-icon wrench'></i></a>
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<form class='form-horizontal'>
						  <fieldset>
						  <input type=hidden name=kar_inc id=kar_inc value=$inc />
						  
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kode Karyawan </label>
							<div class='controls'>
							
							<input type='text' name=kar_id class='span6 typeahead field required' id='typeahead' title='field ini harus di isi' readonly='true' value='KRY-$inc'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Nama Karyawan </label>
							<div class='controls'>
							
							<input type='text' name=nmkar class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Alamat Karyawan </label>
							<div class='controls'>
							
							<input type='text' name=alamatkar class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kota Karyawan </label>
							<div class='controls'>
							
							<input type='text' name=kotakar class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Email Karyawan </label>
							<div class='controls'>
							
							<input type='text' name=emailkar class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kontak Karyawan </label>
							<div class='controls'>
							
							<input type='text' onkeypress=\"return isNumberKey(event)\" name=kontakkar class='span6 typeahead field required' id='typeahead' title='field ini harus di isi'>
							</div>
							
							
							
							<div class='form-actions'>
							<input type=submit class='btn btn-primary' name=SimpanSup value=Simpan />
													 <a href='index.php?halaman=data_kar' class='btn'>
   <span>Kembali </span>
   </a>
			
							 
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->";
	}
     echo " </form>";

?>