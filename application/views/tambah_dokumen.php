<?php $this->load->view("_layouts/_header.php"); ?>

<body>

	<?php $this->load->view("_layouts/_navbar.php"); ?>

	<section id=hasil>
		<div class="container-fluid py-3">
			<div class="row py-5">
				<div class="col-auto mx-auto">
					<object class="img-hero" data="<?php echo base_url('theme/svg') ?>/undraw_filing.svg" type="image/svg+xml"></object>
				</div>
			</div>
			<div class="row">
				<div class="col-auto mx-auto text-center">
					<h1 class="display-4">Hasil...</h1>
				</div>
            </div>
            
            <?php echo form_open_multipart('Dokumen/proses_tambah'); ?>
                Nama Dokumen <input type="text" name="name"/> <br>
                Penerbit Dokumen <input type="text" name="publisher"/> <br>
                Dibuat <input type="text" name="created" class="created"/> <br>
                Berakhir <input type="text" name="expired" class="expired"/> <br>
                Dokumen <input type="file" name="file"/> <br>
                <input type="submit" value="Simpan"/>
            <?php echo form_close(); ?>

			<div class="row pt-5">
				<div class="col-8 mx-auto">
					<div class="row">
						<div class="col-xl-8">
							<div class="card bg-default">
								<div class="card-header bg-transparent pt-3">
									<div class="row align-items-center">
										<div class="col">
											<h3 class="mb-0 text-center">Detail Dokumen</h3>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="container">
										<form>
											<div class="form-group row">
												<label for="name" class="col-sm-4 col-form-label"><b>Nama Dokumen</b></label>
												<div class="col-sm-8">
													<input type="text" readonly class="form-control-plaintext" id="name" value="email@example.com">
												</div>
											</div>
											<div class="form-group row">
												<label for="idDokumen" class="col-sm-4 col-form-label"><b>ID Dokumen</b></label>
												<div class="col-sm-8">
													<input type="text" readonly class="form-control" id="idDokumen" placeholder="Password">
												</div>
											</div>
											<div class="form-group row">
												<label for="author" class="col-sm-4 col-form-label"><b>Penerbit</b></label>
												<div class="col-sm-8">
													<input type="text" readonly class="form-control" id="author" placeholder="Password">
												</div>
											</div>
											<div class="form-group row">
												<label for="created" class="col-sm-4 col-form-label"><b>Dibuat</b></label>
												<div class="col-sm-8">
													<input type="text" readonly class="form-control" id="created" placeholder="Password">
												</div>
											</div>
											<div class="form-group row">
												<label for="expired" class="col-sm-4 col-form-label"><b>Berakhir</b></label>
												<div class="col-sm-8">
													<input type="text" readonly class="form-control" id="expired" placeholder="Password">
												</div>
											</div>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="card">
								<div class="card-header bg-transparent pt-3">
									<div class="row align-items-center">
										<div class="col">
											<h3 class="mb-0 text-center">File</h3>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="col-auto mx-auto text-center">
										<object class="size" data="<?php echo base_url('theme/svg') ?>/undraw_Job_hunt.svg" type="image/svg+xml"></object>
									</div>

									<div class="container">
										<div class="row">
											<div class="col text-center">
												<button class="btn btn-primary">Unduh</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
	</section>

	<?php $this->load->view("_layouts/_footer.php"); ?>
