<h3>
	<i class="fa fa-plus"></i>
	 CUMPLEANOS DEL MES	
</h3>

<?php
	# Incluindo os arquivos necessarios
	$user = $_SESSION[md5("user_data")];
	$cpf = $user['user_cpf'];
    $cpf1 = array("user_cpf"  => $cpf);

    # Busca	
	$table_content = selectbirth("tb_clientes",null,$cpf1,null);
	
	# Titulos
	#$table_titles['id_estoque'] = "ID STOCK";
	$table_titles['cliente_name'] = "NOMBRE";
	$table_titles['cliente_birth'] = "CUMPLEAÑOS";
	$table_titles['cliente_phone'] = "TELEFONO 1";
	$table_titles['cliente_cellphone'] = "TELEFONO 2";
	

	# Filtro
	#$filter = "id_cliente";
	$table_color = "#FF69B4";
	$table_icon = "plus";
	$table_header = " CUMPLEANOS DEL MES <hr>";
	# Incluindo a 'THE FUCKING TABLE'
	include_once $GLOBALS['project_path']."/views/list_commonmsg.php";
?>