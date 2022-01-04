<h3>
	<i class="fa fa-plus"></i>
	  PRODUCTOS VENCIDOS: 	
</h3>

<?php  
	# Incluindo os arquivos necessarios
	$user = $_SESSION[md5("user_data")];
	$cpf = $user['user_cpf'];
    $cpf1 = array("user_cpf"  => $cpf);

    # Busca	
	$table_content = selectproducto0("estoque",null,$cpf1,null);
	
	# Titulos
	#$table_titles['id_estoque'] = "ID STOCK";
	$table_titles['producto'] = "PRODUCTO";
	$table_titles['vencimiento'] = "VENCIMIENTO";
	

	# Filtro
	#$filter = "id_cliente";
	$table_color = "#FF69B4";
	$table_icon = "plus";
	$table_header = " PRODUCTOS VENCIDOS: <hr>";
	# Incluindo a 'THE FUCKING TABLE'
	include_once $GLOBALS['project_path']."/views/list_commonmsg.php";
?>