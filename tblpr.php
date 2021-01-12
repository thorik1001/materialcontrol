
<a href='index.php?halaman=form_data_master&kode=pr_insert' class='btn btn-small btn-primary'>
   <i class="halflings-icon white plus"></i><span>Buat Permintaan</span>
   </a>
   <br/>
   <br/>
   </br>
<div class='row-fluid sortable'>		
				<div class='box span12'>
		  <input type=hidden name=inc id=inc value=$inc />
						  		
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon user'></i><span class='break'></span>Permintaan Pembelian</h2>
						<div class='box-icon'>
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<table class='table table-striped table-bordered bootstrap-datatable datatable'>
						  <thead>
							  <tr>
		
		  <th>No. PR</th>
		  <th>No Project</th>
		  <th>Nama Project</th>
		  <th>Perusahaan</th>
          <th>Tgl. Dokumen</th>
          <th>Tgl. Dibutuhkan </th>
          <th>Total Rupiah</th>
          <th><center>Approval Status</center></th>
							  </tr>
						  </thead>   
						  <tbody>
		<?php
		$qtmpil_pr="select * from tblpr order by inc asc";					
		$qp_pr=mysql_query($qtmpil_pr);		
		$inc=1;
		while($row2=mysql_fetch_array($qp_pr)){ ?>
		  <tr>
		  <td><?php echo "$row2[nopr]"; ?></td>
		  <td><?php echo "$row2[noproject]"; ?></td>
          <td><?php echo "$row2[namaproject]"; ?></td>
          <td><?php echo "$row2[perusahaan]"; ?></td>
          <td><?php echo "$row2[tgldokumen]"; ?></td>
		  <td><?php echo "$row2[tgldipakai]"; ?></td>
		  <td><?php echo "$row2[keterangan]"; ?></td>
		  
          <td><center><?php 
			 echo "<a class='btn btn-mini btn-danger' href='proses.php?proses=pr_delete&id=$row2[nopr]'>"; ?>
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