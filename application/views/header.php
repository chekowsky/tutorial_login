<!doctype html>
<html lang="es class="h-100">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/normalize/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/vendor/jquery/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/vendor/popper/popper.min.js"></script>

	<link href="<?php echo base_url();?>assets/vendor/datatable/datatables.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/datatable/datatables.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/datatable/DataTables-1.10.21/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/datatable/DataTables-1.10.21/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" src="assets/vendor/datatable/JSZip-2.5.0/jszip.min.js"></script>
	<link href="<?php echo base_url();?>assets/vendor/datatable/Buttons-1.6.2/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/vendor/datatable/DataTables-1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/vendor/datatable/DataTables-1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/vendor/datatable/Buttons-1.6.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/datatable/pdfmake-0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/datatable/pdfmake-0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/datatable/Buttons-1.6.2/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/datatable/Buttons-1.6.2/js/buttons.html5.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/datatable/Buttons-1.6.2/js/buttons.print.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/datatable/Buttons-1.6.2/js/buttons.bootstrap4.min.js"></script>';

	<link href="<?php echo base_url();?>assets/vendor/datatable/Responsive-2.2.5/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/vendor/datatable/Responsive-2.2.5/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/datatable/Responsive-2.2.5/js/dataTables.responsive.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/datatable/Responsive-2.2.5/js/responsive.bootstrap4.min.js"></script>

	<style>
		body {
			min-height: 100vh !important;
		}

	</style>
	<title>Sistema Desarrollo Inca</title>
</head>
<body class="d-flex flex-column">

	<?php
		if ($this->session->userdata('is_logged_in')){
	?>

	<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">Navbar</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
		aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<?php foreach($this->session->userdata('Permisos') as $CrearMenu1){	?>
			  <li class="nav-item" routerLinkActive="active">
				<?php  echo '<a class="nav-link" href="'.base_url().$CrearMenu1["URL"].'">'.$CrearMenu1["DESCRIPCION"]."</a>"; ?>
			  </li>
			<?php }	?>
		</ul>
	  </div>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link"><?php echo 'Bienvenido: <strong>'.$this->session->userdata('NOMBRE').' '.$this->session->userdata('APELLIDOS').'</strong>';?></a>
			</li>
			<li class="nav-item">
				<a class="nav-link"><?php echo 'Tipo Usuario: <strong>'.$this->session->userdata('TIPOUSUARIO').'</strong>'; ?></a>
			</li>
			<li class="nav-item">
				<a href="login/CerrarSesion"><i class="fa fa-sign-out"></i>Cerrar Sessión</a>
			</li>
		</ul>
	</nav>
<?php }	?>
	<h3 align="center"> <br/> Registro de Anexo</h3>
