<?php  
// cek level user apakah admin atau bukan
if ($_SESSION['level'] == "admin")
{ 
?>

<div id="sidebar-left" class="span2">
<div class="nav-collapse sidebar-nav">
<ul class="nav nav-tabs nav-stacked main-menu">

<li><a href="index.php?halaman=home"><i class="icon-home"></i><span class="hidden-tablet"> Home</span></a></li>
<li><a href="index.php?halaman=form_ubah_data&kode=identitas_update"><i class="icon-user"></i><span class="hidden-tablet"> Identitas</span></a></li>

<li><a class="dropmenu" href="#"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Data Master</span><span class="label label-important"> ... </span></a>
 <ul>
	<li><a class="submenu" href="index.php?halaman=data_supplier"><i class="icon-file-alt"></i><span class="hidden-tablet"> Supplier </span></a></li>
	<li><a class="submenu" href="index.php?halaman=data_kategori"><i class="icon-file-alt"></i><span class="hidden-tablet"> Kategori </span></a></li>
	<li><a class="submenu" href="index.php?halaman=data_unit"><i class="icon-file-alt"></i><span class="hidden-tablet"> Unit </span></a></li>
	<li><a class="submenu" href="index.php?halaman=data_barang"><i class="icon-file-alt"></i><span class="hidden-tablet"> Material/Barang </span></a></li>
	<li><a class="submenu" href="index.php?halaman=data_lokasi"><i class="icon-file-alt"></i><span class="hidden-tablet"> Lokasi </span></a></li>
	<li><a class="submenu" href="index.php?halaman=data_project"><i class="icon-file-alt"></i><span class="hidden-tablet"> Project</span></a></li>
 </ul>	
</li>

<li><a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> Dept. Purchasing</span><span class="label label-important"> ... </span></a>
 <ul>
<li><a href="index.php?halaman=tblpr"><i class="icon-calendar"></i><span class="hidden-tablet"> Permintaan Pembelian</span></a></li>
<li><a href="#"><i class="icon-calendar"></i><span class="hidden-tablet"> History PR</span></a></li>
<li><a href="#"><i class="icon-calendar"></i><span class="hidden-tablet"> Laporan PR</span></a></li>


 </ul>	
</li>

<li><a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> Material Control</span><span class="label label-important"> ... </span></a>
 <ul> 
<li><a href="index.php?halaman=mir"><i class="icon-tasks"></i><span class="hidden-tablet"> Material Inspection</span></a></li>
<li><a href="index.php?halaman=in"><i class="icon-calendar"></i><span class="hidden-tablet"> Material In</span></a></li>
<li><a href="index.php?halaman=mutasi"><i class="icon-tasks"></i><span class="hidden-tablet"> Mutasi Mat'l</span></a></li>
<li><a href="index.php?halaman=stok"><i class="icon-tasks"></i><span class="hidden-tablet"> Stok Material</span></a></li>
<li><a href="index.php?halaman=stok"><i class="icon-tasks"></i><span class="hidden-tablet"> Status Material</span></a></li>
<li><a href="index.php?halaman=endprod"><i class="icon-tasks"></i><span class="hidden-tablet"> End Product</span></a></li>
<li><a href="index.php?halaman=delivery"><i class="icon-tasks"></i><span class="hidden-tablet"> Delivery</span></a></li>

 </ul>	
</li>


<li><a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> Blasting & Painting</span><span class="label label-important"> ... </span></a>
 <ul>
<li><a href="index.php?halaman=reqbp"><i class="icon-calendar"></i><span class="hidden-tablet"> Req. Material</span></a></li>
<li><a href="index.php?halaman=bpfinish"><i class="icon-calendar"></i><span class="hidden-tablet"> Material Finish</span></a></li>
 </ul>	
</li>

<li><a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> Workshop</span><span class="label label-important"> ... </span></a>
 <ul>
<li><a href="index.php?halaman=reqw"><i class="icon-calendar"></i><span class="hidden-tablet"> Req. Material</span></a></li>
<li><a href="index.php?halaman=wfinish"><i class="icon-calendar"></i><span class="hidden-tablet"> Material Finish</span></a></li>
 </ul>	
</li>


<li><a class='dropmenu' href='#'><i class='icon-file'></i><span class='hidden-tablet'> Laporan Material</span><span class='label label-important'> ... </span></a>
 <ul>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Pemakaian </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Fabrikasi </span></a></li>
 </ul>	
</li>
</li>
<li><a class='dropmenu' href='#'><i class='icon-file'></i><span class='hidden-tablet'> Dept. Warehouse</span><span class='label label-important'> ... </span></a>
 <ul>
	<li><a class='dropmenu' href='#'><i class='icon-file'></i><span class='hidden-tablet'> Tools</span><span class='label label-important'> ... </span></a>
	<ul>
	<li><a class='submenu' href='index.php?halaman=pembelian'><i class='icon-file-alt'></i><span class='hidden-tablet'> Pembelian </span></a></li>
	<li><a class='submenu' href='index.php?halaman=keluar'><i class='icon-file-alt'></i><span class='hidden-tablet'> Tools Keluar </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Tools Kembali </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Monitoring Tools </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Monitoring Surat Jalan </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Rekapitulasi Tools </span></a></li>
	</ul>
	<li><a class='dropmenu' href='#'><i class='icon-file'></i><span class='hidden-tablet'> Consumables</span><span class='label label-important'> ... </span></a>
	<ul>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Pembelian </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Cons. Keluar </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Cons. Kembali </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Monitoring Cons. </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Monitoring Surat Jalan </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Rekapitulasi Cons. </span></a></li>
	</ul>
	
 </ul>	
</li>

<li><a class='dropmenu' href='#'><i class='icon-file'></i><span class='hidden-tablet'> Dept. HRD</span><span class='label label-important'> ... </span></a>
 <ul>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Data Personal Manpower</span></a>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Data Project Manpower</span></a>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Laporan</span></a>
 </ul>	
</li>

<li><a href="index.php?halaman=data_akun"><i class="icon-user"></i><span class="hidden-tablet"> Data Akun</span></a></li>
<li><a href="logout.php"><i class="icon-off"></i><span class="hidden-tablet"> Logout</span></a></li>
				
</ul>
</div>
</div>



<?php
}
else if($_SESSION['level'] == "purchasing")
{
?>

<div id="sidebar-left" class="span2">
<div class="nav-collapse sidebar-nav">
<ul class="nav nav-tabs nav-stacked main-menu">

<li><a href="index.php?halaman=home"><i class="icon-home"></i><span class="hidden-tablet"> Home</span></a></li>
<!--<li><a href="index.php?halaman=form_ubah_data&kode=identitas_update"><i class="icon-user"></i><span class="hidden-tablet"> Identitas</span></a></li>-->

<li><a class="dropmenu" href="#"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Data Master</span><span class="label label-important"> ... </span></a>
 <ul>
	<li><a class="submenu" href="index.php?halaman=data_supplier"><i class="icon-file-alt"></i><span class="hidden-tablet"> Supplier </span></a></li>
	<li><a class="submenu" href="index.php?halaman=data_kategori"><i class="icon-file-alt"></i><span class="hidden-tablet"> Kategori </span></a></li>
	<li><a class="submenu" href="index.php?halaman=data_unit"><i class="icon-file-alt"></i><span class="hidden-tablet"> Unit </span></a></li>
	<li><a class="submenu" href="index.php?halaman=data_barang"><i class="icon-file-alt"></i><span class="hidden-tablet"> Material/Barang </span></a></li>
	<li><a class="submenu" href="index.php?halaman=data_lokasi"><i class="icon-file-alt"></i><span class="hidden-tablet"> Lokasi </span></a></li>
	<li><a class="submenu" href="index.php?halaman=data_project"><i class="icon-file-alt"></i><span class="hidden-tablet"> Project</span></a></li>
 </ul>	
</li>



<li><a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> Dept. Purchasing</span><span class="label label-important"> ... </span></a>
 <ul>
<li><a href="index.php?halaman=tblpr"><i class="icon-calendar"></i><span class="hidden-tablet"> Permintaan Pembelian</span></a></li>
<li><a href="#"><i class="icon-calendar"></i><span class="hidden-tablet"> History PR</span></a></li>
<li><a href="#"><i class="icon-calendar"></i><span class="hidden-tablet"> Laporan PR</span></a></li>

 </ul>	
</li>
<li><a href="index.php?halaman=data_akun"><i class="icon-user"></i><span class="hidden-tablet"> Data Akun</span></a></li>
<li><a href="logout.php"><i class="icon-off"></i><span class="hidden-tablet"> Logout</span></a></li>

					
</ul>
</div>
</div>


<?php
}
else if($_SESSION['level'] == "material control")
{
?>

<div id="sidebar-left" class="span2">
<div class="nav-collapse sidebar-nav">
<ul class="nav nav-tabs nav-stacked main-menu">

<li><a href="index.php?halaman=home"><i class="icon-home"></i><span class="hidden-tablet"> Home</span></a></li>
<!--<li><a href="index.php?halaman=form_ubah_data&kode=identitas_update"><i class="icon-user"></i><span class="hidden-tablet"> Identitas</span></a></li>-->

<li><a class="dropmenu" href="#"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Data Master</span><span class="label label-important"> ... </span></a>
 <ul>
	<li><a class="submenu" href="index.php?halaman=data_supplier"><i class="icon-file-alt"></i><span class="hidden-tablet"> Supplier </span></a></li>
	<li><a class="submenu" href="index.php?halaman=data_kategori"><i class="icon-file-alt"></i><span class="hidden-tablet"> Kategori </span></a></li>
	<li><a class="submenu" href="index.php?halaman=data_unit"><i class="icon-file-alt"></i><span class="hidden-tablet"> Unit </span></a></li>
	<li><a class="submenu" href="index.php?halaman=data_barang"><i class="icon-file-alt"></i><span class="hidden-tablet"> Material/Barang </span></a></li>
	<li><a class="submenu" href="index.php?halaman=data_lokasi"><i class="icon-file-alt"></i><span class="hidden-tablet"> Lokasi </span></a></li>
	<li><a class="submenu" href="index.php?halaman=data_project"><i class="icon-file-alt"></i><span class="hidden-tablet"> Project</span></a></li>
 </ul>	
</li>



<li><a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> Material Control</span><span class="label label-important"> ... </span></a>
 <ul> 
<li><a href="index.php?halaman=mir"><i class="icon-tasks"></i><span class="hidden-tablet"> Material Inspection</span></a></li>
<li><a href="index.php?halaman=in"><i class="icon-calendar"></i><span class="hidden-tablet"> Material In</span></a></li>
<li><a href="index.php?halaman=mutasi"><i class="icon-tasks"></i><span class="hidden-tablet"> Mutasi Mat'l</span></a></li>
<li><a href="index.php?halaman=stok"><i class="icon-tasks"></i><span class="hidden-tablet"> Stok Material</span></a></li>
<li><a href="index.php?halaman=stok"><i class="icon-tasks"></i><span class="hidden-tablet"> Status Material</span></a></li>
<li><a href="index.php?halaman=endprod"><i class="icon-tasks"></i><span class="hidden-tablet"> End Product</span></a></li>
<li><a href="index.php?halaman=delivery"><i class="icon-tasks"></i><span class="hidden-tablet"> Delivery</span></a></li>

 </ul>	
</li>
<!--
<li><a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> Blasting & Painting</span><span class="label label-important"> ... </span></a>
 <ul>
<li><a href="index.php?halaman=reqbp"><i class="icon-calendar"></i><span class="hidden-tablet"> Req. Material</span></a></li>
<li><a href="index.php?halaman=bpfinish"><i class="icon-calendar"></i><span class="hidden-tablet"> Material Finish</span></a></li>
 </ul>	
</li>

<li><a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> Workshop</span><span class="label label-important"> ... </span></a>
 <ul>
<li><a href="index.php?halaman=reqw"><i class="icon-calendar"></i><span class="hidden-tablet"> Req. Material</span></a></li>
<li><a href="index.php?halaman=wfinish"><i class="icon-calendar"></i><span class="hidden-tablet"> Material Finish</span></a></li>
 </ul>	
</li>

-->
<li><a class='dropmenu' href='#'><i class='icon-file'></i><span class='hidden-tablet'> Laporan Material</span><span class='label label-important'> ... </span></a>
 <ul>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Pemakaian </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Fabrikasi </span></a></li>
 </ul>	
</li>
</li>
<li><a href="index.php?halaman=endprod"><i class="icon-tasks"></i><span class="hidden-tablet"> End Product</span></a></li>
<li><a href="index.php?halaman=delivery"><i class="icon-tasks"></i><span class="hidden-tablet"> Delivery</span></a></li>
<!--
<li><a class='dropmenu' href='#'><i class='icon-file'></i><span class='hidden-tablet'> Gudang App</span><span class='label label-important'> ... </span></a>
 <ul>
	<li><a class='dropmenu' href='#'><i class='icon-file'></i><span class='hidden-tablet'> Tools</span><span class='label label-important'> ... </span></a>
	<ul>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Pembelian </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Tools Keluar </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Tools Kembali </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Monitoring Tools </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Monitoring Surat Jalan </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Rekapitulasi Tools </span></a></li>
	</ul>
	<li><a class='dropmenu' href='#'><i class='icon-file'></i><span class='hidden-tablet'> Consumables</span><span class='label label-important'> ... </span></a>
	<ul>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Pembelian </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Cons. Keluar </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Cons. Kembali </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Monitoring Cons. </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Monitoring Surat Jalan </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Rekapitulasi Cons. </span></a></li>
	</ul>
	
 </ul>	
</li>
<li><a href="index.php?halaman=data_akun"><i class="icon-user"></i><span class="hidden-tablet"> Data Akun</span></a></li>
-->
<li><a href="logout.php"><i class="icon-off"></i><span class="hidden-tablet"> Logout</span></a></li>

					
</ul>
</div>
</div>


<?php
}
else if($_SESSION['level'] == "gudang")
{
?>

<div id="sidebar-left" class="span2">
<div class="nav-collapse sidebar-nav">
<ul class="nav nav-tabs nav-stacked main-menu">

<li><a href="index.php?halaman=home"><i class="icon-home"></i><span class="hidden-tablet"> Home</span></a></li>
<!--<li><a href="index.php?halaman=form_ubah_data&kode=identitas_update"><i class="icon-user"></i><span class="hidden-tablet"> Identitas</span></a></li>-->

<li><a class="dropmenu" href="#"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Data Master</span><span class="label label-important"> ... </span></a>
 <ul>
	<li><a class="submenu" href="index.php?halaman=data_supplier"><i class="icon-file-alt"></i><span class="hidden-tablet"> Supplier </span></a></li>
	<li><a class="submenu" href="index.php?halaman=data_kategori"><i class="icon-file-alt"></i><span class="hidden-tablet"> Kategori </span></a></li>
	<li><a class="submenu" href="index.php?halaman=data_unit"><i class="icon-file-alt"></i><span class="hidden-tablet"> Unit </span></a></li>
	<li><a class="submenu" href="index.php?halaman=data_barang"><i class="icon-file-alt"></i><span class="hidden-tablet"> Material/Barang </span></a></li>
	<li><a class="submenu" href="index.php?halaman=data_lokasi"><i class="icon-file-alt"></i><span class="hidden-tablet"> Lokasi </span></a></li>
	<li><a class="submenu" href="index.php?halaman=data_project"><i class="icon-file-alt"></i><span class="hidden-tablet"> Project</span></a></li>
 </ul>	
</li>


<!--
<li><a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> Material Control</span><span class="label label-important"> ... </span></a>
 <ul>
<li><a href="index.php?halaman=po"><i class="icon-calendar"></i><span class="hidden-tablet"> Purchase Order</span></a></li>
<li><a href="index.php?halaman=in"><i class="icon-calendar"></i><span class="hidden-tablet"> Material In</span></a></li>
	<li><a href="index.php?halaman=mir"><i class="icon-tasks"></i><span class="hidden-tablet"> Material Inspection</span></a></li>
	<li><a href="index.php?halaman=mutasi"><i class="icon-tasks"></i><span class="hidden-tablet"> Mutasi Mat'l</span></a></li>
	<li><a href="index.php?halaman=stok"><i class="icon-tasks"></i><span class="hidden-tablet"> Stok Material</span></a></li>
 </ul>	
</li>

<li><a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> Blasting & Painting</span><span class="label label-important"> ... </span></a>
 <ul>
<li><a href="index.php?halaman=reqbp"><i class="icon-calendar"></i><span class="hidden-tablet"> Req. Material</span></a></li>
<li><a href="index.php?halaman=bpfinish"><i class="icon-calendar"></i><span class="hidden-tablet"> Material Finish</span></a></li>
 </ul>	
</li>

<li><a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> Workshop</span><span class="label label-important"> ... </span></a>
 <ul>
<li><a href="index.php?halaman=reqw"><i class="icon-calendar"></i><span class="hidden-tablet"> Req. Material</span></a></li>
<li><a href="index.php?halaman=wfinish"><i class="icon-calendar"></i><span class="hidden-tablet"> Material Finish</span></a></li>
 </ul>	
</li>


<li><a class='dropmenu' href='#'><i class='icon-file'></i><span class='hidden-tablet'> Laporan Material</span><span class='label label-important'> ... </span></a>
 <ul>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Pemakaian </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Fabrikasi </span></a></li>
 </ul>	
</li>
</li>
<li><a href="index.php?halaman=endprod"><i class="icon-tasks"></i><span class="hidden-tablet"> End Product</span></a></li>
<li><a href="index.php?halaman=delivery"><i class="icon-tasks"></i><span class="hidden-tablet"> Delivery</span></a></li>
-->
<li><a class='dropmenu' href='#'><i class='icon-file'></i><span class='hidden-tablet'> Gudang App</span><span class='label label-important'> ... </span></a>
 <ul>
	<li><a class='dropmenu' href='#'><i class='icon-file'></i><span class='hidden-tablet'> Tools</span><span class='label label-important'> ... </span></a>
	<ul>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Pembelian </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Tools Keluar </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Tools Kembali </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Monitoring Tools </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Monitoring Surat Jalan </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Rekapitulasi Tools </span></a></li>
	</ul>
	<li><a class='dropmenu' href='#'><i class='icon-file'></i><span class='hidden-tablet'> Consumables</span><span class='label label-important'> ... </span></a>
	<ul>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Pembelian </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Cons. Keluar </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Cons. Kembali </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Monitoring Cons. </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Monitoring Surat Jalan </span></a></li>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Rekapitulasi Cons. </span></a></li>
	</ul>
	
 </ul>	
</li>
<!--<li><a href="index.php?halaman=data_akun"><i class="icon-user"></i><span class="hidden-tablet"> Data Akun</span></a></li>-->

<li><a href="logout.php"><i class="icon-off"></i><span class="hidden-tablet"> Logout</span></a></li>

					
</ul>
</div>
</div>



<?php
}
else if($_SESSION['level'] == "hrd")
{
?>

<div id="sidebar-left" class="span2">
<div class="nav-collapse sidebar-nav">
<ul class="nav nav-tabs nav-stacked main-menu">

<li><a href="index.php?halaman=home"><i class="icon-home"></i><span class="hidden-tablet"> Home</span></a></li>
<!--<li><a href="index.php?halaman=form_ubah_data&kode=identitas_update"><i class="icon-user"></i><span class="hidden-tablet"> Identitas</span></a></li>-->



<li><a class='dropmenu' href='#'><i class='icon-file'></i><span class='hidden-tablet'> Dept. HRD</span><span class='label label-important'> ... </span></a>
 <ul>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Data Personal Manpower</span></a>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Data Project Manpower</span></a>
	<li><a class='submenu' href='#'><i class='icon-file-alt'></i><span class='hidden-tablet'> Laporan</span></a>
 </ul>	
</li>

<li><a href="logout.php"><i class="icon-off"></i><span class="hidden-tablet"> Logout</span></a></li>

</ul>
</div>
</div>
<?php
}
?>