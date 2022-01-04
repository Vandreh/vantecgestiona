<!-- Criação do Formulário -->
<?php 
    $user = $_SESSION[md5("user_data")];
	$cpf = $user['user_cpf'];
	$cpf1 = array("user_cpf"  => $cpf);
	
	if(isset($_GET['descuento'])){
    $valor = $_GET["descuento"];}
?>

<form  method="GET">
    <input type="text" name="descuento" id="descuento" value="">
    <input type="submit" value="Aplicar Descuento">
</form>

<form action="<?=$GLOBALS['project_index'];?>/controllers/add_compras.php" method="POST">
    <div>

    	<div class="row">
    	    
    	    <div class="col-md-3">
    			<label> FECHA COMPRA: </label><br>
    			<input type="date" name="fecha_compra" class="form-control" value="<?php echo date("Y-m-d");?>" required>
    			<br><br>
    		</div>
    		
    		<div class="col-md-3">
    			<label> FECHA RECEPCION: </label><br>
    			<input type="date" name="fecha_recepcion" class="form-control" value="<?php echo date("Y-m-d");?>" required>
    			<br><br>
    		</div>
    		
    		<div class="col-md-3">
    			<label> VENCIMIENTO: </label><br>
    			<input type="date" name="vencimiento" class="form-control" value="<?php echo date("Y-m-d",strtotime(date("Y-m-d")."+ 1 year"));?>" required>
    			<br><br>
    		</div>
    		
    		<form>
        		<div class="col-md-2">
        			<label> DESCUENTO: %</label><br>
        			<input id="numero" step="0.01" type="number" name="descuento_compra" placeholder="Descuento %" value="<? echo $valor; ?>" class="form-control" required>
        			
        			<br><br>
        		</div>
        		
    		</form>
    		
    		<div class="col-md-2">
    			<label> FLETE: $</label><br>
    			<input type="number" step="0.01" name="flete" placeholder="Flete $" class="form-control" required>
    			<br><br>
    		</div>
    		
    		<div class="col-md-2">
    			<label> IMPUESTO:</label><br>
    			<input type="number" step="0.01" name="impuesto" placeholder="Impuesto $" class="form-control" required>
    			<br><br>
    		</div>
    		
    		<div class="col-md-2">
    			<label> IMPORTE TOTAL:</label><br>
    			<input type="number" step="0.01" name="precio_compra" placeholder="Total $" class="form-control" required>
    			<br><br>
    		</div>
    		
    		<input type="hidden" name="user_cpf" value="<?php echo $cpf;?>">
    <div class="col-md-12">
    	<?php
        # Busca	
		$table_content = select("tb_productos",null,$cpf1,null);
		
		# Titulos
		$table_titles['product_name'] = "PRODUCTO";	
		$table_titles['tipo_producto'] = "TIPO DE PRODUCTO";	
		$table_titles['product_price'] = "PRECIO DE COMPRA";

		# Filtro
		$filter = "id_producto";
		$table_color = "#FF69B4";
		$table_icon = "plus";
		$table_header = " Lista de Productos <hr>";
		# Incluindo a 'THE FUCKING TABLE'
		include_once $GLOBALS['project_path']."/views/add_carrito.php";
    ?>
    </div>
    <hr>			
    		<div class="col-md-12">
    		    <p>Antes de hacer click en Finalizar Compra, certifiquese de que la cajilla del buscador esté vacía. Gracias, estamos trabajando para mejorar lo mas pronto posible!</p>
    			<p class="text-right">
    			<button class="btn btn-primary"> 
    				<i class="fa fa-thumbs-up"></i>
    				 Finalizar Compra
    			</button>
    			</p>
    		</div>	
    	</div>
    	
	</div>
</form>
