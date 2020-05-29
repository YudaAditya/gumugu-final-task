
<?php $this->load->view("_layouts/_header.php"); ?>
	<style type="text/css">
		#captImg{float:center;}
		.refreshCaptcha {position:relative;top:27px;}
		form{float:center;width:100%;}
	</style>
	
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.refreshCaptcha').on('click', function(){
				$.get('<?php echo base_url().'captcha/refresh'; ?>', function(data){
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


			<div class="row pt-5">

				<div class="col-12 px-5">
					<div class="card bg-default">
						<div class="card-header bg-transparent pt-3">
							<div class="row align-items-center">
								<div class="col">
									<h3 class="mb-0 text-center pt-3">Isilah huruf yang terlihat</h3>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="container">
								<p id="captImg"><?php echo $captchaImg; ?></p>
								<a href="javascript:void(0);" class="refreshCaptcha" ><img src="<?php echo base_url().'theme/image/refresh.png'; ?>"/></a>
								<form method="post">
									<input type="text" name="captcha" value=""/>
									<input type="submit" name="submit" value="SUBMIT"/>
								</form>
								
							</div>

						</div>
					</div>
				</div>

			</div>

	</section>

	<?php $this->load->view("_layouts/_footer.php"); ?>

