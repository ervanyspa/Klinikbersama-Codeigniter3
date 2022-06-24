<?php echo $this->session->flashdata('berhasil_data_klinik') ?>
<!-- Page Content-->
<div class="page-content">
	<div class="container-fluid">
		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title-box">
					<div class="row">
						<div class="col">
							<h4 class="page-title">Profil Klinik</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item active">Profil Klinik</li>
							</ol>
						</div>
						<!--end col-->
					</div>
					<!--end row-->
				</div>
				<!--end page-title-box-->
			</div>
			<!--end col-->
		</div>
		<!--end row-->
		<!-- end page title end breadcrumb -->

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body p-0">
						<div id="user_map" class="pro-map" style="height: 220px"></div>
					</div>
					<!--end card-body-->
					<div class="card-body">
						<div class="dastone-profile">
							<div class="row">
								<div class="col-lg-4 align-self-center mb-3 mb-lg-0">
									<div class="dastone-profile-main">
										<div class="dastone-profile-main-pic">
											<img src="<?= base_url() ?>assets/admin/images/klinik/<?= $klinik->foto_klinik ?>" alt="foto klinik" height="70" width="70" class="rounded-circle">
										</div>
										<div class="dastone-profile_user-detail">
											<h5 class="dastone-user-name"><?= $klinik->nama_klinik ?></h5>
										</div>
									</div>
								</div>
								<!--end col-->

								<div class="col-lg-4 ms-auto align-self-center">
									<ul class="list-unstyled personal-detail mb-0">
										<li class=""><i class="ti ti-mobile me-2 text-secondary font-16 align-middle"></i> <b> Nomor Telepon </b> : <?= $klinik->no_telepon ?></li>
										<li class="mt-2"><i class="ti ti-email text-secondary font-16 align-middle me-2"></i> <b> Email </b> : <?= $klinik->email ?></li>

								</div>
								<!--end col-->
							</div>
							<!--end row-->
						</div>
						<!--end f_profile-->
					</div>
					<!--end card-body-->
				</div>
				<!--end card-->
			</div>
			<!--end col-->
		</div>
		<!--end row-->
		<div class="pb-4">
			<ul class="nav-border nav nav-pills mb-0" id="pills-tab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="Profile_Post_tab" data-bs-toggle="pill" href="#Profile_Post">Profil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="settings_detail_tab" data-bs-toggle="pill" href="#Profile_Settings">Pengaturan</a>
				</li>
			</ul>
		</div>
		<!--end card-body-->
		<div class="row">
			<div class="col-12">
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="Profile_Post" role="tabpanel" aria-labelledby="Profile_Post_tab">
						<div class="row">
							<div class="col-lg-9">
								<div class="card">
									<div class="card-header">
										<div class="row align-items-center">
											<div class="col">
												<h4 class="card-title">Data Informasi Klinik</h4>
											</div>
											<!--end col-->
										</div>
										<!--end row-->
									</div>
									<!--end card-header-->
									<div class="card-body">
										<div class="form-group row">
											<label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Dokter Penanggung Jawab</label>
											<div class="col-lg-9 col-xl-8">
												<h5><?= $klinik->dokter_pj_klinik ?></h5>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Pemilik Klinik</label>
											<div class="col-lg-9 col-xl-8">
												<h5><?= $klinik->nama_pemilik ?></h5>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Alamat Klinik</label>
											<div class="col-lg-9 col-xl-8">
												<h5><?= $klinik->alamat_klinik ?></h5>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Link Google Map</label>
											<div class="col-lg-9 col-xl-8">
												<h5><a href="<?= $klinik->link_gmap ?>" target="_blank"><?= $klinik->link_gmap ?></a></h5>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Longitude Klinik</label>
											<div class="col-lg-9 col-xl-8">
												<div class="input-group">
													<h5><?= $klinik->longitude_klinik ?></h5>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Latitude Klinik</label>
											<div class="col-lg-9 col-xl-8">
												<div class="input-group">
													<h5><?= $klinik->latitude_klinik ?></h5>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--end col-->
							<div class="col-lg-3">
								<div class="card">
									<div class="card-body">
										<div class="dash-datepick">
											<input type="hidden" id="light_datepick" />
										</div>
									</div>
									<!--end card-body-->
								</div>
								<!--end card-->
							</div>
							<!--end col-->
						</div>
						<!--end row-->
					</div>
					<div class="tab-pane fade" id="Profile_Settings" role="tabpanel" aria-labelledby="settings_detail_tab">
						<div class="row">
							<div class="col-lg-6 col-xl-6">
								<div class="card">
									<div class="card-header">
										<div class="row align-items-center">
											<div class="col">
												<h4 class="card-title">Pengaturan Informasi Klinik</h4>
											</div>
											<!--end col-->
										</div>
										<!--end row-->
									</div>
									<!--end card-header-->
									<form action="<?= base_url() ?>Admin/Profil_klinik/Updateprofil_klinik/<?= $klinik->id_klinik ?>" method="post" enctype="multipart/form-data">
										<div class="card-body">
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Nama Klinik</label>
												<div class="col-lg-9 col-xl-8">
													<input class="form-control" type="text" name="nama_klinik" value="<?= $klinik->nama_klinik ?>">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Dokter Penanggung Jawab</label>
												<div class="col-lg-9 col-xl-8">
													<input class="form-control" type="text" name="dokter_pj_klinik" value="<?= $klinik->dokter_pj_klinik ?>">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Pemilik Klinik</label>
												<div class="col-lg-9 col-xl-8">
													<input class="form-control" type="text" name="nama_pemilik" value="<?= $klinik->nama_pemilik ?>">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Alamat Klinik</label>
												<div class="col-lg-9 col-xl-8">
													<textarea class="form-control" name="alamat_klinik"><?= $klinik->alamat_klinik ?></textarea>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Foto Klinik</label>
												<div class="col-lg-9 col-xl-8">
													<input type="file" name="foto_klinik" id="input-file-now-custom-1" class="dropify" data-default-file="<?= base_url() ?>assets/admin/images/klinik/<?= $klinik->foto_klinik ?>" />
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-9 col-xl-8 offset-lg-3">
													<button type="submit" name="submit" class="btn btn-sm btn-outline-primary">Submit</button>
													<button type="cancel" name="cancel" class="btn btn-sm btn-outline-danger">Cancel</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!--end col-->
							<div class="col-lg-6 col-xl-6">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Pengaturan Akun</h4>
									</div>
									<!--end card-header-->
									<form action="<?= base_url() ?>Admin/Profil_klinik/Updateakun_klinik/<?= $klinik->id_user ?>" method="post" enctype="multipart/form-data">
										<div class="card-body">
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Email</label>
												<div class="col-lg-9 col-xl-8">
													<div class="input-group">
														<span class="input-group-text"><i class="las la-at"></i></span>
														<input type="text" class="form-control" name="email" value="<?= $klinik->email ?>" placeholder="Email" aria-describedby="basic-addon1">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Nomor Telepon</label>
												<div class="col-lg-9 col-xl-8">
													<div class="input-group">
														<span class="input-group-text"><i class="las la-phone"></i></span>
														<input type="text" class="form-control" name="no_telepon" value="<?= $klinik->no_telepon ?>" placeholder="Phone" aria-describedby="basic-addon1">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Password Sekarang</label>
												<div class="col-lg-9 col-xl-8">
													<input class="form-control" type="password" placeholder="Password" name="password">
													<!-- <a href="#" class="text-primary font-12">Forgot password ?</a> -->
												</div>
											</div>
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Password Baru</label>
												<div class="col-lg-9 col-xl-8">
													<input class="form-control" type="password" placeholder="New Password" name="password_baru">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Ulangi Password Baru</label>
												<div class="col-lg-9 col-xl-8">
													<input class="form-control" type="password" placeholder="Re-Password" name="password_ulang">
													<span class="form-text text-muted font-12">Jangan bagikan password anda</span>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-9 col-xl-8 offset-lg-3">
													<button type="submit" name="submit" class="btn btn-sm btn-outline-primary">Submit</button>
													<button type="cancel" name="cancel" class="btn btn-sm btn-outline-danger">Cancel</button>
												</div>
											</div>
										</div>
									</form>
									<!--end card-body-->
								</div>
								<!--end card-->
							</div> <!-- end col -->
						</div>
						<div class="row">
							<div class="col-lg-12 col-xl-12">
								<div class="card">
									<div class="card-header">
										<div class="row align-items-center">
											<div class="col">
												<h4 class="card-title">Pengaturan Peta Klinik</h4>
											</div>
											<!--end col-->
										</div>
										<!--end row-->
									</div>
									<!--end card-header-->
									<form action="<?= base_url() ?>Admin/Profil_klinik/Updatepeta_klinik/<?= $klinik->id_klinik ?>" method="post" enctype="multipart/form-data">
										<div class="card-body">
											<div class="form-group row">
												<div id="Leaf_default_tambah" class="" style="height: 400px"></div>
											</div>
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Link Google Map</label>
												<div class="col-lg-9 col-xl-8">
													<input class="form-control" type="text" name="link_gmap" value="<?= $klinik->link_gmap ?>">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Latitude Klinik</label>
												<div class="col-lg-9 col-xl-8">
													<input class="form-control" type="text" id="latitude" name="latitude" value="<?= $klinik->latitude_klinik ?>" readonly>
													<small class="form-text text-muted">Akan terisi otomatis ketika anda memilih tempat di peta</small>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center">Longitude Klinik</label>
												<div class="col-lg-9 col-xl-8">
													<input class="form-control" type="text" id="longitude" name="longitude" value="<?= $klinik->longitude_klinik ?>" readonly>
													<small class="form-text text-muted">Akan terisi otomatis ketika anda memilih tempat di peta</small>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-lg-9 col-xl-8 offset-lg-3">
													<button type="submit" name="submit" class="btn btn-sm btn-outline-primary">Submit</button>
													<button type="cancel" name="cancel" class="btn btn-sm btn-outline-danger">Cancel</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!--end col-->
						</div>
						<!--end row-->
					</div>
					<!--end tab-pane-->
				</div>
				<!--end tab-content-->
			</div>
			<!--end col-->
		</div>
		<!--end row-->

	</div><!-- container -->

	<footer class="footer text-center text-sm-start">
		&copy; <script>
			document.write(new Date().getFullYear())
		</script> Dastone <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
	</footer>
	<!--end footer-->
</div>
<!-- end page content -->
