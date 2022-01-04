<!-- Criação do Formulário -->
<form action="<?=$GLOBALS['project_index'];?>/controllers/update_stock.php" method="POST">
    
    <input type="hidden" name="id_estoque" value="<?php echo $stock_r['id_estoque'];?>">

	<div class="row">
	    <div class="col-md-8">
		<label> Producto: </label><br>
			<input type="text" name="producto" placeholder="Digite el producto" required class="form-control" value="<?=$stock_r['producto'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
		<label> Codigo: </label><br>
			<input type="text" name="codigo" placeholder="Digite el codigo" class="form-control" value="<?=$stock_r['codigo'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
		<label> Lote: </label><br>
			<input type="text" name="lote" placeholder="Digite el lote" class="form-control" value="<?=$stock_r['lote'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Tipo Producto </label><br>	
			<select name="tipo_producto" class="form-control">
				<option disabled selected><?=$stock_r['tipo_producto'];?></option>
				<option value="Cuidado de la Piel"> Cuidado de la Piel </option>
				<option value="Maquillaje"> Maquillaje </option>
				<option value="Fragrancia"> Fragrancia </option>
				<option value="Muestra"> Muestra </option>
				<option value="Accesorio"> Accesorio </option>
			</select>
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Precio: </label><br>
			<input type="number" step=".01" name="precio" placeholder="Digite el Descuento" required class="form-control" value="<?=$stock_r['precio'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
		<label> Fecha de Compra: </label><br>
			<input type="date" name="fecha_compra" class="form-control" value="<?=$stock_r['fecha_compra'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
		<label> Fecha de Vencimiento: </label><br>
			<input type="date" name="vencimiento" class="form-control" value="<?=$stock_r['vencimiento'];?>">
			<br><br>
		</div>
		
		<hr>			
		<div class="col-md-12">
			<p class="text-right">
			<button class="btn btn-primary"> 
				<i class="fa fa-thumbs-up"></i>
				 Actualizar Producto 
			</button>
			</p>
		</div>	
	</div>
</form>