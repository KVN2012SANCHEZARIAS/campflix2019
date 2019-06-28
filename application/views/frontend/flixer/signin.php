<!-- TOP LANDING SECTION -->
<div style="height:93vh;width:100%;background-image: url(<?php echo base_url().'assets/frontend/'.$selected_theme;?>/images/login_bg.jpg)">
	<!-- logo -->
	<div style="float: left;">
		<a href="<?php echo base_url();?>index.php?home">
		<img src="<?php echo base_url();?>/assets/global/logo2.png" style="margin: 18px 40px; height: 50px;" />
		</a>
	</div>
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4" style="clear: both;">
			<div style="background-color: #f3f3f3; padding: 30px;">
				<?php 
					if ($this->session->flashdata('signin_result') == 'failed'):
					?>
				<!-- ERROR MESSAGE -->
				<div class="alert alert-dismissible alert-danger">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					Error al Iniciar Sesión. Por favor, intenta de nuevo.
				</div>
				<?php endif;?>
				<form method="post" action="<?php echo base_url();?>index.php?home/signin">
				<center><h3 class="black_text" >Inscripción</h3></center>
					<div class="black_text" >
						Usuario:
					</div>
					<div class="black_text">
						<input type="email" name="email"     style="padding: 10px; width:100%;" autocomplete="off" />
					</div>
					<div class="black_text" style="margin-top: 20px;">
						Contraseña:
					</div>
					<div class="black_text">
						<input type="password" name="password" style="padding: 10px; width:100%;"/>
					</div>
					<button class="btn btn-danger" style=" width: 100%; margin: 20px 0px;">Iniciar Sesión</button>
				</form>
				<hr>
			
				<a href="<?php echo base_url();?>index.php?home/forget">¿Olvidaste la contraseña?</a>
				|
				<a href="<?php echo base_url();?>index.php?home/signup">Registrarse</a> 
			</div>
		</div>
	</div>
</div>
<!-- MIDDLE TAB SECTION -->
<div class="container">
	<div><br>
	<br><br><br><br><br><br><br><br><br><br><br></div>
	<?php include 'footer.php';?>
</div>