<div id="right-side-results">
	<div class="col-lg-10">
		<h2 class="page-header">Search Results</h2>
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading"><?php echo $searchType;?></div>

			<!-- Table -->
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Model</th>
						<th>Serial Number</th>
						<th>Primary Color</th>
						<th>Detail</th>
					</tr>
				</thead>
				<tbody>
					<?php $index = 0;?>
					<?php if(is_array($result)): ?>
					<?php foreach($result as $row):?>
					<? $index = $index + 1; ?>
					<tr>
						<td><? echo $index; ?></td>
						<td><? echo $row->itemName; ?></td>
						<td><? echo $row->itemModel; ?></td>
						<td><? echo $row->itemSerialNumber; ?></td>
						<td><? echo $row->ItemColor; ?></td>
						<td><button
								onclick="location.href='<?php echo base_url();?>lost_found/detail/<? echo $row->idItem; ?>/<? echo $row->itemName; ?>'"
								class="btn btn-primary" type="submit" name="op" value="Detail">Detail</button>
						</td>
					</tr>
					<?php endforeach;?>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
		<br />
	</div>
</div>
