<h3>
	<i class="fa fa-plus"></i>
	 2 SEMANAS POST VENTA: LLAMAR AL CLIENTE VERIFICAR EL PROGRESO OBSERVADO. 
</h3>

<?php
	# Incluindo os arquivos necess���rios
	$user = $_SESSION[md5("user_data")];
	$cpf = $user['user_cpf'];
    $cpf1 = array("user_cpf"  => $cpf);

    # Busca	
	$table_content = selectcliente14("tb_ventas",null,$cpf1,null);
	
	# Titulos
	#$table_titles['id_venta'] = "ID VENTA";
	$table_titles['cliente_name'] = "CLIENTE";
	$table_titles['producto_venta'] = "PRODUCTO";
	$table_titles['precio_venta'] = "PRECIO";
	$table_titles['fecha_venta'] = "FECHA VENTA";
	

	# Filtro
	#$filter = "id_cliente";
	$table_color = "#FF69B4";
	$table_icon = "plus";
	$table_header = " 14 DIAS APOS LA VENTA: LLAMAR AL CLIENTE PREGUNTAR SOBRE LOS CAMBIOS OBSERVADOS EN LA PIEL. <hr>";
	# Incluindo a 'THE FUCKING TABLE'
	include_once $GLOBALS['project_path']."/views/list_commonmsg.php";
?>