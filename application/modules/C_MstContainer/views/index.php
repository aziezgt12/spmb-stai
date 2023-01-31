<div class="row">
	<div class="col-12">
		<div class="card m-b-30">
			<div class="card-body">

				<h4 class="mt-0 header-title">List Of Master Container</h4>
				<hr>

				<div class="vertical-scroll" style="width: 100%;">

					<table class="table table-bordered table-fixed">
						<thead>
							<tr style="position: sticky; top:-2px; background-color:#2F4F4F; color: white;">
								<th style="text-align: center;">#</th>
								<th>Name</th>
								<th>Size</th>
								<th>Abbr</th>
								<th>Measurement</th>
								<th>Created By</th>
								<th>Created Date</th>
								<th>Updated By</th>
								<th>Updated Date</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($listOfMstContainer as $key => $master) { ?>
								<tr>
									<td align="center"><?= $key + 1 ?></td>
									<td><?php echo $master->container_name ?></td>
									<td><?php echo $master->container_size ?></td>
									<td><?php echo $master->container_abbr ?></td>
									<td><?php echo $master->measurement ?></td>
									<td><?php echo $master->created_by ?></td>
									<td class="text-center"><?php echo $master->created_date ?></td>
									<td><?php echo $master->updated_by ?></td>
									<td class="text-center"><?php echo $master->updated_date ?></td>
								</tr> <?php } ?>
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div> <!-- end col -->
</div> <!-- end row -->