
			<h1><?=$title;?></h1>

			<!-- Table (TABLE) -->
			<br /><br />
			<table>
				<tr>
					<th>No</th>					    
				    <th>Product Name</th>
				    <th>Quantity Per Unit</th>
			
				</tr>
				<?php
					
					foreach($array_produk as $row):	
					$id=$row->ProductID;	
					$no++;	
					$css=($no%2==1)? '' : 'class="bg"';
				?>
				<tr <?=$css;?> >
					<td><?=$no;?>.</td>				    
				    <td><?=$row->ProductName;?></td>
				    <td><?=$row->QuantityPerUnit;?></td>				    
				</tr>
				<?php  endforeach; ?>
			</table>

		<div class="halaman">Page : <?php echo $halaman;?></div>
