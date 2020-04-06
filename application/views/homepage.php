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
			<div class="row pt-3">
				<div class="col-5 mx-auto">
					<div id="searchBar" class="input-group mb-3 input-group-lg">
						<div class="input-group-prepend">
							<span class="btn">
								<i class="fas fa-search"></i>
							</span>
						</div>
						<input type="text" class="form-control" placeholder="Cari disini ya..." aria-label="" aria-describedby="basic-addon1">
						<button id="searchButton" class="btn btn-outline-secondary" type="button">Cari</button>
					</div>
				</div>

			</div>

		</div>
	</section>
	<section id="chart" class="section">
		<div class="container pt-5">
			<div class="container-fluid text-center">
				<h3 class="display-4"><u>Ringkasan</u></h3>
			</div>
			<div class="row pt-5">
				<div class="col">
					<div class="card">

						<div class="card-body">
							<div class="row">
								<div class="col">
									<h5 class="card-title text-uppercase text-muted mb-0">Total Views</h5>
									<span class="h2 font-weight-bold mb-0">350,897</span>
								</div>
								<div class="col-auto">
									<div class="img-icon bg-red">
										<i class="fas fa-eye"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card">

						<div class="card-body">
							<div class="row">
								<div class="col">
									<h5 class="card-title text-uppercase text-muted mb-0">Total Clicked</h5>
									<span class="h2 font-weight-bold mb-0">350,897</span>
								</div>
								<div class="col-auto">
									<div class="img-icon bg-green">
										<i class="fas fa-mouse"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card">

						<div class="card-body">
							<div class="row">
								<div class="col">
									<h5 class="card-title text-uppercase text-muted mb-0">Total Downloads</h5>
									<span class="h2 font-weight-bold mb-0">350,897</span>
								</div>
								<div class="col-auto">
									<div class="img-icon bg-blue">
										<i class="fas fa-file-download"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- chart  -->
			<div class="row">

			</div>
		</div>

	</section>

	<?php $this->load->view("_layouts/_footer.php"); ?>
