<div class="row">
	<div class="col-12">
		<div class="card m-b-30">
			<div class="card-body">

				<div class="row">
					<div class="col-md-8">
						<h4 class="mt-2 header-title">List Of Master Program Studi</h4>
					</div>
					<div class="col-md-4">
						<button type="button" class="btn btn-primary float-right btn-add"><span class="fa fa-plus"></span> Create New</button>
					</div>
					
				</div>

				<hr>

				<table class="table table-striped table-bordered dt-responsive nowrap table-search" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
						<th style="text-align: center;">#</th>
						<th hidden></th>
						<th>Fakultas</th>
						<th>Program Studi</th>
						<th>Created</th>
						<th style="width: 10px">Action</th>
					</thead>
					<tbody>
						<?php
						foreach ($listOfProdi as $key => $val) { ?>
							<tr style="line-height: 0px !important;">
								<td align="center"><?= $key + 1 ?></td>
								<td hidden class="id"><?= $val->prodi_id ?></td>
								<td class="faculty"><?= $val->faculty ?></td>
								<td class="prodi_name"><?= $val->prodi_name ?></td>
								<td><?= $val->create_at." : ".setDateFormat($val->create_date, "d F Y") ?></td>
								<td>
									<button class="btn btn-primary btn-sm btn-edit"><span class="fa fa-edit"></span> Edit</button>
									<button class="btn btn-danger btn-sm" onclick="_delete(<?= $val->prodi_id ?>)"><span class="fa fa-trash"></span> Delete</button>
								</td>
							</tr> 
						<?php } ?>
					</tbody>
				</table>

			</div>
		</div>
	</div> <!-- end col -->
</div> <!-- end row -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="modalAddProdi" tabindex="-1" role="dialog" aria-labelledby="modalAddProdiTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="formProdi">Form Create New Prodi</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="formFaculty">
				<div class="modal-body">
						<div class="form-group" hidden>
							<label for="exampleFormControlInput1">Id</label>
							<input type="text" class="form-control" id="prodiId" name="prodi_id">
						</div>

						<div class="form-group">
							<label for="exampleFormControlInput1">Faculty</label>
							<input type="text" class="form-control" id="faculty" name="faculty">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Prodi Name</label>
							<input type="email" class="form-control" id="prodiName" name="prodi_name">
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary btn-save" onclick="save()">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>



<?php $this->load->view("_partials/script") ?>
