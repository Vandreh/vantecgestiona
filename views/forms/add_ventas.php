<?php
	# Incluindo os arquivos necessários
	include './models/connect.php';
	$user = $_SESSION[md5("user_data")];
	$cpf = $user['user_cpf'];
    $cpf1 = array("user_cpf"  => $cpf);	
?>

<!-- Criação do Formulário -->
<form action="<?=$GLOBALS['project_index'];?>/controllers/add_ventas.php" method="POST">
	<div class="row">
	    
		<div class="col-md-3">
    		<label>Nombre del Cliente:</label> <br>
            <select name="id_cliente" class="form-control">
            <?php
                $consulta = "SELECT * FROM tb_clientes WHERE user_cpf = $cpf";
                $ejecutar = mysqli_query($conn, $consulta) or die(mysqli_error($conn));
             foreach($ejecutar as $values): 
                 $cliente_name = $values['cliente_name'];
                 $id_cliente = $values['id_cliente'];
             ?>
            <?php echo 
            '<option value="'.$id_cliente.'">'.$cliente_name.'</option>';?>
        	    
        	<?php endforeach; ?>
        	</select>
        	
		</div>
		
		<div class="col-md-3">
			<label> Descuento: $</label><br>
			<input type="number" step="0.01" name="descuento_venta" min="0" placeholder="Descuento $" required class="form-control">
			<br><br>
		</div>
		
		<div class="col-md-3">
			<label> Delivery: $</label><br>
			<input type="number" step="0.01" name="delivery" min="0" placeholder="Delivery $" required class="form-control">
			<br><br>
		</div>
		
		<div class="col-md-3">
			<label> Fecha de Venta: </label><br>
			<input type="date" name="fecha_venta" required class="form-control" value="<?php echo date("Y-m-d");?>">
			<br><br>
		</div>
		
		<div class="col-md-3">
			<label> Fecha de Entrega: </label><br>
			<input type="date" name="fecha_entrega" required class="form-control" value="<?php echo date("Y-m-d");?>">
			<br><br>
		</div>
		
		<div class="col-md-9">
			<label> Observaciones: </label><br>
			<input type="text" name="observaciones" placeholder="Observaciones" class="form-control">
			<br><br>
		</div>
		<hr>
        
        <input type="hidden" name="user_cpf" value="<?php echo $cpf;?>">
	<div class="col-md-12">	
		<?php
    	    # Busca	
    		$table_content = select("estoque",null,$cpf1,null);
    		
    		# Titulos
    		#$table_titles['id_estoque'] = "ID STOCK";
    		$table_titles['producto'] = "PRODUCTO";
    		$table_titles['fecha_compra'] = "FECHA DE COMPRA";
    		$table_titles['tipo_producto'] = "TIPO DE PRODUCTO";
    		$table_titles['precio'] = "PRECIO DE COMPRA";
    		
    
    		# Filtro
    		$table_color = "#FF69B4";
    		$table_icon = "plus";
    		$table_header = " Lista de Stock <hr>";
    		# Incluindo a 'THE FUCKING TABLE'
    		include_once $GLOBALS['project_path']."/views/add_estoque.php";
    	?>
    </div>	
    	<div class="col-md-12">
    	   <p>Antes de hacer click en Finalizar Venta, certifiquese de que la cajilla del buscador esté vacía. Gracias, estamos trabajando para mejorar lo mas pronto posible!</p>
			<p class="text-right">
			<button class="btn btn-primary"> 
				<i class="fa fa-thumbs-up"></i>
				 Finalizar Venta 
			</button>
			</p>
		</div>
		
	</div>
</form>