<?php  
	
	# Incluindo os arquivos necessários
	include_once $GLOBALS['project_path']."/models/connect.php";
	include_once $GLOBALS['project_path']."/models/manager.php";

	function validate_options(){
	    
	    //add_compras 
	    if(isset($_GET['descuento'])){
            include_once $GLOBALS['project_path']."/views/carrito/carrito.php";
        }
	    
	    //registro_financiero.php
	    if(isset($_GET['ano'])){
            include_once $GLOBALS['project_path']."/views/forms/registro_financiero.php";
        }
        if(isset($_GET['venta_ano'])){
            include_once $GLOBALS['project_path']."/views/forms/venta_financiero.php";
        }
        if(isset($_GET['evaluacion_ano'])){
            include_once $GLOBALS['project_path']."/views/forms/evaluacion_financiero.php";
        }
        
        #carrito
        if(isset($_GET['lista-productos'])){
            include_once $GLOBALS['project_path']."/views/carrito/lista-productos.php";
        }
        if(isset($_GET['producto'])){
            include_once $GLOBALS['project_path']."/views/carrito/carrito.php";
        }
        if(isset($_GET['productoVenta'])){
            include_once $GLOBALS['project_path']."/views/carritoVentas/carrito.php";
        }
        
        
	    
		if(!isset($_GET['option'])){
			return false;
		}
		
		//session_start();
    	$user = $_SESSION[md5("user_data")];
    	$cpf = $user['user_cpf'];
    	$cpf1 = array("user_cpf"  => $cpf);
    	//echo $cpf;

		switch($_GET['option']){
		    
		    case "productos-carrito":
				include_once $GLOBALS['project_path']."/views/carrito/carrito/cart.php";
			break;
			
			case "productos-venta":
				include_once $GLOBALS['project_path']."/views/carritoVentas/carrito/cart.php";
			break;
			
			case "checkout":
				include_once $GLOBALS['project_path']."/views/carrito/carrito/checkout.php";
			break;
			
			case "checkoutVenta":
				include_once $GLOBALS['project_path']."/views/carritoVentas/carrito/checkout.php";
			break;
			
			case "thankyou":
				include_once $GLOBALS['project_path']."/views/carrito/carrito/thankyou.php";
			break;
			
			case "thankyouVenta":
				include_once $GLOBALS['project_path']."/views/carritoVentas/carrito/thankyou.php";
			break;
			
		    
		    case "cumpleaños":
		        # Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_profile.php";
				$update_destiny = "?option=#";
		        
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/forms/cumpleanos.php";
			break;
			
			case "cliente2":
			    # Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_profile.php";
				$update_destiny = "?option=update_venta";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/forms/cliente2.php";
			break;
			
			case "cliente14":
			    # Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_profile.php";
				$update_destiny = "?option=#";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/forms/cliente14.php";
			break;
			
			case "cliente60":
			    # Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_profile.php";
				$update_destiny = "?option=#";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/forms/cliente60.php";
			break;
			
			case "producto6":
			    
			    # Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_estoque.php";
				$update_destiny = "?option=update_stock";
				
				# Filtro
				$filter = "id_estoque";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Stock <hr>";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/forms/producto6.php";
			break;
			
			case "producto5":
			    
			    # Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_estoque.php";
				$update_destiny = "?option=update_stock";
				
				# Filtro
				$filter = "id_estoque";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Stock <hr>";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/forms/producto5.php";
			break;
			
			case "producto4":
			    
			    # Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_estoque.php";
				$update_destiny = "?option=update_stock";
				
				# Filtro
				$filter = "id_estoque";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Stock <hr>";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/forms/producto4.php";
			break;
			
			case "producto3":
				
				# Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_estoque.php";
				$update_destiny = "?option=update_stock";
				
				# Filtro
				$filter = "id_estoque";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Stock <hr>";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/forms/producto3.php";
			break;
			
			case "producto2":
				
				# Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_estoque.php";
				$update_destiny = "?option=update_stock";
				
				# Filtro
				$filter = "id_estoque";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Stock <hr>";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/forms/producto2.php";
			break;
			
			case "producto1":
				
				# Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_estoque.php";
				$update_destiny = "?option=update_stock";
				
				# Filtro
				$filter = "id_estoque";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Stock <hr>";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/forms/producto1.php";
			break;
			
			case "producto0":
				
				# Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_estoque.php";
				$update_destiny = "?option=update_stock";
				
				# Filtro
				$filter = "id_estoque";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Stock <hr>";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/forms/producto0.php";
			break;
		    
		    case "mensajes":
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/forms/mensajes.php";
			break;

            case "financiero":
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/forms/registro_financiero.php";
			break;
			
			case "venta_financiero":
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/forms/venta_financiero.php";
			break;
			case "evaluacion_financiero":
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/forms/evaluacion_financiero.php";
			break;

			case "base":
				# Busca	
				$table_content = select("tb_profiles",null,null,null);
				
				# Titulos
				$table_titles['id_profile'] = "ID";	
				$table_titles['profile_name'] = "NOME DO PERFIL";	
				$table_titles['profile_page'] = "PÁGINA";	
				$table_titles['profile_desc'] = "DESCRIÇÃO";
				

				# Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_profile.php";
				$update_destiny = "?option=#";

				# Filtro
				$filter = "id_profile";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Usuários <hr>";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/list_common.php";
			break;
			
			case "add_client":
				include_once $GLOBALS['project_path']."/views/forms/add_cliente.php";
				
				# Busca	
				$table_content = select("tb_clientes",null,$cpf1,null);
				
				# Titulos
				#$table_titles['id_cliente'] = "ID";
				$table_titles['cliente_name'] = "NOMBRE CLIENTE";
				$table_titles['DNI'] = "DNI";
				$table_titles['cliente_phone'] = "TELEFONO";	
				$table_titles['cliente_cellphone'] = "SEGUNDO TELEFONO";
				$table_titles['cliente_address'] = "DIRECCIÓN";
				$table_titles['cliente_birth'] = "CUMPLEAÑOS";
				$table_titles['tipo_piel'] = "TIPO DE PIEL";
				$table_titles['cliente_created_in'] = "FECHA DE REGISTRO";

				# Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_user.php";
				$update_destiny = "?option=update_client";

				# Filtro
				$filter = "id_cliente";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Clientes <hr>";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/list_commonclient.php";
			break;

			case "manager_clients":
				# Busca	
				
				$table_content = select("tb_clientes",null,$cpf1,null);
				
				# Titulos
				#$table_titles['id_cliente'] = "ID";
				$table_titles['cliente_name'] = "NOMBRE CLIENTE";
				$table_titles['DNI'] = "DNI";
				$table_titles['cliente_phone'] = "TELEFONO";	
				$table_titles['cliente_cellphone'] = "SEGUNDO TELEFONO";
				$table_titles['cliente_address'] = "DIRECCIÓN";
				$table_titles['cliente_birth'] = "CUMPLEAÑOS";
				$table_titles['tipo_piel'] = "TIPO DE PIEL";
				$table_titles['cliente_created_in'] = "FECHA DE REGISTRO";

				# Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_user.php";
				$update_destiny = "?option=update_client";

				# Filtro
				$filter = "id_cliente";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Clientes <hr>";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/list_commonclient.php";
			break;

			case "add_user":
				include_once $GLOBALS['project_path']."/views/forms/add_user.php";
			break;
			case "manager_users":
				# Busca	
				$table_content = select("tb_users",null,$cpf1,null);
				
				# Titulos
				$table_titles['id_user'] = "ID";	
				$table_titles['user_name'] = "NOME";	
				$table_titles['user_phone'] = "TELEFONE";	
				$table_titles['user_email'] = "EMAIL";	

				# Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_user.php";
				$update_destiny = "?option=update_user";

				# Filtro
				$filter = "id_user";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Usuários <hr>";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/list_common.php";
			break;
			
			case "add_productos":
				include_once $GLOBALS['project_path']."/views/forms/add_productos.php";
				
				# Busca	
				$table_content = select("tb_productos",null,$cpf1,null);
				
				# Titulos
				#$table_titles['id_producto'] = "ID";
				$table_titles['codigo'] = "CODIGO";	
				$table_titles['product_name'] = "PRODUCTO";	
				$table_titles['tipo_producto'] = "TIPO DE PRODUCTO";	
				$table_titles['product_price'] = "PRECIO DE CATALOGO";
				$table_titles['puntos'] = "PUNTOS";	

				# Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_producto.php";
				$update_destiny = "?option=update_producto";

				# Filtro
				$filter = "id_producto";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Productos <hr>";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/list_common.php";
				
			break;
			case "manager_productos":
				# Busca	
				$table_content = select("tb_productos",null,$cpf1,null);
				
				# Titulos
				#$table_titles['id_producto'] = "ID";
				$table_titles['codigo'] = "CODIGO";	
				$table_titles['product_name'] = "PRODUCTO";	
				$table_titles['tipo_producto'] = "TIPO DE PRODUCTO";	
				$table_titles['product_price'] = "PRECIO DE CATALOGO";

				# Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_producto.php";
				$update_destiny = "?option=update_producto";

				# Filtro
				$filter = "id_producto";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Productos <hr>";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/list_common.php";
			break;
			
			case "update_producto":

				$filter['id_producto'] = base64_decode($_GET['filter']);
				$producto_r = select("tb_productos",null,$filter, null);

				$producto_r = $producto_r[0];

				

				include_once $GLOBALS['project_path']."/views/forms/update_producto.php";

			break;
			
			case "add_compras":
			    include_once $GLOBALS['project_path']."/views/carrito/carrito.php";
			break;
			case "manager_compras":
				# Busca	
				$table_content = select("tb_compras",null,$cpf1,null);
				
				# Titulos
				#$table_titles['id_compra'] = "ID COMPRA";	
				$table_titles['fecha_compra'] = "FECHA COMPRA";	
				$table_titles['fecha_recepcion'] = "FECHA RECEPCION";	
				$table_titles['descuento_compra'] = "DESCUENTO";
				$table_titles['precio_compra'] = "PRECIO COMPRA";
				$table_titles['flete'] = "FLETE";

				# Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_compra.php";
				$update_destiny = "?option=update_compra";

				# Filtro
				$filter = "id_compra";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Compras <hr>";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/list_common.php";
			break;
			
			case "add_ventas":
				include_once $GLOBALS['project_path']."/views/carritoVentas/carrito.php";
			break;
			case "manager_ventas":
				# Busca	
				$table_content = select("tb_ventas",null,$cpf1,null);
				
				# Titulos
				$table_titles['cliente_name'] = "NOMBRE CLIENTE";	
				$table_titles['producto_venta'] = "PRODUCTO VENDIDO";
				$table_titles['fecha_venta'] = "FECHA VENTA";
				$table_titles['fecha_entrega'] = "FECHA ENTREGA";
				$table_titles['precio_compra'] = "PRECIO COMPRA";
				$table_titles['precio_venta'] = "PRECIO VENTA";
				# Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_venta.php";
				$update_destiny = "?option=update_venta";

				# Filtro
				$filter = "id_venta";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Ventas <hr>";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/list_common.php";
			break;

			case "update_user":

				$filter['id_user'] = base64_decode($_GET['filter']);
				$user_r = select("tb_users",null,$filter, null);

				$user_r = $user_r[0];

				$profile_u = select("tb_profiles",array("profile_name"), array("id_profile"=>$user_r['profile_id']),null);

				include_once $GLOBALS['project_path']."/views/forms/update_user.php";

			break;
			
			case "update_client":

				$filter['id_cliente'] = base64_decode($_GET['filter']);
				$cliente_r = select("tb_clientes",null,$filter, null);

				$cliente_r = $cliente_r[0];

				//$profile_u = select("tb_profiles",array("profile_name"), array("id_profile"=>$user_r['profile_id']),null);

				include_once $GLOBALS['project_path']."/views/forms/update_client.php";
				
            	# Incluindo os arquivos necessarios
            	$user = $_SESSION[md5("user_data")];
            	$cpf = $user['user_cpf'];
                $cpf1 = array("id_cliente"=>$cliente_r['id_cliente']);
            
                # Busca	
            	$table_content = select("tb_ventas",null,$cpf1,null);
            	
            	foreach ($table_content as $key => $value) {
        	        $precio_compra[] = $value['precio_compra'];
        	        $precio_venta[] = $value['precio_venta'];
            	}
            	$compra = array_sum($precio_compra);
            	$venta = array_sum($precio_venta);
            	$lucro = $venta - $compra;
            	
            	echo '<div class="row">';
            	echo '<div class="col-md-3 form-control">';
            	echo '<h5>Total de las Ventas: $'.$venta.'</h5>';
            	echo '</div>';
            	echo '<div class="col-md-3 form-control">';
            	echo '<h5>Lucro Total: $'.$lucro.'</h5>';
            	echo '</div>';
            	echo '</div>';
            	
            	
            	# Titulos
            	#$table_titles['id_venta'] = "ID VENTA";
            	$table_titles['cliente_name'] = "CLIENTE";
            	$table_titles['producto_venta'] = "PRODUCTO";
            	$table_titles['fecha_venta'] = "FECHA VENTA";
            	$table_titles['precio_compra'] = "PRECIO COMPRA";
            	$table_titles['precio_venta'] = "PRECIO VENTA";
            	
            	# Liberação das Ações
            	$delete = false;
            	$update = true;
            	$print  = false;
            
            	# Caminho das Ações
            	$delete_destiny = "controllers/delete_user.php";
            	$update_destiny = "?option=update_venta";
            
            	# Filtro
            	$filter = "id_venta";
            	$table_color = "#FF69B4";
            	$table_icon = "plus";
            	$table_header = " PRODUCTOS VENDIDOS: <hr>";
            	# Incluindo a 'THE FUCKING TABLE'
            	include_once $GLOBALS['project_path']."/views/list_common1.php";


			break;
			
			case "update_venta":

				$filter['id_venta'] = base64_decode($_GET['filter']);
				$venta_r = select("tb_ventas",null,$filter, null);

				$venta_r = $venta_r[0];

				

				include_once $GLOBALS['project_path']."/views/forms/update_venta.php";

			break;
			
			case "update_compra":

				$filter['id_compra'] = base64_decode($_GET['filter']);
				$compra_r = select("tb_compras",null,$filter, null);

				$compra_r = $compra_r[0];

				

				include_once $GLOBALS['project_path']."/views/forms/update_compra.php";

			break;
			
			case "stock":
				# Busca	
				$table_content = select("estoque",null,null," WHERE user_cpf = $cpf AND NOT tipo_producto = 'Muestra'");
				
				# Titulos
				#$table_titles['id_estoque'] = "ID STOCK";
				$table_titles['producto'] = "PRODUCTO";	
				$table_titles['precio'] = "PRECIO";	
				$table_titles['fecha_compra'] = "FECHA COMPRA";
				$table_titles['tipo_producto'] = "TIPO DE PRODUCTO";

				# Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_compra.php";
				$update_destiny = "?option=update_stock";

				# Filtro
				$filter = "id_estoque";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Stock <hr>";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/list_common_stock.php";
			break;
			
			case "update_stock":

				$filter['id_estoque'] = base64_decode($_GET['filter']);
				$stock_r = select("estoque",null,$filter, null);

				$stock_r = $stock_r[0];

				

				include_once $GLOBALS['project_path']."/views/forms/update_stock.php";

			break;
			
			case "muestras":
				# Busca	
				$table_content = select("estoque",null,null," WHERE user_cpf = $cpf AND tipo_producto = 'Muestra'");
				
				# Titulos
				#$table_titles['id_estoque'] = "ID STOCK";	
				$table_titles['producto'] = "PRODUCTO";	
				$table_titles['precio'] = "PRECIO";	
				$table_titles['fecha_compra'] = "FECHA COMPRA";
				$table_titles['tipo_producto'] = "TIPO DE PRODUCTO";

				# Liberação das Ações
				$delete = false;
				$update = true;
				$print  = false;

				# Caminho das Ações
				$delete_destiny = "controllers/delete_compra.php";
				$update_destiny = "?option=update_stock";

				# Filtro
				$filter = "id_estoque";
				$table_color = "#FF69B4";
				$table_icon = "plus";
				$table_header = " Lista de Muestras <hr>";
				# Incluindo a 'THE FUCKING TABLE'
				include_once $GLOBALS['project_path']."/views/list_common_stock.php";
			break;

			default:
				echo "<h2> ERRO 404: NOT FOUND !</h2>";
			break;

		}

	}
?>