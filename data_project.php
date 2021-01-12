<a href='index.php?halaman=form_data_master&kode=project_insert' class='btn btn-small btn-primary'>
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
		  <th>Kode Project</th>
          <th>Nama Project</th>
          <th>Perusahaan</th>
          <th>Alamat</th>
          <th><center>Aksi</center></th>
							  </tr>
						  </thead>   
						  <tbody>
							<?php
		$qtmpil_project="select * from project order by project_id asc";						
		$qp_prj=mysql_query($qtmpil_project) or die('Gagal');
		while($row2=mysql_fetch_array($qp_prj)){ ?>
		  <tr><td><?php echo "$row2[project_id]"; ?></td>
          <td><?php echo "$row2[project_nama]"; ?></td>
          <td><?php echo "$row2[perusahaan]"; ?></td>
          <td><?php echo "$row2[alamat]"; ?></td>
          
          <td><center><?php echo "<a class='btn btn-mini btn-primary' href=index.php?halaman=form_ubah_data&kode=project_update&id=$row2[project_id]>"; ?>
          	 <i class='halflings-icon white edit'></i>
			 <?php echo "</a> ";
			 
			 echo "<a class='btn btn-mini btn-danger' href='proses.php?proses=project_delete&id=$row2[project_id]'>"; ?>
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