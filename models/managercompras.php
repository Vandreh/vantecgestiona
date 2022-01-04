<meta charset="utf-8">
<?php
    
	function insert($table, $data){
	    
	    # 1° Parte da QUERY -  Inicio
		$query = "INSERT INTO tb_compras (fecha_compra, fecha_recepcion, descuento_compra, precio_compra, flete, impuesto, id_producto, product_name, product_price, tipo_producto, codigo, lote, puntos, cantidad, user_cpf)";

        for($i = 0; $i < count($data[1]); $i++){
    	    if($data[1][$i]['cantidad'] == null || $data[1][$i]['cantidad'] == 0){}else{
                
                $id_producto_array[] = $data[1][$i]['id_producto'];
                $id_producto_implode = implode(', ', $id_producto_array);
                
                $product_name_array[] = $data[1][$i]['product_name'];
                $product_name_implode = implode(', ', $product_name_array);
                
                $product_price_array[] = $data[1][$i]['product_price'] * $data[1][$i]['cantidad'];
                $product_price_implode = implode(', ', $product_price_array);
                
                $tipo_producto_array[] = $data[1][$i]['tipo_producto'];
                $tipo_producto_implode = implode(', ', $tipo_producto_array);
                
                $codigo_array[] = $data[1][$i]['codigo'];
                $codigo_implode = implode(', ', $codigo_array);
                
                $lote_array[] = $data[1][$i]['lote'];
                $lote_implode = implode(', ', $lote_array);
                
                $puntos_array[] = $data[1][$i]['puntos'] * $data[1][$i]['cantidad'];
                $puntos_implode = implode(', ', $puntos_array);
                
                $cantidad_array[] = $data[1][$i]['cantidad'];
                $cantidad_implode = implode(', ', $cantidad_array);
                
    	    }}
    	    
        
		# 3º Parte da Query - VALORES
		$values = array($data[0]['fecha_compra'], 
		$data[0]['fecha_recepcion'],
		$data[0]['descuento_compra'],
		$data[0]['precio_compra'],
		$data[0]['flete'],
		$data[0]['impuesto'],
		$id_producto_implode,
		$product_name_implode,
		$product_price_implode,
		$tipo_producto_implode,
		$codigo_implode,
		$lote_implode,
		$puntos_implode,
		$cantidad_implode,
		$data[0]['user_cpf']);
		$values = implode("', '", $values);
		
		$query .= " VALUES ('$values')";

		//echo $query;
		# Enviando a query para o banco
		global $conn;
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	    
	    
	    $id_compra = $conn->insert_id;
	    

    	for($i = 0; $i < count($data[1]); $i++){
    	    if($data[1][$i]['cantidad'] == null || $data[1][$i]['cantidad'] == 0){}else{
    	        $id_producto = $data[1][$i]['id_producto'];
    	        $product_name = $data[1][$i]['product_name'];
    	        $product_price = $data[1][$i]['product_price'];
    	        $tipo_producto = $data[1][$i]['tipo_producto'];
    	        $codigo = $data[1][$i]['codigo'];
    	        $lote = $data[1][$i]['lote'];
    	        $puntos = $data[1][$i]['puntos'];

    	        for($i2 = 0; $i2 < $data[1][$i]['cantidad']; $i2++){
        		# 1° Parte da QUERY -  Inicio
        		$query = "INSERT INTO $table (id_compra, id_producto, producto, precio, fecha_compra, vencimiento, tipo_producto, codigo, lote, puntos, user_cpf)";
        
        		# 3º Parte da Query - VALORES
        		$values = array($id_compra,
        		$id_producto, 
        		$product_name,
        		$product_price,
        		$data[0]['fecha_compra'],
        		$data[0]['vencimiento'],
        		$data[1][$i]['tipo_producto'],
        		$data[1][$i]['codigo'],
        		$data[1][$i]['lote'],
        		$data[1][$i]['puntos'],
        		
        		$data[0]['user_cpf']);
        		$values = implode("', '", $values);
        		
        		$query .= " VALUES ('$values')";
        
        		//echo $query;
        		# Enviando a query para o banco
        		global $conn;
        		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    	        }
    	    }
    	}
    	
    	$user = $_SESSION[md5("user_data")];
	    $cpf = $user['user_cpf'];
		
		# 1° Parte da QUERY -  Inicio
		$query = "INSERT INTO tb_compras1 (compra_json, user_cpf) VALUES ('".json_encode($data)."', '".$cpf."')";

		//echo $query;
		# Enviando a query para o banco
		global $conn;
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	
		return $result;
    }

	
?>