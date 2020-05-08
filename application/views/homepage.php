<?php $this->load->view("_layouts/_header.php"); ?>

<body>

	<?php $this->load->view("_layouts/_navbar.php"); ?>

	<section id=search class="section">
		<div class="container-fluid pt-5">
			<div class="row py-5">
				<div class="col-auto mx-auto">
					<object class="img-hero" data="<?php echo base_url('theme/svg') ?>/undraw_hiring.svg" type="image/svg+xml"></object>
				</div>
			</div>
			<div class="row">
				<div class="col-auto mx-auto text-center">
					<h1 class="display-4">Periksa Dokumenmu</h1>
					<p>Pastikan dokumenmu terdata dan dikeluarkan resmi.</p>
					<p>Semua dalam satu tempat.</p>
				</div>
			</div>

			

			<!-- <?php echo form_open('homepage/search'); ?>

				<div class="form-group">
					<label for="cari">data yang dicari</label>
					<input type="text" class="form-control" id="cari" name="cari" placeholder="cari" autocomplete="off" autofocus>
				</div>
				<input class="btn btn-primary" type="submit" value="Cari" name="submit">

			<?php echo form_close(); ?> -->

			<?php echo form_open('homepage/search'); ?>
			<div class="row pt-3">
				<div class="col-5 mx-auto">
					<div id="searchBar" class="input-group mb-3 input-group-lg">
						<div class="input-group-prepend">
							<span class="btn">
								<i class="fas fa-search"></i>
							</span>
						</div>
						<input type="text" class="form-control" placeholder="Cari disini ya..." aria-label="" aria-describedby="basic-addon1" id="cari" name="cari" placeholder="cari" autocomplete="off" autofocus>
						
						<button id="searchButton" class="btn btn-outline-secondary" type="button"><input class="btn" type="submit" value="Cari" name="submit"></button>
					</div>
				</div>

			</div>
			<?php echo form_close(); ?>

		</div>
	</section>

	<?php $this->load->view("_layouts/_footer.php"); ?>
