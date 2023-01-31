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

				<ul class="nav nav-pills nav-justified" role="tablist">
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link active" data-toggle="tab" href="#dataPersonal" id="personal" role="tab">
                            <span class="d-none d-md-block" style="height: 50px; margin-top: 20px; font-size: 25px;">Data Personal</span><span class="d-block d-md-none"><i class="mdi mdi-home-variant h5"></i></span> 
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link" data-toggle="tab" href="#dataAlamat" id="alamat" role="tab">
                            <span class="d-none d-md-block" style="height: 50px; margin-top: 20px; font-size: 25px;">Data Alamat</span><span class="d-block d-md-none"><i class="mdi mdi-account h5"></i></span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link" data-toggle="tab" href="#dataSekolah" role="tab" id="sekolah">
                            <span class="d-none d-md-block" style="height: 50px; margin-top: 20px; font-size: 25px;">Data Sekolah</span><span class="d-block d-md-none"><i class="mdi mdi-email h5"></i></span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link" data-toggle="tab" href="#dataOrangTua" role="tab" id="ortu">
                            <span class="d-none d-md-block" style="height: 50px; margin-top: 20px; font-size: 25px;">Data Orang Tua</span><span class="d-block d-md-none"><i class="mdi mdi-settings h5"></i></span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link" data-toggle="tab" href="#prodi" role="tab" id="prodi">  
                            <span class="d-none d-md-block" style="height: 50px; margin-top: 20px; font-size: 25px;">Pilihan Program Studi</span><span class="d-block d-md-none"><i class="mdi mdi-settings h5"></i></span>
                        </a>
                    </li>
                </ul>
                <hr>

                <!-- Tab panes -->
                <div class="tab-content">
                	<!-- Pane Personal Info -->
                    <div class="tab-pane active p-3" id="dataPersonal" role="tabpanel">
                        <form class="form-horizontal form-personal-data m-t-30" action="index.html">
                        	<div class="row">
                        		<div class="col-md-8">
                        			<div class="form-group row">
                        				<div class="col-6 ">
                        					<label>NIK <span class="required">*</span></label>
                        					<input class="form-control" type="text" required="" name="nik" placeholder="No. Induk Kependudukan" autocomplete="off" style="text-transform: capitalize;" maxlength="16" id="alloptions" value="<?= $row->nik ?>">
                        					<!-- <input type="text" class="form-control" maxlength="25" name="placement" id="placement" /> -->
                        				</div>
                        			</div>

                        			<div class="form-group row">
                        				<div class="col-6">
                        					<label>Nama Lengkap <span class="required">*</span></label>
                        					<input class="form-control" type="text" name="fullname" placeholder="Nama Lengkap" autocomplete="off" style="text-transform: capitalize;" readonly value="<?= $row->fullname ?? "" ?>">
                        				</div>
                        			</div>

                        			<div class="row">
                        				<div class="col-md-6">
                        					<div class="form-group">
                        						<label>NISN (Opsional)</label>
                        						<input class="form-control" type="number" name="nisn" placeholder="Nisn" autocomplete="off" value="<?= $row->nisn ?? "" ?>">
                        					</div>
                        				</div>
                        				<div class="col-md-5">
                        					<div class="form-group">
                        						<label>NPWP (Opsional)</label>
                        						<input class="form-control" type="number" name="npwp" placeholder="Npwp" autocomplete="off" value="<?= $row->npwp ?? "" ?>">
                        					</div>
                        				</div>
                        			</div>


                        			<div class="row">
                        				<div class="col-md-6">
                        					<div class="form-group">
                        						<label>Tempat Lahir <span class="required">*</span></label>
                        						<input class="form-control mb-2" type="" required="" name="tempat_lahir" placeholder="Tempat Lahir"  autocomplete="off" style="text-transform: capitalize;" value="<?= $row->tempat_lahir ?? "" ?>">
                        					</div>
                        				</div>
                        				<div class="col-md-5">
                        					<div class="form-group">
                        						<label>Tanggal Lahir <span class="required">*</span></label>
                        						<input class="form-control" type="date" required="" name="tanggal_lahir" placeholder="Password" value="<?= $row->tanggal_lahir ?? "" ?>">
                        					</div>
                        				</div>
                        			</div>

                        			<div class="row">
                        				<div class="col-md-6">
                        					<div class="form-group">
                        						<label>Jenis Kelamin <span class="required">*</span></label>
                        						<select class="form-control" name="jeniskelamin">
                        							<option selected disabled class="hosted">...</option>
                        							<option value="1" <?= $row->jeniskelamin == 1 ? "selected" : "" ?> >Laki - Laki</option>
                        							<option value="0" <?= $row->jeniskelamin == 0 ? "selected" : "" ?> >Perempuan</option>
                        						</select>
                        					</div>
                        				</div>
                        				<div class="col-md-5">
                        					<div class="form-group">
                        						<label>Agama <span class="required">*</span></label>
                        						<input class="form-control" type="text" required="" name="agama" placeholder="Agama" autocomplete="off"  value="<?= $row->agama ?? "" ?>">
                        					</div>
                        				</div>
                        			</div>

                        			<div class="row">
                        				<div class="col-md-6">
                        					<div class="form-group">
                        						<label>Email <span class="required">*</span></label>
                        						<input class="form-control" type="email" required="" name="email" placeholder="Email" autocomplete="off"  value="<?= $row->agama ?? "" ?>">
                        					</div>
                        				</div>
                        				<div class="col-md-5">
                        					<div class="form-group">
                        						<label>No Telp / Wa <span class="required">*</span></label>
                        						<input class="form-control" type="number" required="" name="mobilenumber" placeholder="Telp / Wa" autocomplete="off" value="<?= $row->mobilenumber ?? "" ?>">
                        					</div>
                        				</div>
                        			</div>


                        			<div class="form-group text-center m-t-20 row">
                        				<div class="col-2">
                        					<button class="btn btn-primary btn-block btn-lg waves-effect waves-light next-to-alamat btn-personal" type="button" onclick="savePersonalData()">Save & Next</button>
                        				</div> 
                        			</div>
                        		</div>
                        		<div class="col-md-4" style="padding-top: 150px;">
                        			<img src="<?= base_url("assets/images/svg/undraw_personal_information_re_vw8a.svg") ?>" style="width: 75%; vertical-align: middle;">
                        		</div>
                        	</div>
			                
			            </form>
                    </div>
                	<!-- End Pane Personal Info -->

                	<!-- Data Alamat -->
                    <div class="tab-pane p-3" id="dataAlamat" role="tabpanel">
                    	<form class="form-alamat-data" method="post">
                    		<div class="row">
                    			<div class="col-md-6">
                    				<div class="form-row">
		                    			<div class="form-group col-md-6">
		                    				<label class="col-md-8 row">Kewarganegaraan&nbsp;<span class="required">*</span></label>
		                    				<input type="text" name="wni" class="form-control" id="inputEmail4" placeholder="Kewarganegaraan" value="<?= $row->wni ?? "" ?> ">
		                    			</div>
		                    		</div>
		                    		<div class="form-group">
		                    			<label for="inputAddress">Alamat</label>
		                    			<textarea class="form-control" cols="2" rows="2" name="alamat"><?= $row->alamat ?? "" ?></textarea>
		                    		</div>
		                    		<div class="form-row">
		                    			<div class="form-group col-md-6">
		                    				<label for="inputCity">Dusun</label>
		                    				<input type="text" class="form-control" id="inputCity" name="dusun" value="<?= $row->dusun ?? "" ?> ">
		                    			</div>
		                    			<div class="form-group col-md-6">
		                    				<label for="inputCity">RT / RW</label>
		                    				<input type="text" class="form-control" id="inputCity" name="rtrw" value="<?= $row->rtrw ?? "" ?> ">
		                    			</div>
		                    			<div class="form-group col-md-6">
		                    				<label for="inputCity" class="col-md-6 row">Desa / Kelurahan&nbsp;<span class="required">*</span></label>
		                    				<input type="text" class="form-control" id="inputCity" name="desa" value="<?= $row->desa ?? "" ?> ">
		                    			</div>
		                    			<div class="form-group col-md-6">
		                    				<label for="inputCity" class="col-md-6 row">Kecamatan&nbsp;<span class="required">*</span></label>
		                    				<input type="text" class="form-control" id="inputCity" name="kecamatan" value="<?= $row->kecamatan ?? "" ?> ">
		                    			</div>
		                    			<div class="form-group col-md-6">
		                    				<label for="inputCity" class="col-md-6 row">Kabupaten <span class="required">*</span></label>
		                    				<input type="text" class="form-control" id="inputCity" name="kabupaten" value="<?= $row->kabupaten ?? "" ?> ">
		                    			</div>
		                    			<div class="form-group col-md-6">
		                    				<label for="inputCity" class="col-md-6 row">Provinsi&nbsp;<span class="required">*</span></label>
		                    				<input type="text" class="form-control" id="inputCity" name="provinsi" value="<?= $row->provinsi ?? "" ?> ">
		                    			</div>

		                    			<div class="form-group col-md-6">
		                    				<label for="inputCity" class="col-md-6 row">Kode Pos (Optional)</label>
		                    				<input type="text" class="form-control" id="inputCity" name="kodepos" value="<?= $row->kodepos ?? "" ?> ">
		                    			</div>

		                    			<div class="col-md-12">

			                    			<div class="form-group">
												<label for="exampleFormControlInput1">Jenis Tinggal&nbsp;<span class="required">*</span></label>
												<div>
					                                <div class="custom-control custom-radio">
					                                    <input type="radio" class="custom-control-input" id="1" data-parsley-multiple="groups"
					                                           data-parsley-mincheck="2"  name='jenis_tinggal'>
					                                    <label class="custom-control-label col-md-6" for="1">Bersama Orang Tua</label>
					                                </div>

					                                <div class="custom-control custom-radio">
					                                    <input type="radio" class="custom-control-input" id="2" data-parsley-multiple="groups"
					                                           data-parsley-mincheck="2"  name='jenis_tinggal' value="kos">
					                                    <label class="custom-control-label col-md-6" for="2">Kos</label>
					                                </div>
					                                <div class="custom-control custom-radio">
					                                    <input type="radio" class="custom-control-input" id="3" data-parsley-multiple="groups"
					                                           data-parsley-mincheck="2"  name='jenis_tinggal' value="wali">
					                                    <label class="custom-control-label col-md-6" for="3">Wali</label>
					                                </div>
					                                <div class="custom-control custom-radio">
					                                    <input type="radio" class="custom-control-input" id="4" data-parsley-multiple="groups"
					                                           data-parsley-mincheck="2"  name='jenis_tinggal' value="rumah sendiri">
					                                    <label class="custom-control-label col-md-6" for="4">Rumah Sendiri</label>
					                                </div>
					                                <div class="custom-control custom-radio">
					                                    <input type="radio" class="custom-control-input" id="5" data-parsley-multiple="groups"
					                                           data-parsley-mincheck="2"  name='jenis_tinggal' value="asrama">
					                                    <label class="custom-control-label col-md-6" for="5">Asrama</label>
					                                </div>
					                                <div class="custom-control custom-radio">
					                                    <input type="radio" class="custom-control-input" id="6" data-parsley-multiple="groups"
					                                           data-parsley-mincheck="2"  name='jenis_tinggal' value="panti asuhan">
					                                    <label class="custom-control-label col-md-6" for="6">Panti Asuhan</label>
					                                </div>
					                                <div class="custom-control custom-radio">
					                                    <input type="radio" class="custom-control-input" id="7" data-parsley-multiple="groups"
					                                           data-parsley-mincheck="2"  name='jenis_tinggal' value="lainnya">
					                                    <label class="custom-control-label col-md-6" for="7">Lainnya</label>
					                                </div>
					                            </div>
												
											</div>
										</div>
		                    		</div>
		                    		
		                    		<div class="form-group text-center m-t-20 row">
                        				<div class="col-2">
                        					<button class="btn btn-primary btn-block btn-lg waves-effect waves-light btn-register btn-to-data-sekolah btn-alamat" type="button" onclick="saveAlamat()">Save & Next</button>
                        				</div>
                        			</div>
                    			</div>
                    			<div class="col-md-6" style="padding-top: 160px; padding-left: 160px;">
                        			<img src="<?= base_url("assets/images/svg/undraw_house_searching_re_stk8.svg") ?>" style="width: 65%; vertical-align: middle;">
                        		</div>
                    		</div>
                    		
                    	</form>
                    </div>
                	<!-- End Data Alamat -->

                	<!-- Data Sekolah -->
                    <div class="tab-pane p-3" id="dataSekolah" role="tabpanel">
                    	<form>
                    		<div class="row">
                    			<div class="col-md-6">
                    				<div class="form-row">
		                    			<div class="form-group col-md-6">
		                    				<label for="inputEmail4">Asal Sekolah&nbsp;<span class="required">*</span></label>
		                    				<select class="form-control" name="asal_sekolah">
		                    					<option class="hosted" selected disabled>...</option>
		                    					<option>SMA</option>
		                    					<option>SMK</option>
		                    					<option>MA</option>
		                    					<option>PAKET C</option>
		                    					<option>D2/D3</option>
		                    					<option>Lainnya</option>
		                    				</select>
		                    			</div>
		                    		</div>
		                    		<div class="form-group">
		                    			<label for="inputAddress">Nama Sekolah&nbsp;<span class="required">*</span></label>
		                    			<input type="" name="nama_sekolah" class="form-control col-md-6">
		                    		</div>
		                    		<div class="form-row">
		                    			<div class="form-group col-md-6">
		                    				<label for="inputCity">Alamat Sekolah </label>
		                    				<input type="text" class="form-control" id="inputCity" name="alamat">
		                    			</div>
		                    			<div class="form-group col-md-6">
		                    				<label for="inputCity">Jurusan</label>
		                    				<input type="text" class="form-control" id="inputCity" name="jurusan">
		                    			</div>
		                    		</div>
		                    		
		                    		<div class="form-group text-center m-t-20 row">
                        				<div class="col-2">
                        					<button class="btn btn-primary btn-block btn-lg waves-effect waves-light btn-to-dot btn-sekolah" type="button">Next</button>
                        				</div>
                        			</div>
                    			</div>
                    			<div class="col-md-6" style="padding-top: 80px; padding-left: 160px;">
                        			<img src="<?= base_url("assets/images/svg/undraw_education_f8ru.svg") ?>" style="width: 40%; vertical-align: middle;">
                        		</div>
                    		</div>
                    		
                    	</form>
                    </div>
                	<!-- End Data Sekolah -->

                    <!-- Data Orang Tua -->
                    <div class="tab-pane p-3" id="dataOrangTua" role="tabpanel">
                    	<form>
                    		<h4>Data Ibu</h4><hr>
                    		<div class="row">
                    			<div class="col-md-6">
                    				<div class="form-row">
		                    			<div class="form-group col-md-6">
		                    				<label for="inputEmail4">Nama Ibu&nbsp;<span class="required">*</span></label>
		                    				<input type="" name="nama_ibu" class="form-control col-md-6">
		                    			</div>
		                    		</div>
                    				<div class="form-row">
		                    			<div class="form-group col-md-6">
		                    				<label for="inputEmail4">NIK</label>
		                    				<input type="" name="nik_ibu" class="form-control col-md-6" maxlength="16" id="alloptions">
		                    			</div>
		                    		</div>
		                    		<div class="form-row">
		                    			<div class="form-group col-md-6">
		                    				<label for="inputEmail4">Tanggal Lahir Ibu</label>
		                    				<input type="" name="tanggal_lahir_ibu" class="form-control col-md-6">
		                    			</div>
		                    		</div>
		                    		<div class="form-row">
		                    			<div class="form-group col-md-6">
		                    				<label for="inputCity">Pendidikan Ibu</label>
		                    				<input type="text" class="form-control" name="pendidikan_ibu" id="inputCity">
		                    			</div>
		                    			<div class="form-group col-md-6">
		                    				<label for="inputCity">Pekerjaan Ibu</label>
		                    				<input type="text" class="form-control" name="pekerjaan_ibu" id="inputCity">
		                    			</div>
		                    		</div>
		                    		<div class="form-group">
		                    			<label for="inputAddress">Penghasilan Ibu</label>
		                    			<input type="" name="" class="form-control col-md-6" name="penghasilan_ibu">
		                    		</div>
                    			</div>
                    			<div class="col-md-6" style="padding-top: 140px; padding-left: 160px;">
                        			<img src="<?= base_url("assets/images/svg/undraw_fatherhood_-7-i19.svg") ?>" style="width: 40%; vertical-align: middle;">
                        		</div>
                    		</div>

                    		<h4>Data Ayah</h4><hr>
                    		<div class="row">
                    			<div class="col-md-6">
                    				<div class="form-row">
		                    			<div class="form-group col-md-6">
		                    				<label for="inputEmail4">Nama Ayah&nbsp;<span class="required">*</span></label>
		                    				<input type="" name="" class="form-control col-md-6" name="nama_ayah">
		                    			</div>
		                    		</div>
                    				<div class="form-row">
		                    			<div class="form-group col-md-6">
		                    				<label for="inputEmail4">NIK</label>
		                    				<input type="" name="" class="form-control col-md-6" name="nik_ayah" maxlength="16" id="alloptions">
		                    			</div>
		                    		</div>
		                    		<div class="form-row">
		                    			<div class="form-group col-md-6">
		                    				<label for="inputEmail4" class="col-md-6 row">Tanggal Lahir Ayah</label>
		                    				<input type="" name="" class="form-control col-md-6" name="tanggal_lahir_ayah">
		                    			</div>
		                    		</div>
		                    		<div class="form-row">
		                    			<div class="form-group col-md-6">
		                    				<label for="inputCity">Pendidikan Ayah</label>
		                    				<input type="text" class="form-control" id="inputCity" name="pendidikan_ayah">
		                    			</div>
		                    			<div class="form-group col-md-6">
		                    				<label for="inputCity">Pekerjaan Ayah</label>
		                    				<input type="text" class="form-control" id="inputCity" name="pekerjaan_ayah">
		                    			</div>
		                    		</div>
		                    		<div class="form-group">
		                    			<label for="inputAddress"  class="col-md-6 row">Penghasilan Ayah</label>
		                    			<input type="" name="" class="form-control col-md-6" name="penghasilan_ayah">
		                    		</div>
		                    		
                    			</div>
                    			<div class="col-md-6" style="padding-top: 140px; padding-left: 160px;">
                        			<img src="<?= base_url("assets/images/svg/undraw_motherhood_re_pk2m.svg") ?>" style="width: 40%; vertical-align: middle;">
                        		</div>
                    		</div>
                    		<h4>Data Wali</h4><hr>
                    		<div class="row">
                    			<div class="col-md-6">
                    				<div class="form-row">
		                    			<div class="form-group col-md-6">
		                    				<label for="inputEmail4">Nama Wali</label>
		                    				<input type="" name="" class="form-control col-md-6" name="nama_wali">
		                    			</div>
		                    		</div>
                    				<div class="form-row">
		                    			<div class="form-group col-md-6">
		                    				<label for="inputEmail4">NIK</label>
		                    				<input type="" name="nik_wali" class="form-control col-md-6" maxlength="16" id="alloptions">
		                    			</div>
		                    		</div>
		                    		<div class="form-row">
		                    			<div class="form-group col-md-6">
		                    				<label for="inputEmail4">Tanggal Lahir Wali</label>
		                    				<input type="" name="tanggal_lahir_wali" class="form-control col-md-6">
		                    			</div>
		                    		</div>
		                    		<div class="form-row">
		                    			<div class="form-group col-md-6">
		                    				<label for="inputCity">Pendidikan Wali</label>
		                    				<input type="text" class="form-control" name="pendidikan_wali" id="inputCity">
		                    			</div>
		                    			<div class="form-group col-md-6">
		                    				<label for="inputCity">Pekerjaan Wali</label>
		                    				<input type="text" class="form-control" name="pekerjaan_wali" id="inputCity">
		                    			</div>
		                    		</div>
		                    		<div class="form-group">
		                    			<label for="inputAddress">Penghasilan Wali</label>
		                    			<input type="" name="penghasilan_wali" class="form-control col-md-6">
		                    		</div>
		                    		
		                    		<div class="form-group text-center m-t-20 row">
                        				<div class="col-2">
                        					<button class="btn btn-primary btn-block btn-lg waves-effect waves-light btn-to-prodi btn-ortu" type="button">Next</button>
                        				</div>
                        			</div>
                    			</div>
                    			<div class="col-md-6" style="padding-top: 140px; padding-left: 160px;">
                        			<img src="<?= base_url("assets/images/svg/undraw_circuit_sdmr.svg") ?>" style="width: 40%; vertical-align: middle;">
                        		</div>
                    		</div>
                    		
                    	</form>
                    </div>
                    <!-- End Data Orang Tua -->
                    <!-- Data Sekolah -->
                    <div class="tab-pane p-3" id="prodi" role="tabpanel">
                    	<form>
                    		<div class="row">
                    			<div class="col-md-6">
                    				<div class="form-row">
		                    			<div class="form-group col-md-6">
		                    				<label for="inputEmail4">Pilihan 1</label>
		                    				<select class="form-control" name="prodi1">
		                    					<option class="hosted" selected disabled>...</option>
		                    					<?php foreach($listOfProdi as $val): ?>
		                    						<option value="<?= $val->prodi_name ?>"><?= $val->prodi_name ?></option>
		                    					<?php endforeach ?>
		                    				</select>
		                    			</div>
		                    		</div>
                    				<div class="form-row">
		                    			<div class="form-group col-md-6">
		                    				<label for="inputEmail4">Pilihan 2</label>
		                    				<select class="form-control hosted" name="prodi2">
		                    					<option class="hosted" selected disabled>...</option>
		                    					<?php foreach($listOfProdi as $val): ?>
		                    						<option value="<?= $val->prodi_name ?>"><?= $val->prodi_name ?></option>
		                    					<?php endforeach ?>
		                    				</select>
		                    			</div>
		                    		</div>
		                    		<div class="form-group text-center m-t-20 row">
                        				<div class="col-2">
                        					<button class="btn btn-primary btn-block btn-lg waves-effect waves-light btn-register btn-prodi" type="button">Next</button>
                        				</div>
                        			</div>
                    			</div>
                    			<div class="col-md-6" style="padding-top: 10px; padding-left: 60px;">
                        			<img src="<?= base_url("assets/images/svg/undraw_education_f8ru.svg") ?>" style="width: 40%; vertical-align: middle;">
                        		</div>
                    		</div>
                    		
                    	</form>
                    </div>
                	<!-- End Data Sekolah -->
                </div>

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
