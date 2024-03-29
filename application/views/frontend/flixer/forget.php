<!-- TOP LANDING SECTION -->
<div style="height:93vh;width:100%;background-image: url(<?php echo base_url().'assets/frontend/'.$selected_theme;?>/images/login_bg.jpg)">
	
	<!-- logo -->
	<div style="float: left;">
		<a href="<?php echo base_url();?>index.php?home">
			<img src="<?php echo base_url();?>/assets/global/logo2.png" style="margin: 18px 40px; height: 50px;" />
		</a>
	</div>
    <div style="float: right;margin: 18px 40px; height: 50px;">
        <a href="<?php echo base_url();?>index.php?home/signin" class="" style="color: #e50914;font-weight: 700;font-size: 20px;">Iniciar Sesión</a>
    </div>
	<form action="<?php echo base_url();?>index.php?home/forget" method="post">
		<div class="row">
			<div class="col-lg-4 col-lg-offset-4" style="clear: both;">
				<div style="background-color: #f3f3f3; padding: 30px;">
					<?php 
					if ($this->session->flashdata('password_reset') == 'failed'):
					?>
						<!-- ERROR MESSAGE -->
						<div class="alert alert-dismissible alert-danger">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  Este correo electrónico no existe.
						</div>
					<?php endif;?>
					
					<?php 
					if ($this->session->flashdata('password_reset') == 'success'):
					?>
						<!-- SUCCESS MESSAGE -->
						<div class="alert alert-dismissible alert-success">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  La contraseña ha sido enviada a tu correo electrónico. Verifícalo!
						  <a href="<?php echo base_url();?>index.php?home/signin">Sign in</a>
						</div>
					<?php endif;?>

					<h3 class="black_text">Olvidaste tu contraseña</h3>
					Ingresa tu correo electrónico. Le enviaremos una contraseña temporal.
					<div class="black_text" style="margin-top: 20px;">
					Correo electrónico
					</div>
					<div class="black_text">
						<input type="email" name="email" style="padding: 10px; width:100%;" />
					</div>
					<button type="submit" class="btn btn-primary" style=" width: 100%; margin: 20px 0px;">Enviar</button>
				</div>
			</div>
		</div>
	</form>
</div>

<!-- MIDDLE TAB SECTION -->
<div class="container">
	<?php include 'footer.php';?>
</div>
