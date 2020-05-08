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
					<h1 class="display-4">Tunggu sebentar</h1>
					<div id="interval">
						<h3 class="">Anda akan segera diarahkan ke file dalam <span id="waktu">5</span> detik</h3>
					</div>
					<!-- <?php foreach ($dokumen as $d) { ?>
						<a class="btn btn-outline-primary" href="<?php echo base_url('hasil/fungsi/') . $d->id ?>">Klik disini... jika belum</a>
					<?php } ?> -->
				</div>
			</div>

	</section>

	<?php $this->load->view("_layouts/_footer.php"); ?>
