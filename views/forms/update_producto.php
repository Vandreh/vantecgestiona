<!-- Criação do Formulário -->
<form action="<?=$GLOBALS['project_index'];?>/controllers/update_producto.php" method="POST">
    
    <input type="hidden" name="id_producto" value="<?php echo $producto_r['id_producto'];?>">

	<div class="row">
	    <div class="col-md-8">
		<label> Producto: </label><br>
			<input type="text" name="product_name" placeholder="Digite el producto" required class="form-control" value="<?=$producto_r['product_name'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
		<label> Código: </label><br>
			<input type="number" name="codigo" placeholder="Digite el código del producto" required class="form-control" value="<?=$producto_r['codigo'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Tipo Producto </label><br>	
			<select name="tipo_producto" class="form-control">
				<option disabled selected><?=$producto_r['tipo_producto'];?></option>
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
			<input type="number" name="product_price" placeholder="Digite el Descuento" required class="form-control" value="<?=$producto_r['product_price'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
		<label> Puntos: </label><br>
			<input type="number" name="puntos" placeholder="Digite los puntos" required class="form-control" value="<?=$producto_r['puntos'];?>">
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