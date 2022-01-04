<h5>
	<i class="fa fa-plus"></i>
	  2 DIAS POST VENTA: LLAMAR AL CLIENTE CONSULTAR SOBRE EL USO DE SUS PRODUCTOS.
	  <br>
	  <i class="fa fa-plus"></i>
	  2 SEMANAS POST VENTA: LLAMAR AL CLIENTE VERIFICAR EL PROGRESO OBSERVADO.
	  <br>
	  <i class="fa fa-plus"></i>
	  2 MESES POST VENTA: LLAMAR AL CLIENTE PREGUNTAR SOBRE NECESIDAD DE REPOSICION DE PRODUCTOS Y COMUNICAR NUEVOS LANZAMIENTOS.
</h5>

<?php
	# Incluindo os arquivos necessarios
	$user = $_SESSION[md5("user_data")];
	$cpf = $user['user_cpf'];
    $cpf1 = array("user_cpf"  => $cpf);
    $orderby = "AND NOT cliente_name = 'reinvierte10' ORDER BY fecha_entrega DESC;";
    # Busca	
	$table_content = select("tb_ventas",null,$cpf1,$orderby);
	
	# Titulos
	#$table_titles['id_venta'] = "ID VENTA";
	$table_titles['fecha_entrega'] = "FECHA ENTREGA";
	$table_titles['cliente_name'] = "CLIENTE";
	$table_titles['producto_venta'] = "PRODUCTO";
	$table_titles['precio_venta'] = "PRECIO";
	
	

	# Filtro
	$filter = "id_venta";
	$table_color = "#FF69B4";
	$table_icon = "plus";
	$table_header = " 2 DIAS APOS LA VENTA: LLAMAR EL CLIENTE PREGUNTAR SOBRE REACCIONES ALERGICAS. <hr>";
	# Incluindo a 'THE FUCKING TABLE'
	include_once $GLOBALS['project_path']."/views/list_common_seguimiento.php";
?>