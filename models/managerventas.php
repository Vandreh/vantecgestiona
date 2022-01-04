
<meta charset="utf-8">
<?php
	function insert($table, $data){
    	for($i = 0; $i < count($data[1]); $i++){
    	    if($data[1][$i]['precio_venta'] == null){}else{
    	        
    	        $id_estoque = $data[1][$i]['id_estoque'];
    	        $id_compra = $data[1][$i]['id_compra'];
    	        $producto_venta = $data[1][$i]['producto'];
    	        $codigo = $data[1][$i]['codigo'];
    	        $lote = $data[1][$i]['lote'];
    	        $precio_compra = $data[1][$i]['precio'];
    	        $precio_venta = $data[1][$i]['precio_venta'];
    	        $vencimiento = $data[1][$i]['vencimiento'];
                $id_producto = $data[1][$i]['id_producto'];
                $fecha_compra = $data[1][$i]['fecha_compra'];
                $tipo_producto = $data[1][$i]['tipo_producto'];
                
    	        $descuento_venta = $data[0]['descuento_venta'];
    	        $delivery = $data[0]['delivery'];
    	        $fecha_entrega = $data[0]['fecha_entrega'];
    	        $fecha_venta = $data[0]['fecha_venta'];
    	        $observaciones = $data[0]['observaciones'];
    	        $cpf = $data[0]['user_cpf'];
    	        if($observaciones == ""){
    	            $observaciones = "Sin observaciones.";
    	        }
    	        
    	        $id_cliente = $data[0]['id_cliente'];
                $consulta = "SELECT * FROM tb_clientes WHERE id_cliente = $id_cliente";
                global $conn;
                $ejecutar = mysqli_query($conn, $consulta) or die(mysqli_error($conn));
                foreach($ejecutar as $val):
                $cliente_name = $val['cliente_name'];
    	        endforeach;
        		# 1 Parte da QUERY -  Inicio
        		$query = "INSERT INTO tb_ventas (id_estoque, id_compra, id_cliente, cliente_name, producto_venta, codigo, lote, descuento_venta, delivery, fecha_entrega, precio_compra, precio_venta, fecha_venta, observaciones, tipo_producto, vencimiento, id_producto, fecha_compra, user_cpf)";
        		# 2 Parte da Query - VALORES
        		$values = array($id_estoque, $id_compra, $id_cliente, $cliente_name, $producto_venta, $codigo, $lote, $descuento_venta, $delivery, $fecha_entrega, $precio_compra, $precio_venta, $fecha_venta, $observaciones, $tipo_producto, $vencimiento, $id_producto, $fecha_compra, $cpf);
        		$values = implode("', '", $values);
        		$query .= " VALUES ('$values')";
        		//echo $query;
        		# Enviando a query para o banco
        		global $conn;
        		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        		
	}}
    	    
        
    	        $id_cliente = $data[0]['id_cliente'];
                $consulta = "SELECT * FROM tb_clientes WHERE id_cliente = $id_cliente";
                global $conn;
                $ejecutar = mysqli_query($conn, $consulta) or die(mysqli_error($conn));
                foreach($ejecutar as $val):
                $cliente_name = $val['cliente_name'];
    	        endforeach;
    	        $cliente_name = array("cliente_name"  => $cliente_name);
    	        array_push($data, $cliente_name);
    	        
    	        $user = $_SESSION[md5("user_data")];
        	    $cpf = $user['user_cpf'];
        		
        		# 1° Parte da QUERY -  Inicio
        		$query = "INSERT INTO tb_ventas1 (venta_json, user_cpf) VALUES ('".json_encode($data)."', '".$cpf."')";
    	        
        		//echo $query;
        		# Enviando a query para o banco
        		global $conn;
        		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        		
        		
		for($i = 0; $i < count($data[1]); $i++){
    	    if($data[1][$i]['precio_venta'] == false){}else{
    	        $id_estoque = $data[1][$i]['id_estoque'];
        		# 1 PARTE DA QUERY 
        		$query = "DELETE FROM estoque WHERE id_estoque = $id_estoque";
        		global $conn;
        		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    	    }
    	    
		}
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
	


	/* UPDATE tb_name SET campo=novoValor WHERE campo=valor */
	function update($table, $data, $filters){
        		
        if($data['check1'] == true){
            for($i = 0; $i < count($data['check1']); $i++){
                $id_venta = $data['check1'][$i];
                
                $query = "UPDATE `$table` SET seguimiento = 1 WHERE id_venta = $id_venta";
        		global $conn;
        		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                
            }
        }
        if($data['check2'] == true){
            for($i = 0; $i < count($data['check2']); $i++){
                $id_venta = $data['check2'][$i];
                
                $query = "UPDATE `$table` SET seguimiento = 2 WHERE id_venta = $id_venta";
        		global $conn;
        		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                
            }
        }
        if($data['check3'] == true){
            for($i = 0; $i < count($data['check3']); $i++){
                $id_venta = $data['check3'][$i];
                
                $query = "UPDATE `$table` SET seguimiento = 3 WHERE id_venta = $id_venta";
        		global $conn;
        		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                
            }
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
		$result = mysqli_query($conn, $query);

		return $result;

	}

?>