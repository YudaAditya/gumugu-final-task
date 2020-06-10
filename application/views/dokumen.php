<?php $this->load->view("_layouts/_header.php"); ?>

<body>

	<?php $this->load->view("_layouts/_navbar.php"); ?>

	<section id=hasil>
		<div class="container-fluid">
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

		</div>
		<div class="container-fluid">


			<div class="row pt-5">

				<div class="col-12 px-5">
					<div class="card bg-default">
						<div class="card-header bg-transparent pt-3">
							<div class="row align-items-center">
								<div class="col">
									
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="container">

								<?php
								if (isset($jumlah)) {
									echo "Jumlah pencarian <b>'" .htmlspecialchars($cari) . "'</b> : " . $jumlah;
								}
								?>

								<table class="table">
									<tr>
										<td>ID</td>
										<td>Name</td>
										<td>Publisher</td>
										<td>Created</td>
										<td>Expired</td>
										<td>File</td>
										<td>Action</td>
									</tr>

									<?php foreach ($dokumen as $d) { ?>
										<tr>
											<td><?php echo $d->id; ?></td>
											<td><?php echo $d->name; ?></td>
											<td><?php echo $d->publisher; ?></td>
											<td><?php echo $d->created; ?></td>
											<td><?php echo $d->expired; ?></td>
											<td><?php echo $d->file; ?></td>
											<td>
												<a class="btn btn-primary" href="<?php echo site_url('dokumen/detail/' . $d->id) ?>">Detail</a>

												<a href="<?php echo base_url() ?>"></a>

											</td>
										</tr>
									<?php } ?>
								</table>
							</div>

						</div>
					</div>
				</div>

			</div>

	</section>

	<?php $this->load->view("_layouts/_footer.php"); ?>
