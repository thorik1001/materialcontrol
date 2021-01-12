<?php
require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";
$proses=$_POST['proses'];
if (isset($_GET['proses'])) {
	$hapus=$_GET['proses'];
}
$url="";
//fungsi insert
	function insert($nama_tabel,$values)
	{
		$sql="INSERT INTO ".$nama_tabel." VALUES(".$values.")";
		mysql_query($sql)or die(mysql_error());	
	}
//fungsi update
	function update($nama_tabel,$values,$kondisi)
	{
		$sql="UPDATE ".$nama_tabel." SET ".$values." WHERE ".$kondisi;
		mysql_query($sql);
	}
//fungsi delete
	function delete($nama_tabel,$kondisi)
	{
		$sql="DELETE FROM ".$nama_tabel." WHERE ".$kondisi;		
		mysql_query($sql);
	}
//pilih fungsi
	switch($proses){
		//pemilihan fungsi insert
		case "akun_insert":
		{	$username=anti_injection(md5($_POST["username"]));
			$password=anti_injection(md5($_POST["password"]));
			$nama=anti_injection($_POST["nama"]);
			$level=anti_injection($_POST["level"]);

			$nama_tabel="account";
			$values="'$username', '$password', '$nama', '$level'";
			$hal="data_akun";
			insert($nama_tabel,$values);
			break;
		}
		case "lokasi_insert":
		{	$lokasi=anti_injection($_POST["lokasi"]);
			$nama_tabel="lokasi";
			$values="'', '$lokasi'";
			$hal="data_lokasi";
			insert($nama_tabel,$values);
			break;
		}
		case "project_insert":
		{			$project_id = anti_injection($_POST['project_id']);
					$project_nama=anti_injection($_POST['project_nama']);
					$perusahaan=anti_injection($_POST["perusahaan"]);
					$alamat=anti_injection($_POST["alamat"]);
						$nama_tabel="project";
						$values="'$project_id','$project_nama', '$perusahaan', '$alamat'";
						insert($nama_tabel,$values);
						$hal="data_project";
			
				break;
		}
		case "unit_insert":
		{	$nama_unit=anti_injection($_POST["unit"]);
			$nama_tabel="unit";
			$values="'', '$nama_unit'";
			$hal="data_unit";
			insert($nama_tabel,$values);
			break;
		}
		case "kategori_insert":
		{	$nama_kategori=anti_injection($_POST["kategori"]);
			$nama_tabel="kategori";
			$values="'', '$nama_kategori'";
			$hal="data_kategori";
			insert($nama_tabel,$values);
			break;
		}
		case "barang_insert":
			{
				$cek=mysql_num_rows(mysql_query("SELECT item FROM barang WHERE item ='$_POST[item]'"));
				// Kalau data sudah ada
				if ($cek > 0){
 				$hal="form_data_master&kode=barang_insert&id=duplikat&data=$_POST[item]";	
				}

				else {
					$barangKode=str_ireplace(" ","_",$barangKode);
					$barangKode=anti_injection($_POST['kode']);
					$item=anti_injection($_POST["item"]);
					$lokasi = anti_injection($_POST['lokasi']);
					$unit=anti_injection($_POST["unit"]);
					$kategori=anti_injection($_POST["kategori"]);
					$supplier=anti_injection($_POST["supplier"]);
					$hn=anti_injection($_POST["hn"]);
					$keterangan=anti_injection($_POST["keterangan"]);
					
						$nama_tabel="barang";
						$values="'$_POST[inc]', '$barangKode', '$item', '$lokasi', '$unit', '$kategori', '$supplier', '$hn','$keterangan'";
						insert($nama_tabel,$values);
						$hal="data_barang";
					}			
			
				break;
			}
			case "panen_insert":
			{

				$cek=mysql_num_rows(mysql_query("SELECT panen_nama FROM panen WHERE panen_nama='$_POST[nmpanen]'"));
				// Kalau data sudah ada
				if ($cek > 0){
 				$hal="form_data_master&kode=panen_insert&id=duplikat&data=$_POST[nmpanen]";	
				}

				else {
					$panenKode=str_ireplace(" ","_",$panenKode);
					$lokasi = anti_injection($_POST['lokasi']);
					$panenKode=anti_injection($_POST['panen_Kode']);
					$nmpanen=anti_injection($_POST["nmpanen"]);
					$kategori=anti_injection($_POST["kategori"]);
					$unit=anti_injection($_POST["unit"]);
					$harga_beli=anti_injection($_POST["harga_beli"]);
					$harga_jual=anti_injection($_POST["harga_jual"]);
						
						$nama_tabel="panen";
						$values="'$_POST[inc]', '$lokasi', '$panenKode', '$nmpanen', '$unit', '$kategori', '$harga_beli', '$harga_jual'";
						insert($nama_tabel,$values);
						$hal="data_panen";
					}			
			
				break;
			}
		case "supplier_insert":
			{	
				$cek=mysql_num_rows(mysql_query("SELECT supplier_nama FROM supplier WHERE supplier_nama='$_POST[nmSupplier]'"));
				// Kalau data sudah ada
				if ($cek > 0){
 				$hal="form_data_master&kode=supplier_insert&id=duplikat&data=$_POST[nmSupplier]";	
				}

				else {

				$supID=str_ireplace(" ",_,$_POST['supplier_id']);
				$nmSupplier=anti_injection($_POST["nmSupplier"]);
				$alamatSup=anti_injection($_POST["alamatSup"]);
				$kotaSup=anti_injection($_POST["kotaSup"]);
				$emailSup=anti_injection($_POST["emailSup"]);
				$kontakSup=anti_injection($_POST["kontakSup"]);
				$keterangan=anti_injection($_POST["keterangan"]);
				
				$nama_tabel="supplier";
				$values="'$_POST[supplier_inc]', '$supID', '$nmSupplier','$alamatSup', '$kotaSup', '$emailSup', '$kontakSup', '$keterangan'";
				$hal="data_supplier";
				insert($nama_tabel,$values);
			}
				break;
			}
		case "item_insert":
			{	
				$cek=mysql_num_rows(mysql_query("SELECT inc FROM tblpritem WHERE inc='$_POST[inc]'"));
				// Kalau data sudah ada
				if ($cek > 0){
 				$hal="form_data_master&kode=item_insert&id=duplikat&data=$_POST[inc]";	
				}
				else {
				$inc=anti_injection($_POST["inc"]);
				$nopr=anti_injection($_POST["nopr"]);
			
				$item=anti_injection($_POST["item"]);
				$qty=anti_injection($_POST["qty"]);
				$unit=anti_injection($_POST["unit"]);
				$harga=anti_injection($_POST["harga"]);
				$jumlahharga=anti_injection($_POST["jumlahharga"]);
				$kategori=anti_injection($_POST["kategori"]);
				$supplier=anti_injection($_POST["supplier"]);
				$keterangan=anti_injection($_POST["keterangan"]);
								
				$nama_tabel="tblpritem";
				$values="'$_POST[inc]','$nopr','$item','$qty', '$unit', '$harga', '$jumlahharga', '$kategori', '$supplier', '$keterangan'";
				$hal="form_data_master&kode=pr_insert";
				insert($nama_tabel,$values);
			}
				break;
			}
			case "pr_insert":
			{	//hapus data temp_beli_detil
				mysql_query("TRUNCATE TABLE `tblpritem`;");
				$cek=mysql_num_rows(mysql_query("SELECT nopr FROM tblpr WHERE nopr='$_POST[nopr]'"));
				// Kalau data sudah ada
				if ($cek > 0){
 				$hal="form_data_master&kode=pr_insert&id=duplikat&data=$_POST[nopr]";	
				}
				else {
					
				$inc=anti_injection($_POST["inc"]);
				$nopr=anti_injection($_POST["nopr"]);
				$noproject=anti_injection($_POST["noproject"]);
				$namaproject=anti_injection($_POST["namaproject"]);
				$perusahaan=anti_injection($_POST["perusahaan"]);
				$tgldokumen=anti_injection($_POST["tgldokumen"]);
				$tgldipakai=anti_injection($_POST["tgldipakai"]);
				$totalrupiah=anti_injection($_POST["totalrupiah"]);
				$setuju=anti_injection($_POST["setuju"]);
				$item=anti_injection($_POST["item"]);
				$qty=anti_injection($_POST["qty"]);
				$unit=anti_injection($_POST["unit"]);
				$harga=anti_injection($_POST["harga"]);
				$jumlahharga=anti_injection($_POST["jumlahharga"]);
				$kategori=anti_injection($_POST["kategori"]);
				$supplier=anti_injection($_POST["supplier"]);
				$keterangan=anti_injection($_POST["keterangan"]);
				
				$nama_tabel="tblpr";
				$nama_tabel1="tblpritem";
				$values="'$_POST[inc]', '$nopr','$noproject','$namaproject', '$perusahaan', '$tgldokumen', '$tgldipakai', '$totalrupiah', '$setuju', '$item', '$qty', '$unit', '$harga', '$jumlahharga', '$kategori', '$supplier', '$keterangan'";
				$hal="tblpr";
				insert($nama_tabel,$values);
							
			}
			
			//$hal="inc&id=$_POST[inc]";
				break;
			}
		//insert beli
		case "beli_insert":
		{
			//menjumlahkan semua harga_total dari temp_beli_detail
			$sum="SELECT SUM(harga_total) AS total FROM temp_beli_detail WHERE beli_id='$_POST[beli_id]'";
			$qsum=mysql_query($sum);
			$dsum=mysql_fetch_array($qsum);
			//insert ke tabel beli
			$beli="INSERT INTO beli(inc, beli_id, tgl_trans, supplier_id, total)
			VALUES('$_POST[inc]', '$_POST[beli_id]','$_POST[tgl_trans]', '$_POST[pilih_supplier]', '$dsum[total]')";
			mysql_query($beli);
			
			//ambil data dari temp_beli_detail
			$tmp="SELECT * FROM temp_beli_detail WHERE beli_id='$_POST[beli_id]'";
			$qtmp=mysql_query($tmp);
			while($dtmp=mysql_fetch_array($qtmp))
			{
				//insert ke tabel beli_detail
				$beli_detail="INSERT INTO beli_detail(beli_id, barang_id, qty, harga_satuan, harga_total)
				VALUES('$dtmp[beli_id]', '$dtmp[barang_id]','$dtmp[qty]','$dtmp[harga_satuan]', '$dtmp[harga_total]')";
				mysql_query($beli_detail);

				$b=mysql_fetch_array(mysql_query("SELECT * FROM barang WHERE barang_id='$dtmp[barang_id]'"));

				//proses cek stok
				$cek="SELECT * FROM stok WHERE barang_id='$dtmp[barang_id]'";
				$qcek=mysql_query($cek);
				$dcek=mysql_fetch_array($qcek);
				$nbaris=mysql_num_rows($qcek);
				if ($nbaris==0)
				{
					//insert data
					$stok="INSERT INTO stok(barang_id, barang_nama, qty)
					VALUES('$dtmp[barang_id]', '$b[barang_nama]', '$dtmp[qty]')";
					mysql_query($stok);
				}
				else
				{
					if ($dcek['barang_id']==$dtmp['barang_id'])
					{
						//update qty stok barang
						$qty=$dcek['qty']+$dtmp['qty'];
						$upstok="UPDATE stok SET qty='$qty' WHERE barang_id='$dtmp[barang_id]'";
						mysql_query($upstok);
					}
					else
					{
						//insert data
					$stok="INSERT INTO stok(barang_id, barang_nama, qty)
					VALUES('$dtmp[barang_id]', '$b[barang_nama]', '$dtmp[qty]')";
					mysql_query($stok);
					}
				}
			}	
			//hapus data temp_beli_detil
			mysql_query("DELETE FROM temp_beli_detail WHERE beli_id='$_POST[beli_id]'");
			$hal="beli_detail&id=$_POST[beli_id]";
			break;
		}
		case "hasil_insert":
		{
			//menjumlahkan semua harga_total dari temp_hasil_detail
			$sum="SELECT SUM(harga_total) AS total FROM temp_hasil_detail WHERE hasil_id='$_POST[hasil_id]'";
			$qsum=mysql_query($sum);
			$dsum=mysql_fetch_array($qsum);
			//insert ke tabel hasil
			$beli="INSERT INTO hasil(inc, hasil_id, tgl_trans, kar_id, total)
			VALUES('$_POST[inc]', '$_POST[hasil_id]','$_POST[tgl_trans]', '$_POST[pilih_karyawan]', '$dsum[total]')";
			mysql_query($beli);
			
			//ambil data dari temp_hasil_detail
			$tmp="SELECT * FROM temp_hasil_detail WHERE hasil_id='$_POST[hasil_id]'";
			$qtmp=mysql_query($tmp);
			while($dtmp=mysql_fetch_array($qtmp))
			{
				//insert ke tabel hasil_detail
				$beli_detail="INSERT INTO hasil_detail(hasil_id, panen_id, qty, harga_satuan, harga_total)
				VALUES('$dtmp[hasil_id]', '$dtmp[panen_id]','$dtmp[qty]','$dtmp[harga_satuan]', '$dtmp[harga_total]')";
				mysql_query($beli_detail);

				$b=mysql_fetch_array(mysql_query("SELECT * FROM panen WHERE panen_id='$dtmp[panen_id]'"));

				//proses cek stok2
				$cek="SELECT * FROM stok2 WHERE panen_id='$dtmp[panen_id]'";
				$qcek=mysql_query($cek);
				$dcek=mysql_fetch_array($qcek);
				$nbaris=mysql_num_rows($qcek);
				if ($nbaris==0)
				{
					//insert data
					$stok="INSERT INTO stok2(panen_id, panen_nama, qty)
					VALUES('$dtmp[panen_id]', '$b[panen_nama]', '$dtmp[qty]')";
					mysql_query($stok);
				}
				else
				{
					if ($dcek['panen_id']==$dtmp['panen_id'])
					{
						//update qty stok barang
						$qty=$dcek['qty']+$dtmp['qty'];
						$upstok="UPDATE stok2 SET qty='$qty' WHERE panen_id='$dtmp[panen_id]'";
						mysql_query($upstok);
					}
					else
					{
						//insert data
					$stok="INSERT INTO stok2(panen_id, panen_nama, qty)
					VALUES('$dtmp[panen_id]', '$b[panen_nama]', '$dtmp[qty]')";
					mysql_query($stok);
					}
				}
			}	
			//hapus data temp_hasil_detil
			mysql_query("DELETE FROM temp_hasil_detail WHERE hasil_id='$_POST[hasil_id]'");
			$hal="hasil_detail&id=$_POST[hasil_id]";
			break;
		}
		case "jual_insert":
		{
			//insert ke tabel jual
			$total=anti_injection($_POST["total"]);
			$biaya_kirim=anti_injection($_POST["biaya_kirim"]);
			
			mysql_query("INSERT INTO jual(inc, jual_id, tgl_jual, kar_id, total, biaya_kirim)
			VALUES('$_POST[inc]','$_POST[jual_id]', '$_POST[tgl_jual]','$_POST[kar_nama]', '$total','$biaya_kirim')");
			
			//select temp_jual_detail
			$tmp="SELECT * FROM temp_jual_detail";
			$qtmp=mysql_query($tmp);
			while($dtmp=mysql_fetch_array($qtmp))
			{
				
				mysql_query("INSERT INTO jual_detail(jual_id, barang_id,qty)
				VALUES('$_POST[jual_id]', '$dtmp[barang_id]','$dtmp[qty]')");
			}
			
			//hapus data temp_jual_detail
			mysql_query("DELETE FROM temp_jual_detail WHERE jual_id='$_POST[jual_id]'");
			//halaman
			$hal="jual_detail&id=$_POST[jual_id]";
			break;
		}
		
		case "keluar_insert":
		{
			//insert ke tabel keluar
			$total=anti_injection($_POST["total"]);
			$biaya_kirim=anti_injection($_POST["biaya_kirim"]);
			
			mysql_query("INSERT INTO keluar(inc, keluar_id, tgl_keluar, pelanggan_id, kar_id, spb, nopol, total, biaya_kirim)
			VALUES('$_POST[inc]','$_POST[keluar_id]', '$_POST[tgl_keluar]','$_POST[pelanggan_nama]', '$_POST[kar_nama]', '$_POST[spb]','$_POST[nopol]','$total','$biaya_kirim')");
			
			//select temp_jual_detail
			$tmp="SELECT * FROM temp_keluar_detail";
			$qtmp=mysql_query($tmp);
			while($dtmp=mysql_fetch_array($qtmp))
			{
				
				mysql_query("INSERT INTO keluar_detail(keluar_id, panen_id,bruto,tarra,qty,harga_satuan, harga_total)
				VALUES('$_POST[keluar_id]', '$dtmp[panen_id]','$dtmp[bruto]','$dtmp[tarra]','$dtmp[qty]','$dtmp[harga_satuan]', '$dtmp[harga_total]')");
			}
			
			//hapus data temp_jual_detail
			mysql_query("DELETE FROM temp_keluar_detail WHERE keluar_id='$_POST[keluar_id]'");
			//halaman
			$hal="keluar_detail&id=$_POST[keluar_id]";
			break;
		}
		
		case "lokasi_update":
			{
				$lokasi=anti_injection($_POST["nama_lokasi"]);
				$id = anti_injection($_POST["id"]);
				$values="lokasi='$lokasi'";
				$kondisi="lokasi_id='$id'";
				$hal="data_lokasi";
				update($nama_tabel,$values,$kondisi);

				$sql="UPDATE lokasi SET lokasi='$lokasi' WHERE lokasi_id='$id'";
			mysql_query($sql);
				break;
			}
			
		//pemilihan fungsi update
		case "barang_update":
			{	
			$cek=mysql_num_rows(mysql_query("SELECT item FROM barang WHERE item ='$_POST[item]'"));
			$item=anti_injection($_POST["item"]);
			$lokasi=anti_injection($_POST["lokasi"]);
			$unit=anti_injection($_POST["unit"]);
			$kategori=anti_injection($_POST["kategori"]);
			//$harga_beli=anti_injection($_POST["harga_beli"]);
			$nama_tabel="barang";
			$values="barang_id='$_POST[kode]', item='$item', kategori_id='$kategori', harga_beli='$harga_beli', unit_id='$unit',  lokasi_id='$lokasi'";
			$kondisi="inc='$_POST[inc]'";
			$hal="data_barang";
			update($nama_tabel,$values,$kondisi);

			$sql="UPDATE barang SET item='$item', lokasi_id='$lokasi', supplier_nama='$supplier', kategori_id='$kategori', unit_id='$lokasi WHERE inc='$_POST[inc]'";
		mysql_query($sql);


				break;
	} 

		//<!--
		//case "barang_update":
			//{
//
			//	$cek=mysql_num_rows(mysql_query("SELECT barang_nama FROM barang WHERE barang_nama='$_POST[item]'"));
				// Kalau data sudah ada
				//	$barangKode=anti_injection($_POST['Barang_Kode']);
				//	$item=anti_injection($_POST["item"]);
				//	$lokasi = anti_injection($_POST['lokasi']);
				//	$unit=anti_injection($_POST["unit"]);
				//	$kategori=anti_injection($_POST["kategori"]);
				//	$harga_beli=anti_injection($_POST["harga_beli"]);
				//	$harga_jual=anti_injection($_POST["harga_jual"]);
					//$diskon=anti_injection($_POST["diskon"]);
					//$foto=$_FILES['gambar']['name'];
					//$tmp=$_FILES['gambar']['tmp_name'];
					//$path= "gambar/".$foto;
						//$nama_tabel="barang";
						//$values="Barang_Kode='$barangKode', barang_nama='$item', lokasi='$lokasi', unit='$unit', kategori='$kategori', harga_beli='$harga_beli', harga_jual='$harga_jual', diskon='$diskon', gambar=$foto";
						//$kondisi="inc='$_POST[inc]'";
					//$hal="data_barang";
					//	update($nama_tabel,$values,$kondisi);
			
			//	break;
		//	}-->
	case "panen_update":
			{	
				$cek=mysql_num_rows(mysql_query("SELECT panen_nama FROM panen WHERE panen_nama='$_POST[nmpanen]'"));
			$nmpanen=anti_injection($_POST["nmpanen"]);
			$lokasi=anti_injection($_POST["lokasi"]);
			$unit=anti_injection($_POST["nama_unit"]);
				$kategori=anti_injection($_POST["nama_kategori"]);
				$harga_beli=anti_injection($_POST["harga_beli"]);
				$harga_jual=anti_injection($_POST["harga_jual"]);
				$nama_tabel="panen";
				$values="panen_id='$_POST[panen_Kode]', panen_nama='$nmpanen', kategori_id='$kategori', harga_beli='$harga_beli', harga_jual='$harga_jual', unit_id='$unit',  lokasi_id='$lokasi'";
				$kondisi="inc='$_POST[inc]'";
				$hal="data_panen";
				update($nama_tabel,$values,$kondisi);

				$sql="UPDATE panen SET panen_nama='$nmpanen', harga_beli='$harga_beli', harga_jual='$harga_jual', diskon='$diskon', lokasi_id='$lokasi' WHERE inc='$_POST[inc]'";
		mysql_query($sql);


				break;
	} 
			case "supplier_update":
			{	
				$cek=mysql_num_rows(mysql_query("SELECT supplier_nama FROM supplier WHERE supplier_nama='$_POST[nmSupplier]'"));
				// Kalau data sudah ada
				
				$nama_tabel="supplier";
				$nmSupplier=anti_injection($_POST["nmSupplier"]);
				$alamatSup=anti_injection($_POST["alamatSup"]);
				$kotaSup=anti_injection($_POST["kotaSup"]);
				$emailSup=anti_injection($_POST["emailSup"]);
				$kontakSup=anti_injection($_POST["kontakSup"]);
				$keterangan=anti_injection($_POST["keterangan"]);
				
				$values="supplier_nama='$nmSupplier', supplier_alamat='$alamatSup', 
				supplier_kota='$kotaSup', supplier_email='$emailSup', supplier_kontak='$kontakSup', keterangan='$keterangan'";
				$kondisi="supplier_id='$_POST[supplier_id]'";
				$hal="data_supplier";
				update($nama_tabel,$values,$kondisi);
				break;
			}
	case "pelanggan_update":
			{	
				$cek=mysql_num_rows(mysql_query("SELECT pelanggan_nama FROM pelanggan WHERE pelanggan_nama='$_POST[nmPelanggan]'"));
				// Kalau data sudah ada
				$nmPelanggan=anti_injection($_POST["nmPelanggan"]);
				$alamatPel=anti_injection($_POST["alamatPel"]);
				$kotaPel=anti_injection($_POST["kotaPel"]);
				$emailPel=anti_injection($_POST["emailPel"]);
				$kontakPel=anti_injection($_POST["kontakPel"]);
				$nama_tabel="pelanggan";
				$values="pelanggan_nama='$nmPelanggan', pelanggan_alamat='$alamatPel', 
				pelanggan_kota='$kotaPel', pelanggan_email='$emailPel', pelanggan_kontak='$kontakPel'";
				$kondisi="pelanggan_id='$_POST[pelanggan_id]'";
				$hal="data_pelanggan";
				update($nama_tabel,$values,$kondisi);
			
				break;
			}
	case "kar_update":
			{	
				$cek=mysql_num_rows(mysql_query("SELECT kar_nama FROM karyawan WHERE kar_nama='$_POST[nmkar]'"));
				// Kalau data sudah ada
				$nmkar=anti_injection($_POST["nmkar"]);
				$alamatkar=anti_injection($_POST["alamatkar"]);
				$kotakar=anti_injection($_POST["kotakar"]);
				$emailkar=anti_injection($_POST["emailkar"]);
				$kontakkar=anti_injection($_POST["kontakkar"]);
				$nama_tabel="karyawan";
				$values="kar_nama='$nmkar', kar_alamat='$alamatkar', 
				kar_kota='$kotakar', kar_email='$emailkar', kar_kontak='$kontakkar'";
				$kondisi="kar_id='$_POST[kar_id]'";
				$hal="data_kar";
				update($nama_tabel,$values,$kondisi);
			
				break;
			}		
			case "project_update":
			{	
				$cek=mysql_num_rows(mysql_query("SELECT project_id FROM project WHERE project_id ='$_POST[project_id]'"));
				// Kalau data sudah ada
				
				$nama_tabel="project";
				$project_id=anti_injection($_POST["project_id"]);
				$project_nama=anti_injection($_POST["project_nama"]);
				$perusahaan=anti_injection($_POST["perusahaan"]);
				$alamat=anti_injection($_POST["alamat"]);
				$values="project_id='$project_id', project_nama='$project_nama', 
				perusahaan='$perusahaan', alamat='$alamat'";
				$kondisi="project_id='$_POST[project_id]'";
				$hal="data_project";
				update($nama_tabel,$values, $kondisi);
				break;
			}
			
			case "kategori_update":
			{
				$kategori=anti_injection($_POST["nama_kategori"]);
				$id = anti_injection($_POST["id"]);
				$values="nama_kategori='$kategori'";
				$kondisi="kategori_id='$id'";
				$hal="data_kategori";
				update($nama_tabel,$values,$kondisi);

				$sql="UPDATE kategori SET kategori='$kategori' WHERE kategori_id='$id'";
			mysql_query($sql);


				break;
			}
			case "unit_update":
			{
				$unit=anti_injection($_POST["nama_unit"]);
				$id = anti_injection($_POST["id"]);
				$values="nama_unit='$unit'";
				$kondisi="unit_id='$id'";
				$hal="data_unit";
				update($nama_tabel,$values,$kondisi);

				$sql="UPDATE unit SET unit='$unit' WHERE unit_id='$id'";
			mysql_query($sql);


				break;
			}	
	
	
		case "ubah_stok":
		{		$qty=anti_injection($_POST["qty"]);
				$sql="UPDATE stok SET qty='$qty' WHERE barang_id='$_POST[barang_id]'";
				mysql_query($sql);
				$hal="stok";
				break;
		}
		case "ubah_stok2":
		{		$qty=anti_injection($_POST["qty"]);
				$sql="UPDATE stok2 SET qty='$qty' WHERE panen_id='$_POST[panen_id]'";
				mysql_query($sql);
				$hal="stok2";
				break;
		}

		case "identitas_update":
		{		$nama_identitas=anti_injection($_POST["nama_identitas"]);
				$alamat=anti_injection($_POST["alamat"]);
				$telp=anti_injection($_POST["telp"]);
				$keterangan=anti_injection($_POST["keterangan"]);
				$sql="UPDATE identitas SET nama_identitas='$nama_identitas',alamat='$alamat',telp='$telp',keterangan='$keterangan' WHERE id_identitas='1'";
				mysql_query($sql);
				$hal="form_ubah_data&kode=identitas_update";
				break;
		}
		case "ubah_akun":
		{	$nama=anti_injection($_POST["nama"]);
			$sql="UPDATE account SET password='$nama', nama='$nama', level='$_POST[level]' WHERE username='$_POST[username]'";
			mysql_query($sql);
			$hal="data_akun";
			break;
		}
	}//end switch
	
switch($hapus){
	//pemilihan fungsi delete
	case "barang_delete":
			{
				$nama_tabel="barang";
				$kondisi="inc='$_GET[id]'";
				$hal="data_barang";
				delete($nama_tabel,$kondisi);
				break;
			}
	case "panen_delete":
			{
				$nama_tabel="panen";
				$kondisi="inc='$_GET[id]'";
				$hal="data_panen";
				delete($nama_tabel,$kondisi);
				break;
			}
	case "project_delete":
			{
				$nama_tabel="project";
				$kondisi="project_id='$_GET[id]'";
				$hal="data_project";
				delete($nama_tabel,$kondisi);
				break;
			}
	case "kategori_delete":
			{
				$nama_tabel="kategori";
				$kondisi="kategori_id='$_GET[id]'";
				$hal="data_kategori";
				delete($nama_tabel,$kondisi);
				break;
			}
	case "unit_delete":
			{
				$nama_tabel="unit";
				$kondisi="unit_id='$_GET[id]'";
				$hal="data_unit";
				delete($nama_tabel,$kondisi);
				break;
			}
	case "supplier_delete":
			{
				$nama_tabel="supplier";
				$kondisi="supplier_id='$_GET[id]'";
				$hal="data_supplier";
				delete($nama_tabel,$kondisi);
				break;
			}
	case "lokasi_delete":
			{
				$nama_tabel="lokasi";
				$kondisi="lokasi='$_GET[id]'";
				$hal="data_lokasi";
				delete($nama_tabel,$kondisi);
				break;
			}		
	case "pr_delete":
			{
				$nama_tabel="tblpr";
				$kondisi="nopr='$_GET[id]'";
				$hal="tblpr";
				delete($nama_tabel,$kondisi);
				break;
			}
	case "item_delete":
			{
				$nama_tabel="tblpritem";
				$kondisi="inc='$_GET[id]'";
				$hal="form_data_master&kode=pr_insert";
				delete($nama_tabel,$kondisi);
				break;
			}		
	case "kar_delete":
			{
				$nama_tabel="karyawan";
				$kondisi="kar_id='$_GET[id]'";
				$hal="data_kar";
				delete($nama_tabel,$kondisi);
				break;
			}		
	case "hapus_item_beli":
	{
		if ($_GET['status']=="satu"){
			$pesan="DELETE FROM temp_beli_detail WHERE barang_id='$_GET[id]'";
			mysql_query($pesan);
		}else{
			$pesan="DELETE FROM temp_beli_detail WHERE beli_id='$_GET[id]'";
			mysql_query($pesan);
		}
		$url="transaksi";
		$hal="form_beli.php";
		break;
	}
case "hapus_item_hasil":
	{
		if ($_GET['status']=="satu"){
			$pesan="DELETE FROM temp_hasil_detail WHERE panen_id='$_GET[id]'";
			mysql_query($pesan);
		}else{
			$pesan="DELETE FROM temp_hasil_detail WHERE hasil_id='$_GET[id]'";
			mysql_query($pesan);
		}
		$url="transaksi";
		$hal="form_hasil.php";
		break;
	}
	case "hapus_item_jual":
	{
		//select stok
		$stok="SELECT * FROM stok WHERE barang_id='$_GET[id]'";
		$qstok=mysql_query($stok);
		$dstok=mysql_fetch_array($qstok);
		//select temp_jual_detail
		$jual="SELECT * FROM temp_jual_detail WHERE barang_id='$_GET[id]'";
		$qjual=mysql_query($jual);
		$djual=mysql_fetch_array($qjual);
		//hasil stok sekarang
		$qty=$dstok['qty']+$djual['qty'];
		//update stok
		$upstok="UPDATE stok SET qty='$qty' WHERE barang_id='$_GET[id]'";
		mysql_query($upstok);
		//hapus barang dari temp_jual_detail
		$hapus="DELETE FROM temp_jual_detail WHERE barang_id='$_GET[id]'";
		mysql_query($hapus);
		$url="transaksi";
		$hal="form_jual.php";
		break;
	}
	case "hapus_item_keluar":
	{
		//select stok
		$stok="SELECT * FROM stok2 WHERE panen_id='$_GET[id]'";
		$qstok=mysql_query($stok);
		$dstok=mysql_fetch_array($qstok);
		//select temp_jual_detail
		$jual="SELECT * FROM temp_keluar_detail WHERE panen_id='$_GET[id]'";
		$qjual=mysql_query($jual);
		$djual=mysql_fetch_array($qjual);
		//hasil stok sekarang
		$qty=$dstok['qty']+$djual['qty'];
		//update stok
		$upstok="UPDATE stok2 SET qty='$qty' WHERE panen_id='$_GET[id]'";
		mysql_query($upstok);
		//hapus barang dari temp_jual_detail
		$hapus="DELETE FROM temp_keluar_detail WHERE panen_id='$_GET[id]'";
		mysql_query($hapus);
		$url="transaksi";
		$hal="form_keluar.php";
		break;
	}
	case "hapus_stok":
	{
		$sql="DELETE FROM stok WHERE barang_id='$_GET[id]'";
		mysql_query($sql);
		$hal="stok";
		break;
	}
	case "hapus_stok2":
	{
		$sql="DELETE FROM stok2 WHERE panen_id='$_GET[id]'";
		mysql_query($sql);
		$hal="stok2";
		break;
	}
	case "hapus_akun":
	{
		$sql="DELETE FROM account WHERE username='$_GET[id]'";
		mysql_query($sql);
		$hal="data_akun";
		break;
	}
}
	if ($url=="transaksi")
	{
		lompat_ke($hal);
	}
	else
	{
		lompat_ke("index.php?halaman=".$hal);
	}
?>