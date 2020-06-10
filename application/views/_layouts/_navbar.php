<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
	<div class="container">
		<a class="navbar-brand">
			<?php echo form_open('homepage/atas'); ?>
				<input type="image" id="logo" src="<?php echo base_url('theme/image') ?>/logo-dark.png" alt="GUMUGU" name="beranda" value="final"/>
			<?php echo form_close(); ?>
		</a>
		
		
		<button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbar9">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- <style type="text/css">
			
			input[type="submit"]{
			background:rgba(0, 0, 0, 0);
			color:#000;
			cursor:pointer;
			}
		</style> -->
		<div class="navbar-collapse collapse" id="navbar9">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('chart')  ?>">Statistics</a>
				</li>
				<li class="nav-item">
					<?php echo form_open('homepage/atas'); ?>
					<input class="nav-link" type="hidden" name="produk" value="Products" />
					<?php echo form_close(); ?>
				</li>
				<li class="nav-item">
					<?php echo form_open('homepage/atas'); ?>
					<input class="nav-link" type="submit" name="servis" value="Services" />
					<?php echo form_close(); ?>
				</li>
				<li class="nav-item">
					<?php echo form_open('homepage/atas'); ?>
					<input class="nav-link" type="submit" name="perusahaan" value="Company" />
					<?php echo form_close(); ?>
				</li>
				<li class="nav-item">
					<?php echo form_open('homepage/atas'); ?>
					<input class="nav-link" type="submit" name="akademi" value="Academy" />
					<?php echo form_close(); ?>
				</li>
			</ul>
		</div>
	</div>
</nav>
