<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
<link href="<?php echo base_url();?>assets/css/Estilo.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/Tablas.css">
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>

<title>Sistema Desarrollo Inca</title>
</head>
<body>
	<h3 align="center"> <br/> Registro de Anexo</h3>
	<?php
		if ($this->session->userdata('is_logged_in')){
			echo '<h4 align="right">';
			echo '<small>';
			echo 'Bienvenido: <strong>'.$this->session->userdata('NOMBRE').' '.$this->session->userdata('APELLIDOS').'</strong>&nbsp;|&nbsp;';
			echo 'Tipo Usuario: <strong>'.$this->session->userdata('TIPOUSUARIO').'</strong>&nbsp;|&nbsp;';
			echo anchor("login/CerrarSesion/", "Salir").'&nbsp;&nbsp;</small></h4>';
			echo '<hr/>';
			echo '<p align="right">';
			echo '<table align="right">';
			echo '<tr>';
			foreach($this->session->userdata('Permisos') as $CrearMenu1){
                            
                            if($CrearMenu1["ID"]=="Error"){
                                echo '<td><font color="red">Sin Permisos para el Ver Menu. Solicita los Permisos con un Administrador</font></td>';
                             }else{   
                                  echo '<td><a href="'.base_url().$CrearMenu1["URL"].'">'.$CrearMenu1["DESCRIPCION"]."</a></td>";
                                  echo '<td>&nbsp;|&nbsp;</td>';
                            }
			}
            echo '</tr>';
			echo '</table>';   

			
			
			echo '</p>';
			echo '<hr/>';	
		
		}else{
			echo '<hr/>';
		}
		
	 ?>
