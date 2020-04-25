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
					<h1 class="display-4">Detail</h1>
				</div>
			</div>
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
											<?php foreach ($dokumen as $d) { ?>
												<div class="form-group row">
													<label for="name" class="col-sm-4 col-form-label"><b>ID Dokumen</b></label>
													<div class="col-sm-8">
														<input type="text" readonly class="form-control-plaintext" id="name" value="<?php echo $d->id ?>">
													</div>
												</div>
												<div class="form-group row">
													<label for="name" class="col-sm-4 col-form-label"><b>Nama Dokumen</b></label>
													<div class="col-sm-8">
														<input type="text" readonly class="form-control-plaintext" id="name" value="<?php echo $d->name ?>">
													</div>
												</div>
												<div class="form-group row">
													<label for="name" class="col-sm-4 col-form-label"><b>Penerbit</b></label>
													<div class="col-sm-8">
														<input type="text" readonly class="form-control-plaintext" id="name" value="<?php echo $d->publisher ?>">
													</div>
												</div>
												<div class="form-group row">
													<label for="name" class="col-sm-4 col-form-label"><b>Dibuat</b></label>
													<div class="col-sm-8">
														<input type="text" readonly class="form-control-plaintext" id="name" value="<?php echo $d->created ?>">
													</div>
												</div>
												<div class="form-group row">
													<label for="name" class="col-sm-4 col-form-label"><b>Berakhir</b></label>
													<div class="col-sm-8">
														<input type="text" readonly class="form-control-plaintext" id="name" value="<?php echo $d->expired ?>">
													</div>
												</div>
												<div class="form-group row">
													<label for="name" class="col-sm-4 col-form-label"><b>File</b></label>
													<div class="col-sm-8">
														<input type="text" readonly class="form-control-plaintext" id="name" value="<?php echo $d->file ?>">
													</div>
												</div>


											<?php } ?>
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
												<a href="<?php echo site_url('dokumen/redirect/' . $d->id) ?>">
													<button class="btn btn-primary">Go to File</button>
												</a>
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
