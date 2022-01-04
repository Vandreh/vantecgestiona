<meta charset="utf-8">
<?php
	
	function insert($table, $data){
	
		# 1° Parte da QUERY -  Inicio
		$query = "INSERT INTO `$table`";
	
		# 2° Parte da Query - CAMPOS
		$fields = array_keys($data);
		$fields = implode("`, `", $fields);		
		$query .= "(`$fields`)";

		# 3º Parte da Query - VALORES
		$values = implode("', '", $data);
		$query .= " VALUES ('$values')";

		//echo $query;
		# Enviando a query para o banco
		global $conn;
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		
		
		$user = $_SESSION[md5("user_data")];
	    $cpf = $user['user_cpf'];
		
		# 1° Parte da QUERY -  Inicio
		$query = "INSERT INTO $table"."1 (texto_json, user_cpf) VALUES ('".json_encode($data)."', '".$cpf."')";

		//echo $query;
		# Enviando a query para o banco
		global $conn;
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

		return $result;
	}
	
	function insertlocation($table, $data){
		
		$user = $_SESSION[md5("user_data")];
	    $cpf = $user['user_cpf'];
		
		# 1° Parte da QUERY -  Inicio
		$query = "INSERT INTO $table"." (texto_json, user_cpf) VALUES ('".json_encode($data)."', '".$cpf."')";

		//echo $query;
		# Enviando a query para o banco
		global $conn;
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

		return $result;
	}
	
	
	#Essa funcao era pra inserir productos do catalogo em tb_productos1, db_consultoras_mk, inserir json_encode
	function insertProduct($table, $data){
	    
	    # 1° Parte da QUERY -  Inicio
		$query = "INSERT INTO `$table`";
	
		# 2° Parte da Query - CAMPOS
		$fields = array_keys($data);
		$fields = implode("`, `", $fields);		
		$query .= "(`$fields`)";

		# 3º Parte da Query - VALORES
		$values = implode("', '", $data);
		$query .= " VALUES ('$values')";

		//echo $query;
		# Enviando a query para o banco
		global $conn;
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	    
	    
	    $user = $_SESSION[md5("user_data")];
	    $cpf = $user['user_cpf'];
	    
		# 1° Parte da QUERY -  Inicio
		$query = "INSERT INTO $table"."1 (texto_json, user_cpf) VALUES ('".json_encode($_POST)."', '".$cpf."')";

		//echo $query;
		# Enviando a query para o banco
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

		return $result;
	}

	/* SELECT * FROM `tb_name` */
	function select($table, $fields, $filters, $query_extra){
		# 1° PARTE DA QUERY - INICIO
		$query = "SELECT ";

		if($fields != NULL){
			foreach($fields as $field){
				$query .= "`$field`, ";
			}

			# Eliminando o espaço e a virgula
			$query = substr($query, 0, -2);

		}else{
			$query .= "*";
		}

		# 2° PARTE DA QUERY - TABELA
		$query .= " FROM `$table` "; 

		# 3° PARTE DA QUERY - FILTROS
		if($filters != NULL){
			$query .="WHERE "; 
			foreach ($filters as $key => $value){
				$query .= "`$key` = '$value' AND ";	
			}

			# Eliminando o espaço e o AND
			$query = substr($query, 0, -4);
		}

		# 4º PARTE DA QUERY - QUERY EXTRA
		if($query_extra != NULL){
			$query .= $query_extra;
		}

		//echo $query;
		# Envio da query para o banco
		global $conn;

		$result = mysqli_query($conn, $query);

		$data;
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}

		return $data;
	}
	function selectEstoque($table, $fields, $filters, $query_extra){
	    
	    $user = $_SESSION[md5("user_data")];
	    $cpf = $user['user_cpf'];
	    $query = "SELECT estoque.*, tb_productos.product_price FROM estoque JOIN tb_productos ON estoque.id_producto = tb_productos.id_producto WHERE estoque.user_cpf = $cpf";
	    if($query_extra != NULL){
			$query .= $query_extra;
		}
	    global $conn;
		$result = mysqli_query($conn, $query);
		$data;
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}
		return $data;
	}
	
	function selectbirth($table, $fields, $filters, $query_extra){
	    $user = $_SESSION[md5("user_data")];
    	$cpf = $user['user_cpf'];
        $cpf1 = array("user_cpf"  => $cpf);
		# 1° PARTE DA QUERY - INICIO
		$query = "SELECT cliente_name, cliente_phone, cliente_cellphone, cliente_birth FROM tb_clientes WHERE user_cpf = $cpf AND MONTH(cliente_birth) = MONTH(CURRENT_DATE()) ";

		# Envio da query para o banco
		global $conn;

		$result = mysqli_query($conn, $query);

		$data;
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}

		return $data;
	}
	
	function selectcliente2($table, $fields, $filters, $query_extra){
	    $user = $_SESSION[md5("user_data")];
    	$cpf = $user['user_cpf'];
        $cpf1 = array("user_cpf"  => $cpf);
		# 1° PARTE DA QUERY - INICIO
		$query = "SELECT id_venta, cliente_name, producto_venta, precio_venta, DATE_FORMAT(fecha_venta, '%d-%m-%Y') AS fecha_venta FROM tb_ventas WHERE user_cpf = $cpf AND DATE_ADD(fecha_entrega,INTERVAL 2 DAY) = Date_format(now(),'%Y-%m-%d');";

		# Envio da query para o banco
		global $conn;

		$result = mysqli_query($conn, $query);

		$data;
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}

		return $data;
	}
	
	function selectcliente14($table, $fields, $filters, $query_extra){
	    $user = $_SESSION[md5("user_data")];
    	$cpf = $user['user_cpf'];
        $cpf1 = array("user_cpf"  => $cpf);
		# 1° PARTE DA QUERY - INICIO
		$query = "SELECT id_venta, cliente_name, producto_venta, precio_venta, DATE_FORMAT(fecha_venta, '%d-%m-%Y') AS fecha_venta FROM tb_ventas WHERE user_cpf = $cpf AND DATE_ADD(fecha_entrega,INTERVAL 14 DAY) = Date_format(now(),'%Y-%m-%d');";

		# Envio da query para o banco
		global $conn;

		$result = mysqli_query($conn, $query);

		$data;
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}

		return $data;
	}
	
	function selectcliente60($table, $fields, $filters, $query_extra){
	    $user = $_SESSION[md5("user_data")];
    	$cpf = $user['user_cpf'];
        $cpf1 = array("user_cpf"  => $cpf);
		# 1° PARTE DA QUERY - INICIO
		$query = "SELECT id_venta, cliente_name, producto_venta, precio_venta, DATE_FORMAT(fecha_venta, '%d-%m-%Y') AS fecha_venta FROM tb_ventas WHERE user_cpf = $cpf AND DATE_ADD(fecha_entrega,INTERVAL 60 DAY) = Date_format(now(),'%Y-%m-%d');";

		# Envio da query para o banco
		global $conn;

		$result = mysqli_query($conn, $query);

		$data;
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}

		return $data;
	}
	
	function selectproducto6($table, $fields, $filters, $query_extra){
	    $user = $_SESSION[md5("user_data")];
    	$cpf = $user['user_cpf'];
        $cpf1 = array("user_cpf"  => $cpf);
		# 1° PARTE DA QUERY - INICIO
		$query = "SELECT id_estoque, producto, vencimiento FROM estoque WHERE user_cpf = $cpf AND Date_format(now(),'%Y-%m-%d') BETWEEN  DATE_ADD(vencimiento,INTERVAL -180 DAY) AND DATE_ADD(vencimiento,INTERVAL -150 DAY);";

		# Envio da query para o banco
		global $conn;

		$result = mysqli_query($conn, $query);

		$data;
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}

		return $data;
	}
	
	function selectproducto5($table, $fields, $filters, $query_extra){
	    $user = $_SESSION[md5("user_data")];
    	$cpf = $user['user_cpf'];
        $cpf1 = array("user_cpf"  => $cpf);
		# 1° PARTE DA QUERY - INICIO
		$query = "SELECT id_estoque, producto, vencimiento FROM estoque WHERE user_cpf = $cpf AND Date_format(now(),'%Y-%m-%d') BETWEEN  DATE_ADD(vencimiento,INTERVAL -150 DAY) AND DATE_ADD(vencimiento,INTERVAL -120 DAY);";

		# Envio da query para o banco
		global $conn;

		$result = mysqli_query($conn, $query);

		$data;
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}

		return $data;
	}
	
	function selectproducto4($table, $fields, $filters, $query_extra){
	    $user = $_SESSION[md5("user_data")];
    	$cpf = $user['user_cpf'];
        $cpf1 = array("user_cpf"  => $cpf);
		# 1° PARTE DA QUERY - INICIO
		$query = "SELECT id_estoque, producto, vencimiento FROM estoque WHERE user_cpf = $cpf AND Date_format(now(),'%Y-%m-%d') BETWEEN  DATE_ADD(vencimiento,INTERVAL -120 DAY) AND DATE_ADD(vencimiento,INTERVAL -90 DAY);";

		# Envio da query para o banco
		global $conn;

		$result = mysqli_query($conn, $query);

		$data;
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}

		return $data;
	}
	
	function selectproducto3($table, $fields, $filters, $query_extra){
	    $user = $_SESSION[md5("user_data")];
    	$cpf = $user['user_cpf'];
        $cpf1 = array("user_cpf"  => $cpf);
		# 1° PARTE DA QUERY - INICIO
		$query = "SELECT id_estoque, producto, vencimiento FROM estoque WHERE user_cpf = $cpf AND Date_format(now(),'%Y-%m-%d') BETWEEN  DATE_ADD(vencimiento,INTERVAL -90 DAY) AND DATE_ADD(vencimiento,INTERVAL -60 DAY);";

		# Envio da query para o banco
		global $conn;

		$result = mysqli_query($conn, $query);

		$data;
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}

		return $data;
	}
	
	function selectproducto2($table, $fields, $filters, $query_extra){
	    $user = $_SESSION[md5("user_data")];
    	$cpf = $user['user_cpf'];
        $cpf1 = array("user_cpf"  => $cpf);
		# 1° PARTE DA QUERY - INICIO
		$query = "SELECT id_estoque, producto, vencimiento FROM estoque WHERE user_cpf = $cpf AND Date_format(now(),'%Y-%m-%d') BETWEEN  DATE_ADD(vencimiento,INTERVAL -60 DAY) AND DATE_ADD(vencimiento,INTERVAL -30 DAY);";

		# Envio da query para o banco
		global $conn;

		$result = mysqli_query($conn, $query);

		$data;
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}

		return $data;
	}
	
	function selectproducto1($table, $fields, $filters, $query_extra){
	    $user = $_SESSION[md5("user_data")];
    	$cpf = $user['user_cpf'];
        $cpf1 = array("user_cpf"  => $cpf);
		# 1° PARTE DA QUERY - INICIO
		$query = "SELECT id_estoque, producto, vencimiento FROM estoque WHERE user_cpf = $cpf AND Date_format(now(),'%Y-%m-%d') BETWEEN  DATE_ADD(vencimiento,INTERVAL -30 DAY) AND vencimiento;";

		# Envio da query para o banco
		global $conn;

		$result = mysqli_query($conn, $query);

		$data;
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}

		return $data;
	}
	
	function selectproducto0($table, $fields, $filters, $query_extra){
	    $user = $_SESSION[md5("user_data")];
    	$cpf = $user['user_cpf'];
        $cpf1 = array("user_cpf"  => $cpf);
		# 1° PARTE DA QUERY - INICIO
		$query = "SELECT id_estoque, producto, vencimiento FROM estoque WHERE user_cpf = $cpf AND Date_format(now(),'%Y-%m-%d') > vencimiento;";

		# Envio da query para o banco
		global $conn;

		$result = mysqli_query($conn, $query);

		$data;
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}

		return $data;
	}

	/* UPDATE tb_name SET campo=novoValor WHERE campo=valor */
	function update($table, $data, $filters){
		
		# 1° PARTE DA QUERY - INICIO
		$query = "UPDATE `$table` SET ";
	
		# 2° PARTE DA QUERY - CAMPOS E VALORES
		foreach ($data as $key => $value) {
			$query .= "`$key` = '$value', ";
		}
		$query = substr($query, 0, -2);

		# 3° PARTE DA QUERY - FILTROS
		$query .=" WHERE "; 
		foreach ($filters as $key => $value){
			$query .= "`$key` = '$value' AND ";	
		}

		# Eliminando o espaço e o AND
		$query = substr($query, 0, -4);

		echo $query;
		# Enviando a query para o banco
		global $conn;
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		if ($mysqli -> connect_errno) {
            echo "Problema al registrar: " . $mysqli -> connect_error. " Favor entrar en contacto con el servicio tecnico!";
		    return $result;
		}

		return $result;

	}


	function delete($table, $filters){

		# 1° PARTE DA QUERY 
		$query = "DELETE FROM `$table` WHERE ";

		# 2° PARTE DA QUERY - FILTROS
		foreach ($filters as $key => $value){
			$query .= "`$key` = '$value' AND ";	
		}
		$query = substr($query, 0, -4);

		global $conn;
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		if ($mysqli -> connect_errno) {
            echo "Problema al registrar: " . $mysqli -> connect_error. " Favor entrar en contacto con el servicio tecnico!";
		    return $result;
		}

		return $result;

	}

?>