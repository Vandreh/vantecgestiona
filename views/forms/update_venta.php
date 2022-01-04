<!-- Criação do Formulário -->
<form action="<?=$GLOBALS['project_index'];?>/controllers/update_venta.php" method="POST">
    
    <input type="hidden" name="id_venta" value="<?php echo $venta_r['id_venta'];?>">

	<div class="row">
	    
	    <div class="col-md-8">
		<label> Producto: </label><br>
			<input type="text" name="producto_venta" placeholder="Digite el producto" required class="form-control" value="<?=$venta_r['producto_venta'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
		<label> Codigo: </label><br>
			<input type="text" name="codigo" placeholder="Digite el codigo" class="form-control" value="<?=$venta_r['codigo'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
		<label> Lote: </label><br>
			<input type="text" name="lote" placeholder="Digite el lote" class="form-control" value="<?=$venta_r['lote'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
		<label> Nombre del Cliente: </label><br>
			<input type="text" name="cliente_name" placeholder="Digite el nombre" required class="form-control" value="<?=$venta_r['cliente_name'];?>">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Precio Compra: </label><br>
			<input type="number" step=".01" name="precio_compra" placeholder="Digite el Precio de Compra" required class="form-control" value="<?=$venta_r['precio_compra'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Precio Venta: </label><br>
			<input type="number" step=".01" name="precio_venta" placeholder="Digite el Precio de Venta" required class="form-control" value="<?=$venta_r['precio_venta'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Fecha Entrega: </label><br>
			<input type="date" name="fecha_entrega" placeholder="Digite la Fecha de Entrega" required class="form-control" value="<?=$venta_r['fecha_entrega'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Fecha Compra: </label><br>
			<input type="date" name="fecha_compra" placeholder="Digite la Fecha de Compra" required class="form-control" value="<?=$venta_r['fecha_compra'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Fecha Venta: </label><br>
			<input type="date" name="fecha_venta" placeholder="Digite la Fecha de Venta" required class="form-control" value="<?=$venta_r['fecha_venta'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Vencimiento: </label><br>
			<input type="date" name="vencimiento" placeholder="Digite el Vencimiento" required class="form-control" value="<?=$venta_r['vencimiento'];?>">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Delivery: </label><br>
			<input type="number" step=".01" name="delivery" placeholder="Digite el Delivery" required class="form-control" value="<?=$venta_r['delivery'];?>">
			<br><br>
		</div>
		
		<!--<div class="col-md-4">
			<label> Descuento: </label><br>
			<input type="number" step=".01" name="descuento_venta" placeholder="Digite el Descuento" required class="form-control" value="<?=$venta_r['descuento_venta'];?>">
			<br><br>
		</div> -->
		
		<div class="col-md-4">
			<label> Tipo Producto </label><br>	
			<select name="tipo_producto" class="form-control">
				<option disabled selected><?=$venta_r['tipo_producto'];?></option>
				<option value="Cuidado de la Piel"> Cuidado de la Piel </option>
				<option value="Maquillaje"> Maquillaje </option>
				<option value="Fragrancia"> Fragrancia </option>
			</select>
			<br><br>
		</div>
		
		<div class="col-md-8">
			<label> Observaciones: </label><br>
			<input type="text" name="observaciones" placeholder="Digite las observaciones" required class="form-control" value="<?=$venta_r['observaciones'];?>">
			<br><br>
		</div>
		
		<hr>			
		<div class="col-md-12">
			<p class="text-right">
			<button class="btn btn-primary"> 
				<i class="fa fa-thumbs-up"></i>
				 Actualizar Venta 
			</button>
			</p>
		</div>	
	</div>
</form>