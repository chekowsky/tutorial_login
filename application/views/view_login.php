<?php
$usuario = array(
		'name' => "username",
		'id' => "username",
		'size' => "50",
		'value' => set_value("username"),
		'placeholder' => "",
		'class' => 'form-control'
);
$password = array(
		'name' => "password",
		'id' => "password",
		'size' => "50",
		'value' => set_value("password"),
		'type' => "password",
		'class' => 'form-control'
);
$attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
//echo form_open("login/ValidarAcceso", $attributes);
?>
<div class="container">
	<div id="login-row" class="row justify-content-center align-items-center">
		<div id="login-column" class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
			<div id="login-box" class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<?php echo form_open('login/ValidarAcceso', ['class' => 'form-signin', 'role' => 'form']); ?>
				<h3 class="text-center">Login</h3>
				<div class="form-group">
					<label for="username">Email:</label><br>
					<?php echo form_input($usuario); ?>
					<div class="invalid-feedback">
						<?php echo form_error('email'); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="password">Contraseña:</label><br>
					<?php echo form_input($password); ?>
					<div class="invalid-feedback">
						<?php echo form_error('password'); ?>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-primary btn-md" value="Iniciar sesion">
				</div>
				</form>
				<div class="alert alert-primary" role="alert">
					<?php echo $this->session->flashdata('msg'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo form_close(); ?>
