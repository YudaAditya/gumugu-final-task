<?php $this->load->view("_layouts/_header.php"); ?>
<style type="text/css">
	#captImg {
		float: center;
	}

	.refreshCaptcha {
		position: relative;
		top: 27px;
	}

	form {
		float: center;
		width: 100%;
	}
</style>

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script>
	$(document).ready(function() {
		$('.refreshCaptcha').on('click', function() {
			$.get('<?php echo base_url() . 'captcha/refresh'; ?>', function(data) {
				$('#captImg').html(data);
			});
		});
	});
</script>

<body>

	<?php $this->load->view("_layouts/_navbar.php"); ?>

	<section id=hasil>
		<div class="container-fluid">
			<div class="row py-5">
				<div class="col-auto mx-auto">
					<object class="img-hero" data="<?php echo base_url('theme/svg') ?>/undraw_work_from_anywhere_7sdx.svg" type="image/svg+xml"></object>
				</div>
			</div>
			<div class="row">
				<div class="col-auto mx-auto text-center">
					<h1 class="display-4">Captcha</h1>
				</div>
			</div>

		</div>
		<div class="container-fluid">
			<div class="row">

				<div class="col-12 px-5">
					<div class="card bg-transparent border-0 shadow-none">
						<div class="card-header bg-transparent pt-3">
							<div class="row align-items-center">
								<div class="col">
									<h3 class="mb-0 text-center pt-3">Isilah huruf yang terlihat</h3>
								</div>
							</div>
						</div>
						<div class="card-body">

							<div class="container text-center">
								<p class="m-0" id="captImg"><?php echo $captchaImg; ?></p>
								<div class="m-0 col-lg-12 col-sm-12">
									<a href="" class="refreshCaptcha btn btn-primary">
										<img src="<?php echo base_url() . 'theme/image/refresh.png'; ?>" />
									</a>
								</div>
								<div class="mx-auto col-lg-6 col-sm-9 pt-5">
									<form method="post">
										<div id="searchBar" class="input-group mb-3 input-group-lg">
											<input class="form-control" id="searchBar" autofocus type="text" name="captcha" value="" placeholder="insert here" />
											<button id="searchButton" class="btn btn-outline-secondary" type="button">
												<input class="btn" type="submit" name="submit" value="SUBMIT" />
											</button>
										</div>
									</form>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>

	</section>

	<?php $this->load->view("_layouts/_footer.php"); ?>
