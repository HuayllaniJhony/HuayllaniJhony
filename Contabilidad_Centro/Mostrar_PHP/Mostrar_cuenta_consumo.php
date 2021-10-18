<?php
require_once ('../Guardar_PHP/conexion.php');
?>
<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/separate/vendor/fancybox.min.css">
	<link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/separate/pages/activity.min.css">

	<?php /* editor summer de nuevo tickeet*/?>

	<link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/bootstrap-theme.css">
    <link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/lib/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free-5.15.4-web/css/all.css">
	<?php /* fin editor */?>
	<?php /*  stilo y animacion de modal nuevo ticket */?>
	<link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/lib/bootstrap-sweetalert/sweetalert.css">
	<link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/separate/vendor/sweet-alert-animations.min.css>
	<?php /* fin css */ ?>
	<link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/lib/datatables-net/datatables.min.css">
	<link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/separate/vendor/datatables-net.min.css">

	<link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/separate/vendor/select2.min.css">
	<link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/main.css">

    <title>Document</title>
</head>
<body>

<div class="container">
			<div class="row">
				<h2 style="text-align:center">Cuentas por consumo de energia</h2>
			</div>
			
			<div class="row">
				<button type="button" id="btnNuevo" class="btn btn-primary">Nuevo Registro</button>
				
				
			</div>
			
			<br>
			
			<div class="row table-responsive">
				<table id="consumo_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
					<thead>
						<tr>
							<th>Num Stand</th>
							<th>Dueño Stand</th>
							<th>No Pago Luz</th>
							<th>Deuda de Energia</th>
							<th class="text-center" style="width: 5%">Modificar</th>
                            <th class="text-center" style="width: 5%">Eliminar</th>
						</tr>
					</thead>
					
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
		<?php
		require_once("modalConsumo.php");

				?>
		<!-- Modal -->
	<script type="text/javascript" src="../bootstrap-5.1.0-dist/js/lib/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap-5.1.0-dist/js/lib/tether/tether.min.js"></script>
	<script type="text/javascript" src="../bootstrap-5.1.0-dist/js/lib/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="../bootstrap-5.1.0-dist/js/plugins.js"></script>
	<script type="text/javascript" src="../bootstrap-5.1.0-dist/js/app.js"></script>
	<script type="text/javascript" src="../bootstrap-5.1.0-dist/js/lib/datatables-net/datatables.min.js"></script>
	<script src="../bootstrap-5.1.0-dist/js/lib/bootstrap-sweetalert/sweetalert.min.js"></script>
	<script src="../bootstrap-5.1.0-dist/js/lib/select2/select2.full.min.js"></script>	
	<script type="text/javascript" src="consumo.js"></script>
				
			
			

	
		
</body>
</html>