<a href='index.php?halaman=form_data_master&kode=lokasi_insert' class='btn btn-small btn-primary'>
   <i class="halflings-icon white plus"></i><span>Tambah Data</span>
   </a>
   <br/>
   <br/>
<div class='row-fluid sortable'>		
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon user'></i><span class='break'></span>Data Project</h2>
						<div class='box-icon'>
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<table class='table table-striped table-bordered bootstrap-datatable datatable'>
						  <thead>
							  <tr>
		  
          <th>Nama Lokasi</th>
          <th><center>Aksi</center></th>
							  </tr>
						  </thead>   
						  <tbody>
							<?php
		$qtmpil_project="select * from lokasi order by lokasi_id asc";						
		$qp_prj=mysql_query($qtmpil_project) or die('Gagal');
		while($row2=mysql_fetch_array($qp_prj)){ ?>
		
          <td><?php echo "$row2[lokasi]"; ?></td>
          
          <td><center><?php 
			 
			 echo "<a class='btn btn-mini btn-danger' href='proses.php?proses=lokasi_delete&id=$row2[lokasi]'>"; ?>
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