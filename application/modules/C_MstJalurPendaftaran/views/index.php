<div class="row">
	<div class="col-12">
		<div class="card m-b-30">
			<div class="card-body">

				<div class="row">
					<div class="col-md-8">
						<h4 class="mt-2 header-title">List Of Master Jalur Pendaftaran</h4>
					</div>
					<div class="col-md-4">
						<button type="button" class="btn btn-primary float-right btn-add"><span class="fa fa-plus"></span> Create New</button>
					</div>
					
				</div>

				<hr>

				<table class="table table-striped table-bordered dt-responsive nowrap table-search" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
						<th style="text-align: center; width: 1px">#</th>
						<th>Jalur Pendaftar</th>
						<th hidden>Jalur Id</th>
						<th style="text-align:center">Status</th>
						<th style="text-align:center">Biaya</th>
						<th style="text-align:center">Jadwal Pendaftaran</th>
						<th style="text-align:center">Jadwal Seleksi</th>
						<th style="text-align:center" hidden></th>
						<th>Document Pendaftaran</th>
						<th>Created</th>
						<th style="width: 10px">Action</th>
					</thead>
					<tbody>
						<?php
						foreach ($listOfJalur as $key => $val) { ?>
							<tr style="line-height: 0px !important;">
								<td align="center" width="1"><?= $key + 1 ?></td>
								<td hidden class="jalur_id"><?= $val->jalur_id ?></td>
								<td class="jalur_name"><?= $val->jalur_name ?></td>
								<td align="center" class="status"><?= badgeStatus($val->status) ?></td>
								<td align="center">Rp.<?= number_format($val->biaya) ?>,-</td>
								<td align="center" hidden class="biaya"><?= $val->biaya ?></td>
								<td align="center" class="jadwal_pendaftaran"><?= setDateFormat($val->jadwal_pendaftaran, "Y-m-d")  ?></td>
								<td align="center" class="jadwal_seleksi"><?= setDateFormat($val->jadwal_seleksi, "Y-m-d") ?></td>
								<td class="document">
									<?php foreach($val->require_document as $det): ?>
										<span class="badge badge-warning badge-pill" style="padding: 8px; font-size: 11px;"><?= $det->doc_name ?></span>
									<?php endforeach ?>
								</td>
								<td><?= $val->create_at." : ".setDateFormat($val->create_date, "d F Y") ?></td>
								<td>
									<button class="btn btn-primary btn-sm btn-edit"><span class="fa fa-edit"></span> Edit</button>
									<button class="btn btn-danger btn-sm" onclick="_delete(<?= $val->jalur_id ?>)"><span class="fa fa-trash"></span> Delete</button>
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
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAddTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="formProdi">Form Create New Prodi</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="formJalur">
				<div class="modal-body" >
						<div class="form-group" hidden>
							<label for="exampleFormControlInput1">Id</label>
							<input type="text" class="form-control" id="jalurId" name="jalur_id">
						</div>

						<div class="form-group">
							<label for="exampleFormControlInput1">Jalur Name</label>
							<input type="text" class="form-control" id="jalur_name" name="jalur_name">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Biaya Pendaftaran</label>
							<input type="text" class="form-control" id="biaya" name="biaya">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Jadwal Pendaftaran</label>
							<input type="date" class="form-control" id="jadwalPendaftaran" name="jadwal_pendaftaran">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Jadwal Seleksi</label>
							<input type="date" class="form-control" id="jadwalSeleksi" name="jadwal_seleksi">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Documnet Pendaftaran</label>
							<div>
								<?php foreach($listOfDoc as $val): ?>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="<?= $val->doc_id ?>" data-parsley-multiple="groups"
                                           data-parsley-mincheck="2" value='<?= $val->doc_id ?>' name='document[]'>
                                    <label class="custom-control-label" for="<?= $val->doc_id ?>"><?= $val->doc_name ?></label>
                                </div>
	                            <?php endforeach ?>
                            </div>
							
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
